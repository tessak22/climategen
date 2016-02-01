<?php

$GLOBALS['is_community_events_page'] = ($post->ID == 56);

$body_class = '';
$body_class = (PAGE_CLIMATE_MN == $post->ID || in_array(PAGE_CLIMATE_MN, get_ancestors($post->ID, 'page'))) ? 'section-climate-minnesota' : '';
$body_class = (PAGE_YOUTH == $post->ID || in_array(PAGE_YOUTH, get_ancestors($post->ID, 'page'))) ? 'section-youth-engagement' : '';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

	<title><?php is_front_page() ? bloginfo('name') : wp_title(' - ' . get_bloginfo('name'), true, 'right'); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
	<script src="<?php bloginfo('template_url') ?>/js/modernizr.js"></script>

	<!--[if lte IE 8]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php
	bedstone_google_fonts('Muli:300,400,400italic|Raleway:200,300,400,700,800,900'); // TODO: fine-tune the list of fonts used!
    if (defined('ENV_SHOW_ANALYTICS') && ENV_SHOW_ANALYTICS) {
        bedstone_google_analytics('UA-49591015-3'); // put UA as string, e.g. 'UA-434233232-1'
    }
	wp_head();
	?>

</head>
<body <?php body_class($body_class); ?> id="top">

<header class="site-header" id="header">

	<div class="container">

		<h1 class="logo">
			<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?> &ndash; <?php bloginfo('description'); ?></a>
		</h1>

		<div class="social hidden-print">

			<ul>
				<li class="social-facebook"><a href="<?php the_ext('social-facebook'); ?>" target="_blank"></a></li>
				<li class="social-twitter"><a href="<?php the_ext('social-twitter'); ?>" target="_blank"></a></li>
				<li class="social-rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank"></a></li>
				<li class="social-youtube"><a href="<?php the_ext('social-youtube'); ?>" target="_blank"></a></li>
			</ul>
			<button class="search-toggle hidden-print"></button>
			<a href="<?php echo get_permalink(46); ?>" class="button button-cta">Donate</a>
			<button class="menu-toggle"><i class="fa fa-bars"></i></button>

		</div>

	</div>

	<nav class="site-nav hidden-print" role="navigation" id="nav_main">

		<ul class="nav-main container">

			<li class="is-parent<?php if(is_section(10)): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink(10); ?>"><?php echo get_the_title(10); ?></a>
				<div class="sub-menu">
					<?php echo bedstone_sub_menu(10) ?>
				</div>
			</li>

			<li class="is-parent<?php if(is_section(11)): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink(11); ?>"><?php echo get_the_title(11); ?></a>
				<ul class="sub-menu sub-menu-multi">

					<li class="is-parent<?php if(is_section(28)): ?> is-current<?php endif; ?>">
						<a href="<?php echo get_permalink(28); ?>"><?php echo get_the_title(28); ?></a>
						<?php echo bedstone_sub_menu(28) ?>
					</li>

					<li class="is-parent<?php if(is_section(PAGE_EDUCATION)): ?> is-current<?php endif; ?>">
						<a href="<?php echo get_permalink(PAGE_EDUCATION); ?>"><?php echo get_the_title(29); ?></a>
						<?php echo bedstone_sub_menu(PAGE_EDUCATION) ?>
					</li>

				</ul>
			</li>

			<li class="is-parent<?php if(is_section(PAGE_IMPACT)): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink(PAGE_IMPACT); ?>"><?php echo get_the_title(PAGE_IMPACT); ?></a>
				<div class="sub-menu">
					<?php echo bedstone_sub_menu(PAGE_IMPACT) ?>
				</div>
			</li>

			<?php $blog = get_option('page_for_posts'); ?>

			<li class="is-parent<?php if(is_section($blog) || is_single() || is_archive()): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink($blog); ?>"><?php echo get_the_title($blog); ?></a>
				<div class="sub-menu">
					<ul>
					    <?php foreach (unserialize(PRIMARY_CATEGORIES) as $catId) : ?>
					        <li><a href="<?php echo esc_url(get_category_link($catId)); ?>"><?php echo get_cat_name($catId); ?></a></li>
				        <?php endforeach; ?>
					</ul>
				</div>
			</li>

			<li class="is-parent<?php if(is_section(14)): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink(14); ?>"><?php echo get_the_title(14); ?></a>
				<div class="sub-menu">
					<?php echo bedstone_sub_menu(14) ?>
				</div>
			</li>

			<li class="is-parent<?php if(is_section(15)): ?> is-current<?php endif; ?>">
				<a href="<?php echo get_permalink(15); ?>"><?php echo get_the_title(15); ?></a>
				<div class="sub-menu">
					<?php echo bedstone_sub_menu(15) ?>
				</div>
			</li>

		</ul>

	</nav>

	<div class="site-search hidden-print">

		<form class="container" action="<?php echo home_url('/'); ?>" method="get" role="search">

			<input class="form-control" type="text" name="s" placeholder="Search this site" value="<?php echo get_search_query() ?>">
			<button type="button" class="search-toggle"></button>

		</form>

	</div>

</header><!-- .site-header -->

<main class="site-main">

<?php get_template_part('inc/responsive-menu'); ?>
