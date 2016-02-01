<?php
/*
Plugin Name: Snippets by Windmill Design
Plugin URI:
Description: Management for short text strings.
Version: 1.1
Author: Windmill Design
Author URI: http://www.windmilldesign.com
License: None.
*/

add_action( 'init' , 'create_wd_snippets' , 0 );
function create_wd_snippets()
{
    $arr_custom_post_type_options = array(
        array(
            'label' => 'snippets',
            'singular' => 'Snippet',
            'plural' => 'Snippets',
            'supports' => array( 'title' ),
        ),
    );
    foreach( $arr_custom_post_type_options as $cpt_opts ) {
        $label = 'wd_' . $cpt_opts[ 'label' ];
        $labels = array(
            'name'                => $cpt_opts[ 'plural' ],
            'singular_name'       => $cpt_opts[ 'singular' ],
            'menu_name'           => $cpt_opts[ 'plural' ],
            'parent_item_colon'   => 'Parent:',
            'all_items'           => $cpt_opts[ 'plural' ],
            'view_item'           => 'View',
            'add_new_item'        => 'Add New',
            'add_new'             => 'Add New',
            'edit_item'           => 'Edit',
            'update_item'         => 'Update',
            'search_items'        => 'Search ' . $cpt_opts[ 'plural' ],
            'not_found'           => 'None found',
            'not_found_in_trash'  => 'None found in Trash',
        );
        $args = array(
            'label'               => $label,
            'description'         => 'Custom Post Type: ' . $cpt_opts[ 'plural' ],
            'labels'              => $labels,
            'supports'            => $cpt_opts[ 'supports' ],
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
        register_post_type( $label , $args );
    }
}

// return the snippet text
function get_the_snippet( $id )
{
    return get_post_type( $id ) == 'wd_snippets' ? get_the_title( $id ) : '';
}

// echo the snippet
function the_snippet( $id )
{
	echo get_the_snippet( $id );
}

/**
 * snippet_shortcode
 *
 * input:  int id
 *         string paragraph (only useful if set to 'true')
 * return: string snippet
 *
 */
add_shortcode( 'snippet' , 'snippet_shortcode' );
function snippet_shortcode( $atts ) {
	$ret = '';
	extract( shortcode_atts( array(
		'id' => -1,
		'paragraph' => false
	), $atts ) );
	if( get_post_type( $id ) == 'wd_snippets' ) {
	    $ret = $paragraph == 'true' ? apply_filters( the_content , get_the_snippet( $id ) ) : get_the_snippet( $id );
	}
	return $ret;
}