<?php
/**
 * 404
 *
 * @package Bedstone
 */

get_header(); ?>
	
	<?php get_template_part('inc/document-header'); ?>
	
	<div class="container">
		
		<div class="content col-md-8" role="main">
			
			<p class="callout">We're sorry.<br>We couldn't find the page you requested.</p>
			<p class="call-to-action"><a href="/">Visit our Home page</a></p>
			<?php get_search_form(); ?>
			
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
