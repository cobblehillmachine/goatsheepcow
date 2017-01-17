<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<h5>share this</h5>
<div class="share-icons">
	<a target=_blank href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" /></a>
	<a target=_blank href="http://twitter.com/home/?status=goat.sheep.cow's <?php the_title(); ?> at <?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" /></a>
	<a target=_blank href="mailto:?subject=A friend wants you to check out this product from goat.sheep.cow!&body=<?php the_title() ?><?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-icon-white.png" /></a>
</div>
