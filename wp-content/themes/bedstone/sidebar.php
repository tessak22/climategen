<?php
/**
 * sidebar
 *
 * @package Bedstone
 */

// check for vars from page.php
global $ancestors,
       $nav_secondary_children,
       $nav_secondary_children_heading;

?>

<aside class="sidebar col-md-4" role="complementary">

    <?php if ($nav_secondary_children) : ?>
    	<nav class="nav-secondary hidden-print <?php echo (in_array(PAGE_YOUTH, $ancestors)) ? 'nav-secondary-youth-engagement' : ''; ?>">
    		<ul class="nav-secondary-desktop-menu">
    			<?php echo $nav_secondary_children; ?>
    		</ul>
    	</nav>
    <?php endif; ?>

    <?php if (PAGE_EDUCATION == $post->ID) : ?>
        <div class="subscribe subscribe-sidebar hidden-print">
            <h4>Climate Lesson Update</h4>
            <p>Subscribe to our Monthly Education Newsletter, Climate Lesson Update</p>
            <a class="button button-inverted" href="<?php echo get_permalink(10528); // subscribe ?>">Sign Up Now</a>
        </div>

        <nav class="nav-rss hidden-print">
            <h4>Follow Our Education Blogs</h4>
            <ul>
                <li><a href="<?php echo get_category_link(3) . 'feed/rss2/'; ?>">Climate Lessons Blog</a></li>
                <li><a href="<?php echo get_category_link(4) . 'feed/rss2/'; ?>">Climate Minnesota Blog</a></li>
            </ul>
        </nav>
    <?php endif; ?>

    <?php if (PAGE_CLIMATE_MN_STORIES == $post->post_parent) : ?>
        <div class="climate-mn-stories-sidebar">
            <?php the_field('climate_mn_stories_custom_navigation'); ?>
        </div>
    <?php endif; ?>

    <?php
        if (PAGE_ONLINE_CURRICULUM == $post->post_parent) {
            // online curric pages might have FREE DOWNLOAD link
            $online_curriculum_free_download_link = get_field('online_curriculum_free_download_link');
            if ('' != $online_curriculum_free_download_link) {
                // test for id
                if (is_numeric($online_curriculum_free_download_link)) {
                    // test if id exists
                    if (false !== get_post($online_curriculum_free_download_link)) {
                        $free_download_link = get_permalink($online_curriculum_free_download_link);
                        $free_download_link_external = false;
                    } else {
                        // bad id
                        $free_download_link = false;
                        $free_download_link_external = false;
                    }
                } else {
                    // as an external link
                    $free_download_link = $online_curriculum_free_download_link;
                    $free_download_link_external = true;
                }
            } else {
                // no link
                $free_download_link = false;
                $free_download_link_external = false;
            }

            if ($free_download_link) :
            ?>
            <nav class="nav-tertiary hidden-print">
                <ul>
                    <li>
                        <a rel="<?php echo ($free_download_link_external) ? 'external' : ''; ?>" href="<?php echo $free_download_link; ?>">FREE Download</a>
                    </li>
                </ul>
            </nav>
            <?php
            endif;
        }
    ?>

    <?php
        $featured_logo = (isset($post->ID)) ? get_field('featured_logo', $post->ID) : false;
        if (!empty($featured_logo)) {
            ?>
            <div class="featured-logo featured-logo-sidebar">
                <img src="<?php echo $featured_logo['sizes']['medium']; ?>" alt="<?php echo $featured_logo['alt']; ?>">
            </div>
            <?php
        }
    ?>

</aside>
