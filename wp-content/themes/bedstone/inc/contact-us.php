<div class="col-sm-6 contact-us-details">
	<h3>Our Address:</h3>
	<?php the_field('contact_us_our_address'); ?>
	<h3>You Can Also Reach Us At:</h3>
	<?php the_field('contact_us_you_can_also_reach_us_at'); ?>
	<h3>For Media Inquiries:</h3>
	<?php the_field('contact_us_for_media_inquiries'); ?>
</div>
<div class="col-sm-6 contact-us-image">
	 <?php the_post_thumbnail( 'square-large' ); ?> 
</div>
<div class="col-sm-12 contact-us-learn-more">
	<?php the_field('contact_us_learn_more'); ?>
</div>