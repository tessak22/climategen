<?php
/**
 * comments
 *
 * Both current comments and the comment form.
 *
 * @package Bedstone
 */

/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<?php if (comments_open() || '0' != get_comments_number()) : ?>
    <section id="comments" class="container-comments">
        <header class="comments-header">
            <h1><?php _e('Comments', 'bedstone'); ?></h1>
        </header>

    	<?php if (have_comments()) : ?>

    	    <div class="comments">
                <?php
                    wp_list_comments( array(
                        'style'      => 'div',
                        'short_ping' => true,
                    ) );
                ?>
    	    </div>

    		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
    		    <footer class="comments-footer">
            		<nav class="nav-comments">
            			<div class="nav-comments-prev"><?php previous_comments_link(__('&larr; Older Comments', 'bedstone')); ?></div>
            			<div class="nav-comments-next"><?php next_comments_link(__('Newer Comments &rarr;', 'bedstone')); ?></div>
            		</nav>
        		</footer>
    		<?php endif; // check for comment navigation ?>

    	<?php endif; ?>

    	<?php
    		if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) {
                // comments are closed, so leave a note
    		    echo '<p class="callout">' . __('Comments are closed.', 'bedstone') . '</p>';
    		} else {
    		    echo '<div class="hidden-print">';
    		    comment_form(array(
                    'title_reply' => 'Leave a Comment',
                ));
                echo '</div>';
    		}
    	?>

    </section><!-- #comments -->
<?php endif; ?>
