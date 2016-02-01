<?php
/**
 * attachment
 * custom post type
 * blog post
 *
 * @package Bedstone
 */

// get the section title in case this is a blog post
$posts_section_title = bedstone_get_posts_section_title();

get_header(); ?>

	<?php get_template_part('inc/document-header'); ?>

	<div class="container">

		<div class="content col-md-8" role="main">

			<?php
                while (have_posts()) {
                    the_post();
                    get_template_part('content');
                }
                get_template_part('inc/entry-terms');
            ?>

			<?php if(get_post_type() == 'post'): ?>
			<footer class="article-footer">
				<?php get_template_part('nav', 'posts'); ?>
			</footer>
			<?php endif; ?>

		</div>

		<?php get_sidebar('blog'); ?>

	</div>

<?php get_footer(); ?>
