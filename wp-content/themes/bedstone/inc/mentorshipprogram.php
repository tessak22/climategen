<?php
/**
 * page-specific include
 */

// get recent posts from specific categories
$query = new WP_Query(array(
    'posts_per_page' => 2,
    'tag_id' => TAG_MENTORSHIP
));
?>

<div class="blog-feeds">
    <?php while($query->have_posts()): $query->the_post(); $primary_category = get_primary_category(get_the_ID()); ?>
        <div class="blog-feed row">
            <div class="col-sm-8 details">
                <span class="meta"><a href="<?php echo get_category_link($primary_category->term_id); ?>" class="meta-category-<?php echo $primary_category->term_id; ?>"><?php echo $primary_category->name; ?></a></span>
                <h2 class="callout"><a class="more" href="<?php the_permalink(); ?>" class="more"><?php the_title(); ?></a></h2>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="col-sm-4">
                    <a href="<?php the_permalink(); ?>" class="thumb">
                        <?php the_post_thumbnail('square'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; wp_reset_query(); ?>
    <div class="view-all-blog-articles row">
        <a href="<?php echo get_permalink(PAGE_BLOG); ?>">View All Blog Articles</a>
    </div>
</div>
