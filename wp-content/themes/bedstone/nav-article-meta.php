<?php
/**
 * meta for posts
 *
 * @package Bedstone
 */

$author_id = get_the_author_meta('ID');
$meta_author = ($author_id) ? '<a href="' . get_author_posts_url($author_id) . '">' . get_the_author() . '</a>' : '';

$meta_date = get_the_date();
$meta_categories = get_the_category_list(', ');
$meta_tags = get_the_tag_list('', ', ');
?>

<?php if ($meta_author || $meta_date || $meta_categories || $meta_tags) : ?>
    <nav class="nav-article-meta">
        <ul>
            <?php
                echo ($meta_author) ? '<li>By: ' . $meta_author . '</li>' : '';
                echo ($meta_date) ? '<li>' . $meta_date . '</li>' : '';
                echo ($meta_categories) ? '<li>Categories: ' . $meta_categories . '</li>' : '';
                echo ($meta_tags) ? '<li>Tags: ' . $meta_tags . '</li>' : '';
            ?>
        </ul>
    </nav>
<?php endif; ?>
