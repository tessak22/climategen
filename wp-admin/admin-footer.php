<?php
/**
 * WordPress Administration Template Footer
 *
 * @package WordPress
 * @subpackage Administration
 */

// don't load directly
if ( !defined('ABSPATH') )
	die('-1');
?>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter">
	<?php
	/**
	 * Fires after the opening tag for the admin footer.
	 *
	 * @since 2.5.0
	 */
	do_action( 'in_admin_footer' );
    /**
     * WINDMILL CUSTOM
     *
     * Nice little branding display
     */
    ?>
    <p id="footer-left" class="alignleft">
        <img alt="" style="display: inline-block; margin: 0 2px -3px 0;" src="<?php echo WP_SITEURL; ?>/wp-admin/images/windmill-footer-mark.png" />
        Website Design and Development by <a target="_blank" style="color: rgb(205, 65, 44);" href="http://www.windmilldesign.com">Windmill Design</a>
        <?php
            if (function_exists('get_the_ext')) {
                $site_documentation_url = get_the_ext('site_documentation');
                if ($site_documentation_url != '' ) {
                    echo '&mdash; <a target="_blank" href="' . $site_documentation_url . '">Site Documentation</a>';
                }
            }
        ?>
    </p>
	<p id="footer-upgrade" class="alignright">
		<?php
		/**
		 * Filter the version/update text displayed in the admin footer.
		 *
		 * WordPress prints the current version and update information,
		 * using core_update_footer() at priority 10.
		 *
		 * @since 2.3.0
		 *
		 * @see core_update_footer()
		 *
		 * @param string $content The content that will be printed.
		 */
		echo apply_filters( 'update_footer', '' );
		?>
	</p>
	<div class="clear"></div>
</div>
<?php
/**
 * Print scripts or data before the default footer scripts.
 *
 * @since 1.2.0
 *
 * @param string $data The data to print.
 */
do_action( 'admin_footer', '' );

/**
 * Prints any scripts and data queued for the footer.
 *
 * @since 2.8.0
 */
do_action( 'admin_print_footer_scripts' );

/**
 * Print scripts or data after the default footer scripts.
 *
 * The dynamic portion of the hook name, `$GLOBALS['hook_suffix']`,
 * refers to the global hook suffix of the current page.
 *
 * @since 2.8.0
 *
 * @param string $hook_suffix The current admin page.
 */
do_action( "admin_footer-" . $GLOBALS['hook_suffix'] );

// get_site_option() won't exist when auto upgrading from <= 2.7
if ( function_exists('get_site_option') ) {
	if ( false === get_site_option('can_compress_scripts') )
		compression_test();
}

?>

<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>
