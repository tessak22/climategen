<?php
/**
 * posts nav, for linking to next post in a series
 *
 * @package Bedstone
 */

$prev = get_previous_post_link('%link');
$next = get_next_post_link('%link');
?>

<?php if ($prev || $next) : ?>
    <nav class="nav-prevnext nav-prevnext-posts hidden-print">
        <ul>
            <?php
                echo ($prev) ? '<li class="nav-item-prev">' . $prev . '</li>' : '';
                echo ($next) ? '<li class="nav-item-next">' . $next . '</li>' : '';
            ?>
        </ul>
    </nav>
<?php endif; ?>
