<?php
/**
 * sidebar for blog items
 */

// find if this post is in one of the primary categories
$nav_categories_current = '';
if ('post' == get_post_type()) {
    // test posts for primary category
    $primary_cat = get_primary_category($post->ID);
    if ($primary_cat) {
        $nav_categories_current = $primary_cat->term_id;
    }
}

?>
<aside class="sidebar sidebar-blog col-md-4" role="complementary">

    <nav class="nav-categories hidden-print <?php echo ($nav_categories_current) ? 'nav-categories-current-' . $nav_categories_current : ''; ?>">
        <ul>
            <?php
                foreach (unserialize(PRIMARY_CATEGORIES) as $cat) {
                    wp_list_categories(array(
                        'title_li' => '',
                        'include' => (string) $cat,
                        'depth' => 1
                    ));
                }
            ?>
        </ul>
    </nav>

    <nav class="nav-categories-secondary hidden-print">
        <h4>Categories</h4>
        <ul>
            <?php
                $nav_categories = array('1403,154,1404,1405,1484,37,1482,1483');
                foreach ($nav_categories as $cat) {
                    wp_list_categories(array(
                        'title_li' => '',
                        'include' => (string) $cat,
                        'depth' => 1
                    ));
                }
            ?>
        </ul>
    </nav>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            /* wait for DOM ready */
            //console.log( 'jQuery version: ' + jQuery.fn.jquery ); // version
            //console.log( 'jQuery version (aliased): ' + $.fn.jquery ); // version, alias confirmation
            $('.nav-authors select').on('change', function(){
                _this_val = $(this).val();
                if (_this_val > 0) {
                    window.location = '/?author=' + _this_val;
                }
            });
        });
    </script>

</aside>
