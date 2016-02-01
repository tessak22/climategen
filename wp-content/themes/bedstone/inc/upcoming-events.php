<?php

if (is_front_page() || PAGE_EDUCATION == $post->ID) {
    // check custom field for special events
    $event_override_page_ids = get_field('event_override_page_ids');
    $event_override_page_ids = preg_replace('/[^0-9,]/', '', $event_override_page_ids); // removes non-numeric and non-comma
    $arr_event_override_page_ids = array_filter(explode(',', $event_override_page_ids)); // creates an array for iteration
    if (!empty($arr_event_override_page_ids)) {
        foreach ($arr_event_override_page_ids as $id) {
            $args = array(
                'post_type' => 'page',
                'post_parent' => PAGE_EVENTS, // Events
                'page_id' => $id,
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
            $event_override_page = new WP_Query($args);
            if ($event_override_page->have_posts()) {
                // the query returned a result, so store it for later
                $upcoming_events[] = $event_override_page->posts[0];
                $arr_exclude_ids[] = $event_override_page->posts[0]->ID;
            }
            if (isset($upcoming_events) && 2 == count($upcoming_events)) {
                // we don't need any more events
                break;
            }
        }
    }
}

if (!isset($upcoming_events) || 2 > count($upcoming_events)) {
    // get all children of Events, ordered by event_date_start, that have a event_date_end >= today
    $args = array(
        'post_type' => 'page',
        'post_parent' => PAGE_EVENTS, // Events
        'posts_per_page' => (isset($upcoming_events) ? 2 - count($upcoming_events) : 2),
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
    if (!empty($arr_exclude_ids)) {
        // add the event override ids to the exclusions
        $args['post__not_in'] = $arr_exclude_ids;
    }
    $events = new WP_Query($args);
    if ($events->have_posts()) {
        // move posts to array
        $upcoming_events = (isset($upcoming_events)) ? array_merge($upcoming_events, $events->posts) : $events->posts;
    }
}

?>

<?php if (isset($upcoming_events) && !empty($upcoming_events)) : ?>
    <div class="upcoming-events upcoming-events-content row">
        <h2>Upcoming Events</h2>
        <p class="call-to-action"><a href="<?php echo get_permalink(PAGE_EVENTS); ?>">View all Events</a></p>
        <ul>
            <?php for ($i = 0; $i < 2; $i++) : setup_postdata($GLOBALS['post'] =& $upcoming_events[$i]); $fields = (object) get_fields(); ?>
    		    <li>
                    <a href="<?php echo get_permalink(); ?>" class="thumb">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('square');
                            } else {
                                echo '<img src="' . get_bloginfo('template_url') . '/images/upcoming-events-no-image.png" alt="">';
                            }
                        ?>
                    </a>
                    <h3 class="callout"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php if ('' != $fields->event_date_info) : ?>
                        <span class="meta meta-date"><?php echo $fields->event_date_info; ?></span>
                    <?php endif; ?>
                </li>
    		<?php endfor; ?>
    	</ul>
    </div>
<?php endif; wp_reset_postdata(); ?>
