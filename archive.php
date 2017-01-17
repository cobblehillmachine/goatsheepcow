<?php get_header(); ?>
<div class="hero journal">
  <?php echo get_the_post_thumbnail('20', 'full') ?>
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
	<h1><?php echo single_cat_title("",true) ?></h1>
  <!-- <?php $cur_cat_id = get_cat_id( single_cat_title("",false) );
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
  <?php $blog_posts = new WP_Query(array('post_type' => 'post', 'cat' => $cur_cat_id, 'posts_per_page' => 4,  'paged' => $paged)) ?> -->

    <?php while ( have_posts() ) : the_post();?>
      <div class="blog-post">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('full') ?>
          <h4><?php the_title(); ?></h4>
          <h3><?php the_time('F j, Y'); ?></h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="underline">Continue Reading</a>
        </a>
      </div>
    
    <?php endwhile; ?>

</div>


<?php get_footer(); ?>