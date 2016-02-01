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
    <div class="child-item row">
        <?php if (has_post_thumbnail()) : ?>
            <div class="col-md-3">
                <div class="circle">
                    <?php the_post_thumbnail('square'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-<?php echo (has_post_thumbnail()) ? '9' : '12'; ?>">
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
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
    </div>
<?php endwhile; wp_reset_postdata(); ?>
