<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


      <div class="default-page content">
        <?php while ( have_posts() ) : the_post();?>
          <?php the_content(); ?>
          <?php the_field('privacy_policy'); ?>
        <?php endwhile; wp_reset_query(); ?>
      </div>


<?php

get_footer();