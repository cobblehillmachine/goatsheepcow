<?php get_header(); ?>
<div class="flexslider-wrapper">

	<div class="flexslider homepage">
		<ul class="slides">
		<?php while( have_rows('slider_images') ): the_row();
			$image = get_sub_field('image');
			$text = get_sub_field('content');
			$cta_text = get_sub_field('cta_text');
			$cta_link = get_sub_field('cta_link'); ?>
			<li>

				<img src="<?php echo $image ?>">
				<?php if ($text) { ?>
				<div class="caption-cont hidden">
					<div class="slider-text">
						<?php echo $text ?>
					</div>
					<a class="underline" href="<?php echo $cta_link ?>"><?php echo $cta_text ?></a>
				</div>
			<?php } ?>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
	<div class="caption-wrapper">
		<div class="caption">

		</div>
	</div>

</div>
<h1 style="text-align:center;padding:2%;padding-bottom:0;">Two Locations in Downtown Charleston</h1>
<div class="homepage cont">
	 <?php while ( have_posts() ) : the_post();?>
	 <div class="row first">
		<hr>
		<div class="left-cont sandwich-of-day">
			<?php the_field('sandwich_of_the_day') ?>
			<!-- <p><a target=_blank href="<?php the_field('google_map_link', 'user_2') ?>"><?php the_field('street_address', 'user_2'); ?><br><?php the_field('city_state', 'user_2'); ?></a></p>
			<a class="underline" href="/contact">Learn More</a> -->
			<!-- <div id="instafeed"></div> -->
		</div>

		<div class="right-cont location">
			<?php the_field('location_details') ?>
			<!-- <p><a target=_blank href="<?php the_field('google_map_link', 'user_2') ?>"><?php the_field('street_address', 'user_2'); ?><br><?php the_field('city_state', 'user_2'); ?></a></p>
			<a class="underline" href="/contact">Learn More</a> -->
		</div>
		<hr>
	</div>

	 <div class="row second">
		<h1 style="text-align:center;padding:3%;">Available at Each Location</h1>
		<div class="left-cont sandwich-of-day-info">
			<?php the_field('daily_sandwich_info') ?>
		</div>

		<div class="right-cont cheese-plate-info">
			<?php the_field('cheese_plates_info') ?>
		</div>
	    <hr>
	 </div>

</div>
<div class="homepage bottom">
	<div class="image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cheese-montage.jpg" /></div>
	<div class="cheese-montage">

		<div class="content">
			<?php the_content() ?>
		</div>

		<?php endwhile; ?>
	</div>
	<!-- <div class="keep-in-touch">
		<div class="border">
			<div class="inner-border">
				<div class="sideways mobile">
					<p>Keep in touch</p>
				</div>
				<div class="social-container">
					<a target=_blank class="facebook" href="<?php the_field('facebook_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" /><p>like us on <strong>facebook</strong></p></a>
					<a target=_blank class="instagram" href="<?php the_field('instagram_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" /><p>follow us on <strong>instagram</strong></p></a>
					<a target=_blank class="twitter" href="<?php the_field('twitter_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" /><p>connect on <strong>twitter</strong></p></a>
				</div>
			</div>
		</div>
		<div class="sideways desktop">
			<p>Keep in touch</p>
		</div>
	</div> -->
	<div class="image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cheese-montage.jpg" /></div>
</div>

<?php get_footer(); ?>
