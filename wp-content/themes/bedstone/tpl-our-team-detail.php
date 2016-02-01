<?php
/**
 * Template Name: Our Team Detail
 *
 * @package Bedstone
 */

$fields = (object) get_fields();

get_header(); ?>
	
	<?php get_template_part('inc/document-header'); ?>
	
	<div class="container our-team-detail">

		<div class="row">

			<div class="content col-md-9" role="main">

				<p class="callout"><?php the_field('our_team_profile_title_position'); ?></p>
				
				<?php 
				
				while(have_posts()) { 
					the_post(); 
					get_template_part('content'); 
				} 
							
				?>

				
			</div><!--.content-->


			<div class="col-md-3 team-foundation-profile">
				<div class="headshot">
	                <?php
	                    $headshot = wp_get_attachment_image_src($fields->our_team_profile_headshot, 'square');
	                    if ($headshot) {
	                        echo '<img src="'. $headshot[0] .'">';
	                    } else {
	                        echo '<img src="' . get_bloginfo('template_directory') . '/images/default-no-image.png" alt="">';
	                    }
	                ?>

	                <?php if ($fields->our_team_profile_linkedin_link_url) : ?>
	                    <a class="linked-in" href="<?php echo $fields->our_team_profile_linkedin_link_url; ?>"></a>
	                <?php endif; ?>
	            </div>
            </div>
						
		</div><!--.row-->
		
	</div><!--.container-->
	
<?php get_footer(); ?>