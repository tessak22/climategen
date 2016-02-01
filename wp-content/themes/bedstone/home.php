<?php
/**
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<?php get_template_part('inc/document-header'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="blog-landing" role="main">

			<div class="youth-action">
				<div class="container">
					<a class="rss-icon" href="<?php echo get_category_feed_link(CAT_YOUTHACTION); ?>" target="_blank"><img class="rss-icon" src="<?php bloginfo('template_url') ?>/images/rss-icon.png"></a>
					<h2><a href="<?php echo get_category_link(CAT_YOUTHACTION); ?>"><?php echo get_cat_name(CAT_YOUTHACTION); ?></a></h2>
					<p><?php echo category_description(CAT_YOUTHACTION); ?></p>
				</div>
			</div>

			<div class="climate-lessons">
				<div class="container">
					<a class="rss-icon" href="<?php echo get_category_feed_link(CAT_CLIMATELESSONS); ?>" target="_blank"><img class="rss-icon" src="<?php bloginfo('template_url') ?>/images/rss-icon.png"></a>
					<h2><a href="<?php echo get_category_link(CAT_CLIMATELESSONS); ?>"><?php echo get_cat_name(CAT_CLIMATELESSONS); ?></a></h2>
                    <p><?php echo category_description(CAT_CLIMATELESSONS); ?></p>
				</div>
			</div>

			<div class="climate-mn">
				<div class="container">
					<a class="rss-icon" href="<?php echo get_category_feed_link(CAT_CLIMATEMN); ?>" target="_blank"><img class="rss-icon" src="<?php bloginfo('template_url') ?>/images/rss-icon.png"></a>
					<h2><a href="<?php echo get_category_link(CAT_CLIMATEMN); ?>"><?php echo get_cat_name(CAT_CLIMATEMN); ?></a></h2>
					<p><?php echo category_description(CAT_CLIMATEMN); ?></p>
				</div>
			</div>

			<div class="climate-news">
				<div class="container">
					<a class="rss-icon" href="<?php echo get_category_feed_link(CAT_CLIMATENEWS); ?>" target="_blank"><img class="rss-icon" src="<?php bloginfo('template_url') ?>/images/rss-icon.png"></a>
					<h2><a href="<?php echo get_category_link(CAT_CLIMATENEWS); ?>"><?php echo get_cat_name(CAT_CLIMATENEWS); ?></a></h2>
					<p><?php echo category_description(CAT_CLIMATENEWS); ?></p>
				</div>
			</div>

			<div class="climate-justice">
				<div class="container">
					<a class="rss-icon" href="<?php echo get_category_feed_link(CAT_CLIMATEJUSTICE); ?>" target="_blank"><img class="rss-icon" src="<?php bloginfo('template_url') ?>/images/rss-icon.png"></a>
					<h2><a href="<?php echo get_category_link(CAT_CLIMATEJUSTICE); ?>"><?php echo get_cat_name(CAT_CLIMATEJUSTICE); ?></a></h2>
					<p><?php echo category_description(CAT_CLIMATEJUSTICE); ?></p>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
