<div class="team-foundation-profiles row">
    <?php

        $mypages = new WP_Query(array('post_type' => 'page', 'post_parent' => $post->ID, 'orderby' => 'menu_order', 'order' => 'asc', 'posts_per_page' => '-1'));

        while ($mypages->have_posts()) {
            $mypages->the_post();
            $fields = (object) get_fields();
            ?>
            <div class="team-foundation-profile col-md-3 col-sm-6 text-center">

                <div class="headshot">
                    <?php
                        $headshot = wp_get_attachment_image_src($fields->our_team_profile_headshot, 'square');
                        if ($headshot) {
                            echo '<a href="' . get_permalink() . '"><img src="'. $headshot[0] .'"></a>';
                        } else {
                            echo '<a href="' . get_permalink() . '"><img src="' . get_bloginfo('template_directory') . '/images/default-no-image.png" alt=""></a>';
                        }
                    ?>

                    <?php if ($fields->our_team_profile_linkedin_link_url) : ?>
                        <a class="linked-in" href="<?php echo $fields->our_team_profile_linkedin_link_url; ?>"></a>
                    <?php endif; ?>
                </div>

                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php if ($fields->our_team_profile_title_position) : ?>
                    <h4><?php echo $fields->our_team_profile_title_position; ?></h4>
                <?php endif; ?>

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
            <?php
        }
        wp_reset_postdata();
    ?>
</div>
