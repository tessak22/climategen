
	<header class="document-header" <?php if( get_field('title_background_image') ): ?>style="background-image: url('<?php bloginfo('template_url') ?>/images/document-header-bg-gradient.png'), url('<?php the_field('title_background_image'); ?>');"<?php endif; ?>>

		<div class="container">

			<h1 class="col-md-9">

				<?php

				if (PAGE_CLIMATE_MN_STORIES == $post->post_parent) {
				    // this will always display a static title
				    echo 'Minnesota Stories in a Changing Climate';
				} elseif (is_page()) {
					the_title();
				} elseif (is_single()) {
					echo 'Blog';
				} elseif (is_category()) {
					echo 'Blog'; // single_cat_title();
				} elseif (is_tag()) {
					echo 'Blog'; // single_tag_title();
				} elseif (is_author() && '' != get_the_author_meta('ID')) {
				    // author is a non-subscriber
					printf(__('Author: %s', 'bedstone'), get_the_author());
                } elseif (is_author()) {
                    // author is a subscriber, so WordPress can't find the name
                    echo 'Author Archive';
				} elseif (is_day()) {
					printf(__('Archive: %s', 'bedstone'), get_the_date('l, F j, Y'));
				} elseif (is_month()) {
					printf(__('Archive: %s', 'bedstone'), get_the_date('j Y'));
				} elseif (is_year()) {
					printf(__('Archive: %s', 'bedstone'), get_the_date('Y'));
				} elseif (is_search()) {
					printf(__('Results for: %s', 'bedstone'), get_search_query());
				} elseif (is_home()) {
					echo get_the_title(get_option('page_for_posts', true));
				} elseif (is_404()) {
					echo 'Page Not Found';
				} else {
					echo 'Archives';
				}

				?>

            </h1>

			<div class="col-md-3 climate-mn-logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/climate-mn-logo.png">
			</div>

            <?php
            /**
             * the heading below only appears on desktop views
             * above the sidebar nav
             */
            // check for vars from page.php
            global $ancestors,
                   $nav_secondary_children,
                   $nav_secondary_children_heading;
            ?>
            <?php if ($nav_secondary_children) : ?>
                <div class="nav-secondary-parent desktop-header <?php echo (in_array(PAGE_YOUTH, $ancestors)) ? 'nav-secondary-youth-engagement' : ''; ?>">
                    <div><?php echo $nav_secondary_children_heading; ?></div>
                </div>
            <?php endif; ?>

		</div>
	</header>
