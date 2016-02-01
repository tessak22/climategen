<?php
/**
 * included to functions.php
 *
 * @package Bedstone
 */

/**
 * placeholder
 */
add_action( 'wp_ajax_placeholder' , 'ajax_placeholder' );
add_action( 'wp_ajax_nopriv_placeholder' , 'ajax_placeholder' );
function ajax_placeholder()
{
    exit;
}
