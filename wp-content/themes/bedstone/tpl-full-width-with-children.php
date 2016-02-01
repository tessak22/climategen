<?php
/**
 * Template Name: Full Width with Child Page List
 *
 * @package Bedstone
 */

get_header(); ?>

<?php get_template_part('inc/document-header'); ?>

<div class="container">

    <?php if (PAGE_CLIMATE_MN_STORIES == $post->post_parent) : ?>
       <div class="row">
           <h2><?php the_title(); ?></h2>
           <?php if ('' != get_field('climate_mn_stories_video_id')) : ?>
               <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('climate_mn_stories_video_id'); ?>" frameborder="0" allowfullscreen></iframe>
           <?php endif; ?>
       </div>
    <?php endif; ?>

    <div class="row">
        <div class="content col-md-12" role="main">
            <?php
                while(have_posts()) {
                    the_post();
                    get_template_part('content');
                }
                get_template_part('inc/display-children');
                get_template_part('variants/after-content');
            ?>
        </div><!--.content-->
    </div><!--.row-->

</div><!--.container-->

<?php get_footer(); ?>
