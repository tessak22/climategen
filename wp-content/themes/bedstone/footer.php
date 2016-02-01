
</main><!-- site-main -->

<footer class="site-footer">

	<section class="footer-promos">

		<div class="wrap">

			<div class="container">

				<div class="footer-promo-donate">
					<h2>Donate Now</h2>
					<p><?php if(function_exists('show_text_block')) { echo show_text_block('footer-donate-description', true); } ?></p>
					<a href="<?php echo get_permalink(PAGE_DONATE); ?>" class="button button-inverted">Donate Now</a>
				</div>

				<div class="footer-promo-subscribe">
					<h2>Stay Informed</h2>
					<p><?php if(function_exists('show_text_block')) { echo show_text_block('footer-stay-informed-description', true); } ?></p>
					<a href="<?php echo get_permalink( 10528 ); ?>" class="button button-inverted">Sign Up Now</a>
				</div>

			</div>

		</div>

	</section>

	<div class="footer-info container">

		<span class="copyright">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <a href="<?php echo get_permalink( 10471 ); // Site Credits ?>">Site Credits</a>
		</span>

		<ul class="footer-nav">
			<?php wp_list_pages(array('include' => array(17,18,19,20,84,10770), 'title_li' => '')); ?>
		</ul>

	</div>

</footer>

<?php wp_footer(); ?>

<!--[if lte IE 9]>
<script src="https://cdn.jsdelivr.net/jquery.placeholder/2.0.8/jquery.placeholder.min.js" type="text/javascript"></script>
<script> jQuery(document).ready(function($){ $('input, textarea').placeholder(); }); </script>
<![endif]-->

<script src="<?php bloginfo('template_url') ?>/js/masonry.js"></script>

</body>
</html>
