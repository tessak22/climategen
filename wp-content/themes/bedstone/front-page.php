<?php
/**
 * front page
 *
 * @package Bedstone
 */

// grab all the slides
$args = array(
    'post_type' => 'banner_slides',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'nopaging' => true
);
$slides = new WP_Query($args);

get_header(); ?>

	<div class="banner" role="banner" id="banner">

        <div class="banner-mobile" style="background: url('<?php bloginfo('template_directory'); ?>/images/banner-overlay.png'), url(<?php echo get_field('home_mobile_banner_replacement_image'); ?>) no-repeat; background-size: cover; background-position: center;">
            <div class="container">
                <h1><?php echo get_field('home_mobile_banner_replacement_header'); ?></h1>
                <p><?php echo get_field('home_mobile_banner_replacement_subtitle'); ?></p>
                <a class="button button-inverted" href="<?php echo get_field('home_mobile_banner_replacement_button_link'); ?>" rel="external">
                    <?php echo get_field('home_mobile_banner_replacement_button_text'); ?>
                </a>
            </div>
        </div>

		<ul class="slider">
		    <?php while ($slides->have_posts()) : $slides->the_post(); $fields = (object) get_fields(); ?>
                <li style="background-image:url('<?php bloginfo('template_directory'); ?>/images/banner-overlay.png'), url('<?php echo $fields->home_banner_slide_image; ?>');">
                    <div class="container">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo $fields->home_banner_slide_subtitle; ?></p>
                        <?php
                            /**
                             * test the link provided for internal/external
                             */
                            if ('' != $fields->home_banner_slide_button_link && '' != $fields->home_banner_slide_button_text) {
                                // test for id
                                if (is_numeric($fields->home_banner_slide_button_link)) {
                                    // test if id exists
                                    if (false !== get_post($fields->home_banner_slide_button_link)) {
                                        $slide_link = get_permalink($fields->home_banner_slide_button_link);
                                        $slide_link_external = false;
                                    } else {
                                        // bad id
                                        $slide_link = false;
                                        $slide_link_external = false;
                                    }
                                } else {
                                    // as an external link
                                    $slide_link = $fields->home_banner_slide_button_link;
                                    $slide_link_external = true;
                                }
                            } else {
                                // no link
                                $slide_link = false;
                                $slide_link_external = false;
                            }
                        ?>
                        <?php if ($slide_link) : ?>
                            <a rel="<?php echo ($slide_link_external) ? 'external' : ''; ?>" href="<?php echo $slide_link; ?>" class="button button-inverted"><?php echo $fields->home_banner_slide_button_text; ?></a>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
		</ul>

		<nav class="nav-audiences">

			<div class="container">

				<a href="<?php echo get_permalink(134); ?>" class="nav-audience-educator">
					<strong>I'm an Educator</strong>
					<p><?php echo get_field('audience_intro_educator'); ?></p>
				</a>

				<a href="<?php echo get_permalink(135); ?>" class="nav-audience-leader">
					<strong>I'm a Youth Leader</strong>
					<p><?php echo get_field('audience_intro_leader'); ?></p>
				</a>

				<a href="<?php echo get_permalink(136); ?>" class="nav-audience-supporter">
					<strong>I'm a Supporter</strong>
					<p><?php echo get_field('audience_intro_supporter'); ?></p>
				</a>

			</div>

		</nav>

	</div>

	<section class="content container main-container" role="main">
		<?php
    		$query = new WP_Query(array(
    			'posts_per_page' => 4,
    			'category__in' => unserialize(PRIMARY_CATEGORIES_HOME)
    		));
		?>

		<ul class="home-feed row content-list">
			<?php while($query->have_posts()): $query->the_post(); ?>
    			<li class="col-lg-6">
    			    <?php if (has_post_thumbnail()) : ?>
    			    <div class="col-lg-5 pull-right">
        				<a href="<?php the_permalink(); ?>" class="thumb">
        				    <?php the_post_thumbnail('square'); ?>
        				</a>
        			</div>
    				<?php endif; ?>
    				<div class="col-lg-7">
    					<span class="meta">
                            <?php
                                $terms = get_the_terms($id, 'category');
                                $primary_category = get_primary_category(get_the_ID());
                            ?>
    						<a href="<?php echo get_category_link($primary_category->term_id); ?>" class="meta-category-<?php echo $primary_category->term_id; ?>"><?php echo $primary_category->name; ?></a>
    					</span>
    					<h2 class="callout"><a href="<?php the_permalink(); ?>" class="more"><?php the_title(); ?></a></h2>
    				</div>
    			</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>

	</section>

	<section class="home-events">
		<div class="container">

			<?php get_template_part('inc/upcoming-events'); ?>

		</div>
	</section>

    <?php
    // get video info
    $home_featured_video_id = get_field('home_featured_video_id');
    $home_featured_video_title = get_field('home_featured_video_title');
    $home_featured_video_image = get_field('home_featured_video_image');
    ?>

    <?php if ($home_featured_video_id) : ?>
    	<section class="home-video">
	    	
    		<div class="container">
    		    <?php if ($home_featured_video_title) : ?>
                <p class="callout"><?php echo $home_featured_video_title; ?><br></p>
                <p class="call-to-action"><a href="<?php echo get_permalink(39); ?>">View full video gallery</a></p>
                <?php endif; ?>
            </div>   
            <div class="video" data-video="<?php echo $home_featured_video_id ?>"> 
	            <img src="<?php echo ($home_featured_video_image) ? $home_featured_video_image : '//img.youtube.com/vi/'.$home_featured_video_id.'/maxresdefault.jpg' ?>" alt="<?php bloginfo('name') ?>">
            </div>
            
    	</section>
	<?php endif; ?>

<?php get_footer(); ?>
