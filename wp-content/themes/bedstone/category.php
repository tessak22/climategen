<?php
/**
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

	<?php get_template_part('inc/document-header'); ?>

	<div class="container">

		<div class="row">

			<div class="content content-list col-md-8" role="main">

				<?php
					if (have_posts()) {
						while(have_posts()) {
						    the_post();
						    get_template_part('content', 'list');
                        }
                        get_template_part('nav', 'archive');
					} else {
						get_template_part('content', 'none');
					}
				?>

			</div>

			<?php get_sidebar('blog'); ?>

		</div>

	</div>

<?php get_footer(); ?>
