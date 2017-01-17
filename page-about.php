<?php get_header(); ?>
<div class="hero about">
	<?php the_post_thumbnail('full') ?>
	<div class="banner">
		<div class="seal">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-seal.gif" />
		</div>
		<div class="banner-text">
			<?php the_field('banner_text') ?>
		</div>
		
	</div>
</div>
<div class="about-cont">
	<div class="friendship-wrapper wrapper">
		<div class="friendship">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/counter-drawing.gif" alt="">
			<?php the_field('extraordinary_friendship') ?>
		</div>
		<div class="quote">
			<?php the_field('quote') ?>
		</div>
		
	</div>

	<div class="shop-wrapper wrapper">
		<div class="shop">
			<?php the_field('shop') ?>
		</div>
		
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exterior-drawing.gif" alt="">
	</div>

	<div class="staff-wrapper wrapper">
		<div class="staff">
			<?php the_field('staff') ?>
		</div>
		<?php $staff = new WP_Query( array( 'post_type' => 'Staff', 'order' => 'DESC', 'posts_per_page' => 10 ) ); ?>
		<?php while ( $staff->have_posts() ) : $staff->the_post();?>
		<li class="staff">
			<?php the_post_thumbnail('full'); ?>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</li>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	
</div>


<?php get_footer(); ?>