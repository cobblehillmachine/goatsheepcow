<?php
/**
 * Description tab
 * REMOVED HEADINGS
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) );

?>
<hr class="dashed">
<?php the_content(); ?>

<div class="details">
	<h5>Details</h5>
	<?php the_field('details') ?>
</div>
