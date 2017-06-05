<?php get_header(); ?>
<!-- <div class="hero contact">
	<?php the_post_thumbnail('full') ?>
	<div class="banner">
		<div class="seal">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-seal@2x.gif" />
		</div>
		<div class="banner-text">
			<?php the_field('banner_text') ?>
		</div>

	</div>
</div> -->

<div>
	<div class="contact-cont">
		<!-- <div class="contact-info">
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

		</div> -->
		<div class="top-cont">
			<div class="img-wrapper" style="background:url('<?php the_field('south_image') ?>');background-repeat: no-repeat;background-size: cover;background-position: center center;">
				<!-- <img src="<?php the_field('south_image') ?>"/> -->
			</div>
			<div class="img-wrapper" style="background:url('<?php the_field('north_image') ?>');background-repeat: no-repeat;background-size: cover;background-position: center center;">
				<!-- <img src="<?php the_field('north_image') ?>"/> -->
			</div>
		</div>
		<div class="bottom-cont">
			<div class="left-cont">
				<div>
				<ul>
					<li><h2>Goat.Sheep.Cow.South</h2></li>
					<a target=_blank href="<?php the_field('google_map_link', 'user_3') ?>">

						<li><p><?php the_field('street_address', 'user_3'); ?></p></li>
						<li><p style="margin-bottom:0;">Charleston, SC 29401</p></li>
					</a>
				</ul>
				<ul>
					<li><h4 class="numb"><?php the_field('phone_number', 'user_3'); ?></h4></li>
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
			</div>
			<a id="directions"></a>
			<div class="right-cont">
				<div>
				<ul>
					<li><h2>Goat.Sheep.Cow.North</h2></li>
					<a target=_blank href="<?php the_field('google_map_link_north', 'user_3') ?>">

						<li><p><?php the_field('street_address_north', 'user_3'); ?></p></li>
						<li><p style="margin-bottom:0;">Charleston, SC 29403</p></li>
					</a>
				</ul>
				<ul>
					<li><h4 class="numb"><?php the_field('phone_number_north', 'user_3'); ?></h4></li>
					<li><h4><a class="underline" href="<?php the_field('menu'); ?>">Download The Menu</a></h4></li>
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
		</div>

	</div>

	<div class="contact-bot-cont">
		<div class="row second">
		 <h1 style="text-align:center;padding:3%;">Available at Each Location</h1>
		 <div class="left-cont sandwich-of-day-info">
			 <?php the_field('daily_sandwich_info') ?>
		 </div>

		 <div class="right-cont cheese-plate-info">
			 <?php the_field('cheese_plate_info') ?>
		 </div>
		</div>
		<!-- <hr>
		 <div class="left-cont sandwich-of-day-info">
			<?php the_field('daily_sandwich_info') ?>
		</div>

		<div class="right-cont cheese-plate-info">
			<?php the_field('cheese_plate_info') ?>
		</div>
		<hr> -->
	</div>
</div>

<?php get_footer(); ?>
