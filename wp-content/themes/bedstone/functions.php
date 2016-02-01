<?php

define('PAGE_HOME', 6);
define('PAGE_IMPACT', 12);
define('PAGE_BLOG', 13);
define('PAGE_CONNECT', 15);
define('PAGE_CONTACT_US', 16);
define('PAGE_OUR_TEAM', 23);
define('PAGE_YOUTH', 28);
define('PAGE_EDUCATION', 29);
define('PAGE_YEAMN', 30);
define('PAGE_MIDWESTYOUTHCLIMATEMOVEMENT', 31);
define('PAGE_POLICYCONNECTIONS', 32);
define('PAGE_MENTORSHIPPROGRAM', 33);
define('PAGE_CLIMATE_CURRICULA', 34);
define('PAGE_PROFESSIONAL_DEVELOPMENT', 35);
define('PAGE_DONATE', 46);
define('PAGE_EVENTS', 56);
define('PAGE_CLIMATE_MN', 83);
define('PAGE_LANDING_EDUCATION', 134);
define('PAGE_LANDING_YOUTH', 135);
define('PAGE_LANDING_SUPPORTER', 136);
define('PAGE_ONLINE_CURRICULUM', 10602);
define('PAGE_CLIMATE_MN_STORIES', 10630);
define('PAGE_CURRICULA_SEARCH_RESULTS', 10872);
define('PAGE_PROF_DEV_SEARCH_RESULTS', 10918);

define('CAT_YOUTHACTION', 2);
define('CAT_CLIMATELESSONS', 3);
define('CAT_CLIMATEMN', 4);
define('CAT_CLIMATENEWS', 1401);
define('CAT_CLIMATEJUSTICE', 6);
define('CAT_ENEWS', 7);
define('PRIMARY_CATEGORIES', serialize(array(
    CAT_YOUTHACTION,
    CAT_CLIMATELESSONS,
    CAT_CLIMATEMN,
    CAT_CLIMATENEWS,
    CAT_CLIMATEJUSTICE
)));
define('PRIMARY_CATEGORIES_HOME', serialize(array(
    CAT_YOUTHACTION,
    CAT_CLIMATELESSONS,
    CAT_CLIMATEMN,
    CAT_CLIMATENEWS,
    CAT_CLIMATEJUSTICE,
    CAT_ENEWS
)));
define('EDUCATION_CATEGORIES', serialize(array(
    CAT_CLIMATELESSONS,
    CAT_CLIMATEMN
)));

define('TAG_POLICY', 534);
define('TAG_YEAMN', 643);
define('TAG_MIDWEST', 684);
define('TAG_MENTORSHIP', 906);

require TEMPLATEPATH . '/functions/bedstone.php';
require TEMPLATEPATH . '/functions/ajax.php';

define('ADMIN_HIDE_EDITORS', serialize(array(PAGE_HOME)));

function bedstone_sub_menu($child_of) {

	$menu = wp_list_pages(array(
		'child_of' => $child_of,
		'sort_column' => 'menu_order',
		'title_li' => '',
		'depth' => 1,
		'echo' => false,
        'exclude' => '10809,10810',
	));

	return '<ul>'.$menu.'</ul>';
}

function is_section($page_id = null) {
	global $post;
	if(!$page_id) $page_id = $post->ID;
	return is_page($page_id) || (is_page() && is_child_of($page_id));
}

function is_child_of($parent_id, $page_id = null) {
	if(is_404()) return false;
	global $post;
	if($page_id == null) $page_id = $post->ID;

	$current = get_page($page_id);

	if($current->post_parent != 0) {
		if($current->post_parent != $parent_id) {
			return is_child_of($parent_id, $current->post_parent);
		} else {
			return true;
		}
	}

	return false;
}

function is_last_post($query = null) {
	global $wp_query;
	if(!$query) $query = $wp_query;
	return ($query->current_post + 1) == $query->post_count;
}


add_action('init', function() {

	register_taxonomy('page_category', array('page'), array(
		'hierarchical' 	=> true,
		'rewrite' 		=> array(
            'slug' => 'subject',
            'with_front' => false
        ),
		'labels' 		=> array(
			'name' 				=> 'Subjects',
			'singular_name' 	=> 'Subject',
			'search_items' 		=> 'Search Subjects',
			'all_items'			=> 'All Subjects',
			'edit_item'			=> 'Edit Subject',
			'update_item'		=> 'Update Subject',
			'add_new_item'		=> 'Add New Subject',
			'new_item_name'		=> 'New Subject Name',
			'parent_item'		=> 'Parent Subject',
			'parent_item_colon'	=> 'Parent Subject:'
		)
	));

	register_taxonomy('page_tag', array('page'), array(
		'hierarchical' 	=> false,
		'rewrite' 		=> array(
            'slug' => 'topic',
            'with_front' => false
        ),
		'labels' 		=> array(
			'name' 				=> 'Topics',
			'singular_name' 	=> 'Topic',
			'search_items' 		=> 'Search Topics',
			'all_items'			=> 'All Topics',
			'edit_item'			=> 'Edit Topic',
			'update_item'		=> 'Update Topic',
			'add_new_item'		=> 'Add New Topic',
			'new_item_name'		=> 'New Topic Name'
		)
	));

    register_taxonomy('curricula_search', array('page'), array(
        'hierarchical'  => true,
        'public'        => false,
        'show_ui'       => true,
        'labels'        => array(
            'name'              => 'Curricula Search Classifications',
            'singular_name'     => 'Curricula Search Classification',
            'search_items'      => 'Search',
            'all_items'         => 'All',
            'edit_item'         => 'Edit',
            'update_item'       => 'Update',
            'add_new_item'      => 'Add New',
            'new_item_name'     => 'New Classification Name',
            'parent_item'       => 'Parent',
            'parent_item_colon' => 'Parent:'
        )
    ));

    register_taxonomy('prof_dev_search', array('page'), array(
        'hierarchical'  => true,
        'public'        => false,
        'show_ui'       => true,
        'labels'        => array(
            'name'              => 'Professional Development Search Classifications',
            'singular_name'     => 'Professional Development Search Classification',
            'search_items'      => 'Search',
            'all_items'         => 'All',
            'edit_item'         => 'Edit',
            'update_item'       => 'Update',
            'add_new_item'      => 'Add New',
            'new_item_name'     => 'New Classification Name',
            'parent_item'       => 'Parent',
            'parent_item_colon' => 'Parent:'
        )
    ));

	register_nav_menus(array(
		'nav-sidebar-custom' => 'Custom Sidebar Navigation',
	));
});

/**
 * Custom mce editor styles
 * Remove the WYSIWYG on specific pages to avoid confusion
 */
add_action('admin_init', function() {

	add_editor_style('css/style-editor-01.css'); // cached, update revision as needed

	$post_id = isset($_GET['post']) ? $_GET['post'] : null ;
	if($post_id && defined('ADMIN_HIDE_EDITORS')) {
		if(in_array($post_id, unserialize(ADMIN_HIDE_EDITORS))) {
			remove_post_type_support('page', 'editor');
		}
	}
});

/**
 * Set the content width based on the theme's design and stylesheet.
 * @link http://codex.wordpress.org/Content_Width
 */
if (!isset($content_width)) {
    $content_width = 770; /* pixels */
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
add_action('after_setup_theme', 'custom_theme_setup');
function custom_theme_setup()
{
    load_theme_textdomain('bedstone', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_post_type_support('page', array('excerpt'));

    add_theme_support('post-thumbnails');
	set_post_thumbnail_size(180, 180, true);
	add_image_size('square', 350, 350, true);
    add_image_size('square-large', 450, 450, true);

    add_filter('image_size_names_choose', 'lc_insert_custom_image_sizes');
}
function lc_insert_custom_image_sizes($image_sizes)
{
    // get the custom image sizes
    global $_wp_additional_image_sizes;
    // if there are none, just return the built-in sizes
    if (empty( $_wp_additional_image_sizes)) {
        return $image_sizes;
    }
    // add all the custom sizes to the built-in sizes
    foreach ($_wp_additional_image_sizes as $id => $data) {
        // take the size ID (e.g., 'my-name'), replace hyphens with spaces,
        // and capitalise the first letter of each word
        if (!isset($image_sizes[$id])) {
            $image_sizes[$id] = ucfirst(str_replace('-', ' ', $id));
        }
    }
    return $image_sizes;
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
function custom_enqueue_scripts() {
    $id = get_the_ID(); // use for testing page-specific styles and scripts
    // styles
    //wp_enqueue_style('style-name', get_template_directory_uri() . '/css/example.css', array(), '0.1.0');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', '4.1.0');
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css', array(), '3.3.1');
    wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/css/jquery.magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('bedstone', get_stylesheet_uri(), array('bootstrap'));
    wp_enqueue_style('bedstone-responsive', get_template_directory_uri() . '/css/style-responsive.css', array('bootstrap', 'bedstone'));
    // scripts
    //wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array*(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', array('jquery'), '3.3.1', true);
    wp_enqueue_script('masonry-js', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/masonry.pkgd.min.js', array('jquery'), '3.2.2', true);
    if (PAGE_HOME == $id) {
        wp_enqueue_script('fitvids-js', '//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', array('jquery'), '1.1.0', true);
    }
    // wp_enqueue_script('easing-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '1.3', true);
    wp_enqueue_script('bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '4.1.2', true);
    wp_enqueue_script('init-js', get_template_directory_uri() . '/js/init.js', array('jquery', 'bootstrap-js'), '1.2', true);
}

/**
 * [optional, enabled by default] bootstrap support for comments
 */
add_filter('comment_form_default_fields', 'bootstrap3_comment_form_fields');
function bootstrap3_comment_form_fields($fields)
{
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req) ? " aria-required='true'" : '';
    $html5 = (current_theme_supports('html5', 'comment-form')) ? true : false;
    $rand = rand(1000, 9999); // for element ids
    $fields = array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author' . $rand . '">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</label> '
                    . '<input class="form-control" id="author' . $rand . '" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email' . $rand . '">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label> '
                    . '<input class="form-control" id="email' . $rand . '" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email'])
                    . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '',
        /* requested remove URL field
        'url'    => '<div class="form-group comment-form-url"><label for="url' . $rand . '">' . __('Website') . '</label> ' . '<input class="form-control" id="url' . $rand . '" name="url" '
                    . ($html5 ? 'type="url"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>',
        */
    );
    return $fields;
}

add_filter('comment_form_defaults', 'bootstrap3_comment_form');
function bootstrap3_comment_form($args)
{
    $rand = rand(1000, 9999); // for element ids
    $args['comment_field'] = '<div class="form-group comment-form-comment">'
                           . '<label for="comment' . $rand . '">' . _x( 'Comment', 'noun' ) . ' <span class="required">*</span></label>'
                           . '<textarea class="form-control" id="comment' . $rand . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>'
                           . '</div>';
    return $args;
}

add_action('comment_form', 'bootstrap3_comment_button');
function bootstrap3_comment_button()
{
    echo '<button class="btn btn-default" type="submit">' . __('Submit') . '</button>';
}

/**
 * register custom mce styles: http://codex.wordpress.org/TinyMCE_Custom_Styles
 */
add_filter('tiny_mce_before_init', 'add_style_formats');
function add_style_formats($init)
{
    $style_formats = array(
        array(
            'title' => 'Callout',
            'selector' => 'p',
            'classes' => 'callout',
        ),
        array(
            'title' => 'Footnote',
            'selector' => 'p',
            'classes' => 'footnote',
        ),
        array(
            'title' => 'Call-to-Action',
            'selector' => 'p',
            'classes' => 'call-to-action',
        ),
        array(
            'title' => 'Large Numbers',
            'selector' => 'p',
            'classes' => 'large-numbers',
        )
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init['style_formats'] = json_encode($style_formats);
    return $init;
}

/**
 * external links
 *
 * @param string $key The array key of the link
 *
 * @return string Link to the resource
 */
function get_the_ext($key)
{
    $arr_ext = array(
        'windmill_design' => 'http://www.windmilldesign.com',
        'site_documentation' => 'https://docs.google.com/document/d/19_Mq95SVZUfrbXtL6-K21-U9q5DC471ym-eVPi7wEQs/pub',
        /* the following social links are managed by a redirects plugin */
        'social-facebook' => '/facebook/',
        'social-twitter' => '/twitter/',
        'social-youtube' => '/youtube/',
    );
    $link = (array_key_exists($key , $arr_ext)) ? $arr_ext[$key] : '#get_the_ext_error';
    return $link;
}

function the_ext($key)
{
    echo get_the_ext($key);
}

/**
 * shortcodes for three- and four-columns in wysiwyg
 */
add_shortcode('column-2', 'shortcode_column_2');
function shortcode_column_2($atts, $content = null) {
    return shortcode_column_n($atts, $content, 2); // TWO
}
add_shortcode('column-3', 'shortcode_column_3');
function shortcode_column_3($atts, $content = null) {
    return shortcode_column_n($atts, $content, 3); // THREE
}
add_shortcode('column-4', 'shortcode_column_4');
function shortcode_column_4($atts, $content = null)
{
    return shortcode_column_n($atts, $content, 4); // FOUR
}
function shortcode_column_n($atts, $content = null, $cols = 3)
{
    /**
     * this is the primary shortcode column function
     */
    $patterns = array('/^<\/p>/', '/<p>$/');
    $content = preg_replace($patterns, '', $content); // strip auto <p> tags
    return '<div class="shortcode-column shortcode-column-' . $cols . '">' . $content . '</div>';
}

/**
 * get primary category for a post
 *
 * client uses a set of special-case categories
 * some posts may need to feature the highest-ranking special-case category in a few places
 *
 * @param int id
 *
 * @return bool false or a term object
 */
function get_primary_category($id = null)
{
    $ret = false;
    if (!$id) {
        global $post;
        $id = $post->ID;
    }
    $terms = get_the_terms($id, 'category');
    if ($terms) {
        foreach (array_merge(unserialize(PRIMARY_CATEGORIES), array(CAT_ENEWS)) as $cat) {
            if (isset($terms[$cat])) {
                $ret = $terms[$cat];
                break; // foreach
            }
        }
    }
    return $ret;
}

add_action('init', 'wd_register_custom_post_types', 0);
function wd_register_custom_post_types()
{
    $arr_custom_post_type_options = array(
        /*
         array(
            'label' => 'lowercase_name' // ** 20 char max, no spaces or caps
            'singlar' => 'Human-Readable Item' // singular name
            'plural' => 'Human-Readable Items' // plural name
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats')
         ),
         */
        array(
            'label' => 'banner_slides',
            'singular' => 'Home Page Banner Slide',
            'plural' => 'Home Page Banner Slides',
            'supports' => array('title', 'custom-fields', 'page-attributes', 'revisions'),
        ),
    );
    foreach ($arr_custom_post_type_options as $cpt_opts) {
        $label = $cpt_opts['label'];
        $labels = array(
            'name'                => $cpt_opts['plural'],
            'singular_name'       => $cpt_opts['singular'],
            'menu_name'           => $cpt_opts['plural'],
            'parent_item_colon'   => 'Parent:',
            'all_items'           => $cpt_opts['plural'],
            'view_item'           => 'View',
            'add_new_item'        => 'Add New',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit',
            'update_item'         => 'Update',
            'search_items'        => 'Search ' . $cpt_opts['plural'],
            'not_found'           => 'None found',
            'not_found_in_trash'  => 'None found in Trash',
        );
        $args = array(
            'label'               => $label,
            'description'         => 'Custom Post Type: ' . $cpt_opts['plural'],
            'labels'              => $labels,
            'supports'            => $cpt_opts['supports'],
            'hierarchical'        => true,
            'public'              => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => true,
            'menu_position'       => 25.3,
            //'menu_icon'           => '',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'rewrite'             => false,
            'capability_type'     => 'page',
        );
        register_post_type($label, $args);
    }
}

// add page id column to Admin views
add_action('admin_init', 'custom_admin_init');
function custom_admin_init()
{
    // page
    add_filter('manage_pages_columns', 'pid_column');
    add_action('manage_pages_custom_column', 'pid_value', 10, 2);

    // post
    add_filter('manage_posts_columns', 'pid_column');
    add_action('manage_posts_custom_column', 'pid_value', 10, 2);

    // taxonomy
    foreach(get_taxonomies() as $taxonomy) {
        add_action("manage_edit-${taxonomy}_columns", 'pid_column');
        add_filter("manage_${taxonomy}_custom_column", 'pid_return_value', 10, 3);
    }
}
function pid_column($cols)
{
    $cols['pid'] = 'ID';
    return $cols;
}
function pid_value($column, $id)
{
    if ($column == 'pid') {
        echo $id;
    }
}
function pid_return_value($value, $column, $id)
{
    if($column == 'pid') {
        $value = $id;
    }
    return $value;
}

/**
 * prevents excessive comments possibly related to XSS exploits
 */
add_filter('preprocess_comment', 'nyt_preprocess_comment');
function nyt_preprocess_comment($comment)
{
    if (strlen($comment['comment_content']) > 5000) {
        wp_die('Comment is too long.');
    }
    return $comment;
}

/**
 * anchor button in wysiwyg
 */
if (is_admin()) {
    add_filter('mce_external_plugins', 'custom_mce_external_plugins');
}
function custom_mce_external_plugins($plugins)
{
    $plugins['anchor'] = get_bloginfo('template_directory') . '/js/tinymce/anchor/plugin.min.js';
    return $plugins;
}
