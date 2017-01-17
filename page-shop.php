<?php get_header(); ?>

<div class="hero shop">
	<?php echo get_the_post_thumbnail('135', 'full') ?>
	<div class="banner">
		<div class="seal">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop-seal@2x.png" />
		</div>
		<div class="banner-text">
			<?php the_field('banner_text', 135) ?>
		</div>
		
	</div>
</div>

<div class="coming-soon">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming-soon@2x.png" />
</div>

<?php get_footer() ?>