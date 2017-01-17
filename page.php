<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


    
	
     <?php if (is_cart()) { ?>
     	<div class="woocommerce-wrapper">
     		<?php echo do_shortcode('[woocommerce_cart]'); ?>
     	</div>
      <?php } else if (is_checkout()) { ?>
      	<div class="woocommerce-wrapper">
	        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
	    </div>
      <?php } else {?>
      <div class="default-page content">
        <?php while ( have_posts() ) : the_post();?>
          <?php the_content(); ?>
          <?php the_field('privacy_policy'); ?>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <?php } ?>

<?php

get_footer();