<?php get_header(); ?>
<div class="hero contact">
	<?php the_post_thumbnail('full') ?>
	<div class="banner">
		<div class="seal">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-seal@2x.gif" />
		</div>
		<div class="banner-text">
			<?php the_field('banner_text') ?>
		</div>
		
	</div>
</div>

<div class="contact-cont">
	<div class="contact-info">
		<ul>
			<li><h4>Goat.Sheep.Cow</h4></li>
			<br>
			<a target=_blank href="<?php the_field('google_map_link', 'user_3') ?>">
				
				<li><h4><?php the_field('street_address', 'user_3'); ?></h4></li>
				<li><h4>Charleston, SC</h4></li>
				<li><h4>29401</h4></li>
			</a>
		</ul>
		<ul>	
			<li><h4><?php the_field('phone_number', 'user_3'); ?></h4></li>
			<li><h4><a class="underline" href="mailto:<?php the_field('email_address', 'user_3'); ?>"><?php the_field('email_address', 'user_3'); ?></a></h4></li>
		</ul>
		<br>
		<div class="hours">
		
			<div class="border">
				<div class="inner-border">
					<div class="sideways">
				Hours of Operation
			</div>
					<div class="hours-cont">
						<?php the_field('hours', 'user_3') ?>
					</div>
					
				</div>
			</div>
		</div>
		<br>
		<a target=_blank href="<?php the_field('google_map_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png" /></a>

	</div>
	<div class="contact-info">
		<ul>
			<li><h4>Goat.Sheep.Cow NORTH</h4></li>
			<br>
			<a target=_blank href="<?php the_field('google_map_link_north', 'user_3') ?>">
				
				<li><h4><?php the_field('street_address_north', 'user_3'); ?></h4></li>
				<li><h4>Charleston, SC</h4></li>
				<li><h4>29403</h4></li>
			</a>
		</ul>
		<ul>
			<li><h4><?php the_field('phone_number_north', 'user_3'); ?></h4></li>
		</ul>
		<br>
		<div class="hours">
		
			<div class="border">
				<div class="inner-border">
					<div class="sideways">
				Hours of Operation
			</div>
					<div class="hours-cont">
						<?php the_field('hours_north', 'user_3') ?>
					</div>
					
				</div>
			</div>
		</div>
		<br>
		<a target=_blank href="<?php the_field('google_map_link_north', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-north.png" /></a>

	</div>
		
</div>

<div class="contact cont">
	<hr>
	 <div class="left-cont sandwich-of-day-info">
		<?php the_field('daily_sandwich_info') ?>			
	</div>

	<div class="right-cont cheese-plate-info">
		<?php the_field('cheese_plate_info') ?>
	</div>
	<hr>
</div>
	

<?php get_footer(); ?>
