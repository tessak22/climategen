<?php
/**
 * page-specific include
 *
 * VERY similar to inc/professional-development-search-results.php
 *
 * Changes may need to be made to this and also the file above.
 */

$tax = 'curricula_search';
$arr_post_term_ids = (isset($_POST[$tax]) && is_array($_POST[$tax])) ? array_filter($_POST[$tax]) : array();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged,
    'orderby' => 'menu_order title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => $tax,
            'field' => 'term_id',
            'terms' => $arr_post_term_ids,
            'operator' => 'IN'
        )
    )
);
$results = new WP_Query($args);

if ($results->have_posts()) {
    while ($results->have_posts()) {
        $results->the_post();
        get_template_part('content', 'list');
    }
    /* note that prev/next are SWITCHED and assuming chronological order */
    $next = get_previous_posts_link('Newer items');
    $prev = get_next_posts_link('Older items', $results->max_num_pages);
    ?>

    <?php if ($prev || $next) : ?>
        <nav class="nav-prevnext nav-prevnext-archive nav-prevnext-hijack hidden-print">
            <ul>
                <?php
                    echo ($prev) ? '<li class="nav-item-prev">' . $prev . '</li>' : '';
                    echo ($next) ? '<li class="nav-item-next">' . $next . '</li>' : '';
                ?>
            </ul>
        </nav>
        <script>
            (function($) {
                var body = $(document.body);
                body.on('click', '.nav-prevnext-hijack a', function(e){
                    e.preventDefault();
                    var self = $(this),
                        form = $('<form method="post" action="' + self.attr('href') + '">');
                    form.append([
                        <?php foreach ($arr_post_term_ids as $term_id) : ?>
                            $('<input type="hidden" name="<?php echo $tax; ?>[]">').val('<?php echo $term_id; ?>'),
                        <?php endforeach; ?>
                    ]);
                    form.appendTo(body).submit();
                });
            })(jQuery);
        </script>
    <?php endif;

    wp_reset_postdata();
}
