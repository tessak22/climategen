<?php
/**
 * content output, list
 *
 * @package Bedstone
 */
?>

<div class="row">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	    <?php
	        if ( has_post_thumbnail() ) {
	            echo '<div class="col-sm-3 post-image">';

				$featured_image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'square');
				if ($featured_image_attributes) {
				    $src = $featured_image_attributes[0];
				    echo '<div class="circle"><img src="' . $src . '"></div>';
				}

	            echo '</div>';
	            echo '<div class="col-sm-9 post-content">';
	        }
	        else {
	            echo '<div class="col-md-12 post-content">';
	        }
	    ?>
	        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	        <?php
	            if ('post' == get_post_type()) {
	                get_template_part('nav', 'article-meta');
	            }
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

	</article>
</div>
