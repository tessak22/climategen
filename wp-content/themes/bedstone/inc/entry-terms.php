
<?php

$categories = (is_page()) ? get_the_terms($post->ID, 'page_category') : get_the_category();
$tags 		= (is_page()) ? get_the_terms($post->ID, 'page_tag') : get_the_tags();

if( ! empty($categories) || ! empty($tags)): ?>

<div class="entry-terms box">

	<?php if(false !== $categories && count($categories)): ?>
	<dl class="entry-the-categories">
		<dt>Published in:</dt>
		<dd>
			<ul>
				<?php foreach($categories as $term): ?>
				<li><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
				<?php endforeach; ?>
			</ul>
		</dd>
	</dl>
	<?php endif; ?>

	<?php if (false !== $tags && count($tags)) : ?>
	<dl class="entry-the-tags">
		<dt>Topic tags:</dt>
		<dd>
			<ul>
				<?php foreach($tags as $term): ?>
				<li><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
				<?php endforeach; ?>
			</ul>
		</dd>
	</dl>
	<?php endif; ?>

</div>

<?php endif; ?>
