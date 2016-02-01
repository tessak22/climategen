<?php
/**
 * default content output
 * page
 * single
 * attachment
 *
 * @package Bedstone
 */

// get article title (only displayed if conditions are met below)
$article_title = bedstone_get_the_alternate_title();

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php if ('post' == get_post_type() || $article_title != get_the_title()) : ?>
        <header class="article-header">
            <h1><?php echo $article_title; ?></h1>
            <?php
                if ('post' == get_post_type()) {
                    get_template_part('nav', 'article-meta');
                }
            ?>
        </header>
    <?php endif; ?>

    <?php
    $featured_logo = (isset($post->ID)) ? get_field('featured_logo', $post->ID) : false;
    if (!empty($featured_logo)) {
        ?>
        <div class="featured-logo featured-logo-content">
            <img src="<?php echo $featured_logo['sizes']['medium']; ?>" alt="<?php echo $featured_logo['alt']; ?>">
        </div>
        <?php
    }
    ?>

    <?php the_content('', true); // strip more tags ?>

    <?php
        if ('post' == get_post_type()) {
            get_template_part('inc/nav-share');
        }
    ?>

    <?php comments_template(); ?>

</article>
