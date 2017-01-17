<?php get_header(); ?>
<div class="hero journal">
	<?php the_post_thumbnail('full') ?>
	<div class="banner">
		<div class="seal">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-seal.png" />
		</div>
		<div class="banner-text">
			<?php wp_list_categories(array('type' => 'posts', 'title_li' => '', 'hierarchical' => 0, 'parent' => 12,  'exclude' => 1, 'orderby' => 'id')) ?>
		</div>
		
	</div>
</div>

<div class="blog-posts">
	<?php $blog_posts = new WP_Query( array( 'order' => 'DESC', 'posts_per_page' => -1 ) ); ?>
	<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post();?>
		<div class="blog-post">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('full') ?>
				<h4><?php the_title(); ?></h4>
				<h3><?php the_time('F j, Y'); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="underline">Continue Reading</a>
			</a>
		</div>
	
	<?php endwhile; wp_reset_query(); ?>
</div>


<?php get_footer(); ?>