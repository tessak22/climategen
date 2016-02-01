<?php
/**
 * Template Name: Default Template with Child Page List
 */

// pages might show a child nav
$nav_secondary_children = null;
$nav_secondary_children_heading = null;
if ('page' == get_post_type()) {
    // test if custom menu is set for this page
    $page_custom_sidebar_nav_menu = get_field('page_custom_sidebar_nav_menu');
    if ('' != $page_custom_sidebar_nav_menu && false !== wp_get_nav_menu_items($page_custom_sidebar_nav_menu)) {
        // custom menu exists
        // get the custom menu
        $nav_secondary_children_heading = $page_custom_sidebar_nav_menu;
        $nav_secondary_children = wp_nav_menu(array(
            'menu' => $page_custom_sidebar_nav_menu,
            'depth' => 1,
            'title_li' => '',
            'container' => false, // removes the div
            'items_wrap' => '%3$s', // removes the ul
            'echo' => false
        ));
    } else {
        // no custom menu exists
        // get children for nav
        $nav_secondary_children_heading = get_the_title();
        $nav_secondary_children = wp_list_pages('child_of=' . $post->ID . '&depth=1&echo=0&title_li=');
    }
}

get_header(); ?>

<?php get_template_part('inc/document-header'); ?>

<?php if ($nav_secondary_children) : ?>
    <div class="container mobile-only">
        <nav class="nav-secondary nav-secondary-responsive hidden-print <?php echo (in_array(PAGE_YOUTH, get_ancestors($post->ID, 'page'))) ? 'nav-secondary-youth-engagement' : ''; ?>">
            <header class="nav-secondary-parent responsive-header">
                <div><?php echo $nav_secondary_children_heading; ?></div>
            </header>
            <div class="show-navigation" data-toggle="collapse" data-target=".nav-secondary-responsive-menu">Show Navigation</div>
            <ul class="nav-secondary-responsive-menu collapse">
                <?php echo $nav_secondary_children; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>

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
        <div class="content col-md-8" role="main">
            <?php
                while(have_posts()) {
                    the_post();
                    get_template_part('content');
                }
                get_template_part('inc/display-children');
                get_template_part('variants/after-content');
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
