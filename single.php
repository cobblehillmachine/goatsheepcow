<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();?>
<div class="single-blog-post">
  <div class="sidebar height">
    <h1><?php the_title(); ?></h1>
    <hr class="dashed">
    <div class="details">
      
      <div class="date">
        <h4>Filed On:</h4>
        <p><?php the_time('F j, Y'); ?></p>
      </div>
      <div class="categories">
        <h4>Filed in:</h4>
        <p><?php 
        $categories = get_the_category();
        $separator = ', ';
        $output = '';
        if($categories){
          foreach($categories as $category) {
            if ($category->parent == 12) {
              $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
            }
          }
        echo trim($output, $separator);
        }
         ?></p>
      </div>

    </div>
    <hr class="dashed">
    <div class="silhouettes">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-silhouettes@2x.jpg" />
    </div>
  </div>
  <div class="main-cont height">
    <?php the_post_thumbnail('full') ?>
    <?php the_content() ?>
  </div>
</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
