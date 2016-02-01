<?php
/**
 * these should all be bedstone-specific, not project-specific
 *
 * for this file, put all _action and _filter functions near top
 * all other functions can go below
 *
 * @package Bedstone
 */

/**
 * debug helper
 *
 * @param mixed $var To be debugged
 * @param bool $exit Triggers php exit
 */
function debug($var, $exit = false)
{
    echo '<pre class="debug">';
    var_dump($var);
    echo '</pre>';
    if ($exit) {
        exit();
    }
}

/**
 * enable minor updates
 *
 * http://codex.wordpress.org/Configuring_Automatic_Background_Updates#Constant_to_Configure_Core_Updates
 * https://developer.wordpress.org/reference/classes/core_upgrader/should_update_to_version/
 */
add_filter('allow_minor_auto_core_updates', '__return_true', 999); // high priority executes AFTER plugin

/**
 * login style
 */
add_action('login_enqueue_scripts', 'bedstone_login_css');
function bedstone_login_css()
{
    echo "
        <style>
            body.login div#login h1 a {
                background: url('" . WP_SITEURL . "/wp-admin/images/windmill-login-cobrand.png');
                background-size: 276px 77px;
                width: 276px;
                height: 77px;
            }
        </style>
    ";
}
add_filter('login_headerurl', 'bedstone_login_logo_url');
function bedstone_login_logo_url()
{
    return 'http://www.windmilldesign.com';
}
add_filter('login_headertitle', 'bedstone_login_logo_url_title');
function bedstone_login_logo_url_title()
{
    return 'Windmill Design';
}

/**
 * custom mce editor blockformats
 *     ** this should come BEFORE any other MCE-related functions
 */
add_filter('tiny_mce_before_init', 'bedstone_editor_items');
function bedstone_editor_items($init)
{
    // Add block format elements you want to show in dropdown
    $init['block_formats'] = 'Paragraph=p; Heading (h2)=h2; Sub-heading (h3)=h3; Minor Heading (h4)=h4';
    // Disable unnecessary items and buttons
    $init['toolbar1'] = 'bold,italic,alignleft,aligncenter,alignright,bullist,numlist,outdent,indent,link,unlink,anchor'; // 'template,|,bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv',
    $init['toolbar2'] = 'formatselect,pastetext,removeformat,charmap,undo,redo,wp_help,styleselect'; // 'formatselect,underline,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help',
    // Display the kitchen sink by default
    $init['wordpress_adv_hidden'] = false;
    // [optional] Add elements not included in standard tinyMCE dropdown
    //$init['extended_valid_elements'] = 'code[*]';
    return $init;
}

/**
 * filter title for trademarks
 * replaces reg and tm with html superscript element and html chars
 */
if (!is_admin()) {
    // does not filter in the admin area
    add_filter('the_title', 'bedstone_title_trademarks', 10, 2); // extra args re: http://codex.wordpress.org/Function_Reference/add_filter
}
function bedstone_title_trademarks($title)
{
    $ret_val = $title;
    $ret_val = preg_replace('/\x{00A9}/u', '<sup>&copy;</sup>', $ret_val);
    $ret_val = preg_replace('/\x{00AE}/u', '<sup>&reg;</sup>', $ret_val);
    $ret_val = preg_replace('/\x{2122}/u', '<sup>&trade;</sup>', $ret_val);
    return $ret_val;
}

/**
 * filter body class
 */
add_filter('body_class', 'bedstone_body_class');
function bedstone_body_class($classes)
{
    $root_parent = false;
    if (is_front_page()) {
        $root_parent = 'front-page';
    } elseif (is_home()) {
        $root_parent = 'home';
    } elseif (is_category()) {
        $root_parent = 'category';
    } elseif (is_tag()) {
        $root_parent = 'tag';
    } elseif (is_author()) {
        $root_parent = 'author';
    } elseif (is_day() || is_month() || is_year()) {
        $root_parent = 'date';
    } elseif (is_search()) {
        $root_parent = 'search';
    } else {
        $root_parent = bedstone_get_the_root_parent(get_the_ID());
    }
    if ($root_parent) {
        $classes[] = 'root-parent-' . $root_parent;
    }
    return $classes;
}

/**
 * display google gonts
 *
 * @param string $str_fonts same as google provides
 *
 * output: link elements for the google fonts
 * output: writes WordPress option to db
 *
 * @return int 0 Error
 *             1 Output was built
 *             2 Output from cache
 */
function bedstone_google_fonts($str_fonts = '')
{
    $output = '';
    $ret = 0;
    $option_name_for_cache = '_google_fonts_cache';
    $arr_cache = json_decode(get_option($option_name_for_cache));
    if (is_object($arr_cache) && $arr_cache->input == $str_fonts) {
        // use cache
        $ret = 2;
        $output = $arr_cache->output;
    } elseif ('' != $str_fonts) {
        // build output
        $ret = 1;
        $arr_fonts = explode('|', $str_fonts); // break apart each font set
        foreach ($arr_fonts as $font) {
            if (false === strpos($font, ':')) {
                $arr_sets[] = $font . ':400'; // has no specific type, use 400
            } else {
                if (false === strpos($font, ',')) {
                    $arr_sets[] = $font; // has only one specific type
                } else {
                    // has multiple types
                    $arr_family = explode(':', $font);
                    $arr_types = explode(',', $arr_family[1]);
                    foreach ($arr_types as $type) {
                        $arr_sets[] = $arr_family[0] . ':' . $type;
                    }
                }
            }
        }
        $output = "<!--[if gt IE 8]><!--> \n"
                . "<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=" . $str_fonts . "' /> \n"
                . "<!--<![endif]--> \n"
                . "<!--[if lte IE 8]> \n";
        foreach ($arr_sets as $set) {
            $output .= "<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=" . $set . "' /> \n";
        }
        $output .= "<![endif]--> \n";
        $arr_cache = array(
            'input' => $str_fonts,
            'output' => $output
        );
        // delete_ then add_ instead of update_ because update_ does not have an autoload parameter
        delete_option($option_name_for_cache);
        add_option($option_name_for_cache, json_encode($arr_cache), '', 'no');
    }
    echo $output; // might be an empty string, oh well
    echo "<!-- link google fonts : $ret --> \n";
    return $ret;
}

/**
 * display google analytics script
 *
 * @param string $ua Client user account
 *
 * output: google analytics script
 */
function bedstone_google_analytics($ua = '')
{
    if ('' != $ua) {
        echo "
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', '" . $ua . "', 'auto');
            ga('send', 'pageview');
        </script>
        ";
    }
}

/**
 * get the root parent
 *
 * @param int $id Post id
 *
 * @return int Post id of the root-most parent, effectively identifying the section
 */
function bedstone_get_the_root_parent($id)
{
    $child = get_post($id);
    if ($child && $child->post_parent) {
        $ancestors = get_post_ancestors($child->ID);
        $root = end($ancestors);
    } else {
        $root = $child->ID;
    }
    return $root;
}
function bedstone_the_root_parent($id)
{
    echo bedstone_get_the_root_parent($id);
}

/**
 * alternate titles
 *
 * these are for seo when we need one "menu" title and another via title_alternate custom field
 */
function bedstone_the_alternate_title($before = '', $after = '', $echo = true)
{
    // based on the_title() in /wp-includes/post-template.php
    $title = bedstone_get_the_alternate_title();
    if (0 == strlen($title)) {
        return;
    }
    $title = $before . $title . $after;
    if ($echo) {
        echo $title;
    } else {
        return $title;
    }
}
function bedstone_get_the_alternate_title($post = 0)
{
    // based on get_the_title() in /wp-includes/post-template.php
    $post = get_post($post);
    $title = isset($post->post_title) ? $post->post_title : '';
    $id = isset($post->ID) ? $post->ID : 0;

    // alternate is found here
    $title_alternate = get_post_meta($id, 'title_alternate', true);
    $title = ('' != $title_alternate) ? $title_alternate : $title;

    if (!is_admin()) {
        if (!empty($post->post_password)) {
            $protected_title_format = apply_filters('protected_title_format', __('Protected: %s'));
            $title = sprintf($protected_title_format, $title);
        } elseif (isset($post->post_status) && 'private' == $post->post_status) {
            $private_title_format = apply_filters('private_title_format', __('Private: %s'));
            $title = sprintf($private_title_format, $title);
        }
    }
    return apply_filters('the_title', $title, $id);
}

/**
 * nav child pages shortcode
 *
 * @param mixed $atts Array with optional string 'exclude' or optional string 'parent'
 *
 * @return string HTML output child nav
 *
 * usage: [child_pages parent="25" exclude="58,74"] ... returns children of 25 excluding 58 and 74
 */
add_shortcode('child_pages', 'bedstone_child_pages_shortcode');
function bedstone_child_pages_shortcode($atts)
{
    extract(shortcode_atts(array(
        'exclude' => '',
        'parent' => get_the_ID(),
    ), $atts));
    $args = array(
        'exclude' => $exclude,
        'child_of' => $parent,
        'depth' => 1,
        'sort_column' => 'menu_order',
        'post_status' => 'publish',
        'title_li' => '',
        'echo' => 0
    );
    $child_pages = wp_list_pages($args);
    return "\n<ul class='nav-child-pages-shortcode'>\n" . $child_pages . "</ul>\n\n";
}

/**
 * determine if posts should use alternate title as the document title, e.g. "Blog" for a blog section
 *
 * @return string Title or empty string
 */
function bedstone_get_posts_section_title()
{
    $ret = '';
    if (isset($GLOBALS['bedstone_posts_section_title'])) {
        $ret = $GLOBALS['bedstone_posts_section_title'];
    } elseif ('post' == get_post_type()) {
        $section_title = get_the_title(get_option('page_for_posts', true));
        if ('' != $section_title) {
            $ret = $section_title;
        }
    }
    return $ret;
}

/**
 * Add Bootstrap classes to wp_list_pages()
 *
 * @uses Walker_Page
 */
class Bedstone_Bootstrap_Walker_Page extends Walker_Page
{
    /**
     * WINDMILL CUSTOM
     * The menu depth
     * Note: Is NOT zero-based
     *
     * @access protected
     * @var int
     */
    protected $max_depth;

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth. It is possible to set the
     * max depth to include all depths, see walk() method.
     *
     * This method should not be called directly, use the walk() method instead.
     *
     * @since 2.5.0
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing.
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              An array of arguments.
     * @param string $output            Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {

        if ( !$element )
            return;

        /**
         * WINDMILL CUSTOM
         * Make the max depth accessible to the class.
         */
        $this->__set('max_depth', $max_depth);

        $id_field = $this->db_fields['id'];
        $id       = $element->$id_field;

        //display this element
        $this->has_children = ! empty( $children_elements[ $id ] );
        if ( isset( $args[0] ) && is_array( $args[0] ) ) {
            $args[0]['has_children'] = $this->has_children; // Backwards compatibility.
        }

        $cb_args = array_merge( array(&$output, $element, $depth), $args);
        call_user_func_array(array($this, 'start_el'), $cb_args);

        // descend only when the depth is right and there are childrens for this element
        if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

            foreach( $children_elements[ $id ] as $child ){

                if ( !isset($newlevel) ) {
                    $newlevel = true;
                    //start the child delimiter
                    $cb_args = array_merge( array(&$output, $depth), $args);
                    call_user_func_array(array($this, 'start_lvl'), $cb_args);
                }
                $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
            }
            unset( $children_elements[ $id ] );
        }

        if ( isset($newlevel) && $newlevel ){
            //end the child delimiter
            $cb_args = array_merge( array(&$output, $depth), $args);
            call_user_func_array(array($this, 'end_lvl'), $cb_args);
        }

        //end this element
        $cb_args = array_merge( array(&$output, $element, $depth), $args);
        call_user_func_array(array($this, 'end_el'), $cb_args);
    }

    /**
     * @see Walker::start_lvl()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     * @param array $args
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        /**
         * WINDMILL CUSTOM
         * Add .dropdown-menu for Bootstrap
         */
        $output .= "\n$indent<ul class='children dropdown-menu bedstone-bootstrap-hover-dropdown'>\n";
    }

    /**
     * @see Walker::start_el()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $page Page data object.
     * @param int $depth Depth of page. Used for padding.
     * @param int $current_page Page ID.
     * @param array $args
     */
    public function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
        if ( $depth ) {
            $indent = str_repeat( "\t", $depth );
        } else {
            $indent = '';
        }

        $css_class = array( 'page_item', 'page-item-' . $page->ID);

        /**
         * WINDMILL CUSTOM
         * Initialize anchor attributes
         */
        $anchor_css_class = array();
        $anchor_data_toggle = '';

        /**
         * WINDMILL CUSTOM
         * Do not append attributes if max depth has been reached.
         * Note: Depth is zero-based, max depth is not.
         */
        if ( ($this->max_depth == 0 || $this->max_depth > $depth+1 ) && isset( $args['pages_with_children'][ $page->ID ] ) ) {
            // these items are for parents that are not at the lowest depth of the menu
            $css_class[] = 'page_item_has_children';
            $css_class[] = 'dropdown';
            $anchor_css_class[] = 'dropdown-toggle';
            $anchor_data_toggle = 'dropdown';
        }

        if ( ! empty( $current_page ) ) {
            $_current_page = get_post( $current_page );
            if ( $_current_page && in_array( $page->ID, $_current_page->ancestors ) ) {
                $css_class[] = 'current_page_ancestor';
            }
            if ( $page->ID == $current_page ) {
                $css_class[] = 'current_page_item';
            } elseif ( $_current_page && $page->ID == $_current_page->post_parent ) {
                $css_class[] = 'current_page_parent';
            }
        } elseif ( $page->ID == get_option('page_for_posts') ) {
            $css_class[] = 'current_page_parent';
        }

        /**
         * Filter the list of CSS classes to include with each page item in the list.
         *
         * @since 2.8.0
         *
         * @see wp_list_pages()
         *
         * @param array   $css_class    An array of CSS classes to be applied
         *                             to each list item.
         * @param WP_Post $page         Page data object.
         * @param int     $depth        Depth of page, used for padding.
         * @param array   $args         An array of arguments.
         * @param int     $current_page ID of the current page.
         */
        $css_classes = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
        $anchor_css_classes = implode(' ', $anchor_css_class);

        if ( '' === $page->post_title ) {
            $page->post_title = sprintf( __( '#%d (no title)' ), $page->ID );
        }

        $args['link_before'] = empty( $args['link_before'] ) ? '' : $args['link_before'];
        $args['link_after'] = empty( $args['link_after'] ) ? '' : $args['link_after'];

        /** This filter is documented in wp-includes/post-template.php */
        $output .= $indent . sprintf(
            '<li class="%s"><a href="%s" class="%s" data-toggle="%s">%s%s%s</a>',
            $css_classes,
            get_permalink( $page->ID ),
            $anchor_css_classes,
            $anchor_data_toggle,
            $args['link_before'],
            apply_filters( 'the_title', $page->post_title, $page->ID ),
            $args['link_after']
        );

        if ( ! empty( $args['show_date'] ) ) {
            if ( 'modified' == $args['show_date'] ) {
                $time = $page->post_modified;
            } else {
                $time = $page->post_date;
            }

            $date_format = empty( $args['date_format'] ) ? '' : $args['date_format'];
            $output .= " " . mysql2date( $date_format, $time );
        }
    }

    /**
     * @see Walker::end_el()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $page Page data object. Not used.
     * @param int $depth Depth of page. Not Used.
     * @param array $args
     */
    public function end_el( &$output, $page, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }

}
