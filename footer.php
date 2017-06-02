<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>

	</div> <!-- ENDS BODY WRAPPER -->
		<footer class="">

			<div class="footer-main desktop">
				<hr>
				<div class="footer-left">
					<ul>
						<li><h4>Goat.Sheep.Cow</h4></li>
						<br>
						<a target=_blank href="<?php the_field('google_map_link', 'user_3') ?>">
							<li><h4><?php the_field('street_address', 'user_3'); ?></h4></li>
							<li><?php the_field('city_state', 'user_3'); ?></li>
						</a>
					</ul>

					<?php the_field('hours', 'user_3') ?>
					<li><h4><?php the_field('phone_number', 'user_3'); ?></h4></li><br/>
					<a target=_blank href="<?php the_field('facebook_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-black@2x.png" /></a>
					<a target=_blank href="<?php the_field('instagram_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-black@2x.png" /></a>
					<a target=_blank href="<?php the_field('twitter_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-black@2x.png" /></a>
				</div>
				<div class="footer-middle">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goat-sheep-cow-black.png" /></a>

					<br>
					<br>
					<ul>
						<li><a href="mailto:<?php the_field('email_address', 'user_3'); ?>"><?php the_field('email_address', 'user_3'); ?></a></li>
					</ul>
					<br>
					<h4><a href="http://cobblehilldigital.com" target=_blank>Site by Cobble Hill</a></h4>
				</div>
				<div class="footer-right">
					<ul>
						<li><h4>Goat.Sheep.Cow NORTH</h4></li>
						<br>
						<a target=_blank href="<?php the_field('google_map_link_north', 'user_3') ?>">
							<li><h4><?php the_field('street_address_north', 'user_3'); ?></h4></li>
							<li><?php the_field('city,_state_north', 'user_3'); ?></li>
						</a>
					</ul>

					<?php the_field('hours_north', 'user_3') ?>
					<li><h4><?php the_field('phone_number_north', 'user_3'); ?></h4></li><br/>
					<a target=_blank href="<?php the_field('facebook_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-black@2x.png" /></a>
					<a target=_blank href="<?php the_field('instagram_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-black@2x.png" /></a>
					<a target=_blank href="<?php the_field('twitter_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-black@2x.png" /></a>
				</div>
				<hr>
			</div>

			<div class="footer-main mobile">
				<div class="footer-left">
					<ul class="address">
						<li><h4>Goat.Sheep.Cow</h4></li>
						<a target=_blank href="<?php the_field('google_map_link', 'user_3') ?>">
							<li><h4><?php the_field('street_address', 'user_3'); ?></h4></li>
							<li><?php the_field('city_state', 'user_3'); ?></li>
						</a>
						<?php the_field('hours', 'user_3') ?>
					</ul>
					<ul>
						<li class="telephone"><h4><?php the_field('phone_number', 'user_3'); ?></h4></li>
						<li class="email"><a href="mailto:<?php the_field('email_address', 'user_3'); ?>"><?php the_field('email_address', 'user_3'); ?></a></li>
					</ul>
				</div>
				<div class="footer-middle">
					<ul class="address">
						<li><h4>Goat.Sheep.Cow NORTH</h4></li>
						<a target=_blank href="<?php the_field('google_map_link_north', 'user_3') ?>">
							<li><h4><?php the_field('street_address_north', 'user_3'); ?></h4></li>
							<li><?php the_field('city,_state_north', 'user_3'); ?></li>
						</a>
						<?php the_field('hours_north', 'user_3') ?>
					</ul>
				</div>
				<div class="footer-right">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goat-sheep-cow-black.png" /></a>
				</div>
			</div>

			<!-- <div class="footer-bottom">
				<a target=_blank href="<?php the_field('facebook_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-black@2x.png" /></a>
				<a target=_blank href="<?php the_field('instagram_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-black@2x.png" /></a>
				<a target=_blank href="<?php the_field('twitter_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-black@2x.png" /></a>
				<a target=_blank href="mailto:<?php the_field('email_address', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-black@2x.png" /></a>
				<div class="customer-service"><h4><a href="/policies">Our Policies</a></h4></div>
				<div class="cobble-hill">
					<h4><a href="http://cobblehilldigital.com" target=_blank>Site by Cobble Hill</a></h4>
				</div>
			</div> -->
		</footer>


		<?php wp_footer(); ?>

</body>
</html>
