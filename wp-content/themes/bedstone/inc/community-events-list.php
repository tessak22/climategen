<?php
/**
 * page specfic include
 */

// get all children of Comm Events, ordered by event_date_start, that have a event_date_end >= today
$args = array(
    'post_parent' => PAGE_EVENTS, // what we do > edu > public outreach > comm events
    'post_type' => 'page',
    'nopaging' => true,
    'order' => 'ASC',
    'orderby' => 'meta_value',
    'meta_key' => 'event_date_start',
    'meta_type' => 'NUMERIC',
    'meta_query' => array(
        array(
            'key' => 'event_date_end',
            'type' => 'NUMERIC',
            'value' => date('Ymd'),
            'compare' => '>='
        ),
    ),
);
$events = new WP_Query($args);
?>

<?php if ($events->have_posts()) : ?>
    <div class="events-list events-list-community-events">
        <?php while ($events->have_posts()) : $events->the_post(); $fields = (object) get_fields(); ?>
            <div class="child-item row">
                <div class="col-md-3">
                    <div class="circle">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('square');
                            } else {
                                // @TODO default image
                                echo '<img src="' . get_bloginfo('template_directory') . '/images/default-no-image.png" alt="">';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php
                        // display the event meta, if exists
                        echo ($fields->event_date_info) ? '<h4>' . $fields->event_date_info . '</h4>' : '';
                        echo ($fields->event_location) ? '<div>' . $fields->event_location . '</div>' : '';
                    ?>
                </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php else : // no upcoming events ?>
    <p class="callout">Sorry &ndash; we have no upcoming events scheduled.</p>
<?php endif; ?>
