<?php
/**
 * Template Name: Masonry
 *
 * @package Bedstone
 */

get_header(); ?>

	<?php get_template_part('inc/document-header'); ?>

	<div class="container">
		<div class="row">
			<div class="content col-md-12" role="main">

				<?php
    				while(have_posts()) {
    					the_post();
    					get_template_part('content');
    				}
				?>

				<div id="masonry">
				    <?php
    				    $mypages = new WP_Query(array(
    				        'post_type' => 'page',
    				        'post_parent' => $post->ID,
    				        'nopaging' => true,
    				        'orderby' => 'menu_order title',
    				        'order' => 'asc'
                        ));
                    ?>
                    <?php while ($mypages->have_posts()) : $mypages->the_post(); ?>
                        <div class="masonry-item">
                            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php if (has_post_thumbnail()) : ?>
                                <figure>
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                </figure>
                            <?php endif; ?>
                            <?php
                                /**
                                 * alternative to the_excerpt()
                                 */
                                $the_content = get_the_content('', false, '');
                                if (has_excerpt() || false === strpos($the_content, '<!--more-->')) {
                                    // has custom excerpt or is missing <!--more--> tag, so show excerpt
                                    the_excerpt();
                                } else {
                                    // has no custom excerpt, so show the content up to the <!--more--> tag
                                    echo '<p>' . wp_strip_all_tags(strip_shortcodes($the_content), true) . '</p>';
                                }
                            ?>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
				</div>

			</div><!--.content-->
		</div><!--.row-->
	</div><!--.container-->

<?php get_footer(); ?>
