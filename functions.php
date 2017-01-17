<?php
/**
 * @package WordPress
 * @subpackage themename
 */



// removes admin bar on wordpress home
add_filter( 'show_admin_bar', '__return_false' );

// Add Favicon //
function diww_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_site_url() . '/favicon.ico" />';
}
add_action('wp_head', 'diww_favicon');
add_action('admin_head', 'diww_favicon');

// pulls in logo for wp admin
function my_login_logo() { ?>
  <style type="text/css">
      body.login div#login h1 a {
          	background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/images/logo_new.gif);
            background-size: 90%;
			width: auto;
			height: 142px;
			border: 1px dashed black;
			background-color: white;
			background-position: 50% 50%;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// ENQUEUE CSS, LESS, & SCSS STYLESHEETS
function add_style_sheets() {
	if( !is_admin() ) {
		wp_enqueue_style( 'reset', get_template_directory_uri().'/style.css', 'screen'  );
		wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', 'screen');
		wp_enqueue_style( 'flexslider', get_template_directory_uri().'/assets/css/flexslider.css', 'screen' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/style.less', 'screen' );
	}
}
add_action('wp_enqueue_scripts', 'add_style_sheets');

/**
 *
 * TAKE GLOBAL DESCRIPTION OUT OF HEADER.PHP AND GENERATE IT FROM A FUNCTION
 *
 */
function site_global_description()
{
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
	{
		echo " | $site_description";
	}
}


/**
 * REMOVE UNWANTED CAPITAL <P> TAGS
 */
remove_filter( 'the_content', 'capital_P_dangit' );
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );


/**
 * REGISTER NAV MENUS FOR HEADER FOOTER AND UTILITY
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'themename' ),
	'footer' => __( 'Footer Menu', 'themename' ),
	'utility' => __( 'Utility Menu', 'themename' )
) );


/** 
 * DEFAULT COMMENTS & RSS LINKS IN HEAD
 */
add_theme_support( 'automatic-feed-links' );


/**
 * THEME SUPPORTS THUMBNAILS
 */
add_theme_support( 'post-thumbnails' );


/**
 *	THEME SUPPORTS EDITOR STYLES
 */
add_editor_style("/css/layout-style.css");


/**
 *	ADD TINY IMAGE SIZE FOR ACF FIELDS, BETTER USABILITY
 */
add_image_size( 'mini-thumbnail', 50, 50 );


/**
 *	REPLACE THE HOWDY
 */
function admin_bar_replace_howdy($wp_admin_bar) 
{
    $account = $wp_admin_bar->get_node('my-account');
    $replace = str_replace('Howdy,', 'Welcome,', $account->title);            
    $wp_admin_bar->add_node(array('id' => 'my-account', 'title' => $replace));
}
add_filter('admin_bar_menu', 'admin_bar_replace_howdy', 25);

// custom post type
add_action( 'init', 'create_post_type' );
function create_post_type() {

	$args1 = array(
		'labels' => array(
			'name' => __( 'Provisions' ),
			'singular_name' => __( 'Provision' )
		),
		'public' => true,
		'menu_icon' => 'dashicons-products',
		'rewrite' => array('with_front' => false, 'slug' => 'provisions'),
		'supports' => array( 'title', 'editor', 'thumbnail' )
	);
  	register_post_type( 'Provisions', $args1);

  	$args2 = array(
		'labels' => array(
			'name' => __( 'Staff' ),
			'singular_name' => __( 'Staff' )
		),
		'public' => true,
		'menu_icon' => 'dashicons-groups',
		'rewrite' => array('with_front' => false, 'slug' => 'staff'),
		'supports' => array( 'title', 'editor', 'thumbnail' )
	);
  	register_post_type( 'Staff', $args2);

  	register_taxonomy_for_object_type('category', 'provisions');

  	flush_rewrite_rules();
}

// WOOCOMMERCE

//remove default CSS
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// 12 products per page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 6;' ), 20 );

// customizing checkout fields
add_filter("woocommerce_checkout_fields", "order_fields");

function order_fields($fields) {
	$fields['billing']['billing_first_name']['class'][3] = 'third first';
	$fields['billing']['billing_last_name']['class'][3] = 'third';
	$fields['billing']['billing_email']['class'][3] = 'third first email';
	$fields['billing']['billing_phone']['class'][3] = 'third';
	$fields['billing']['billing_address_1']['class'][3] = 'two-thirds';
	$fields['billing']['billing_address_2']['class'][3] = 'two-thirds';
	$fields['billing']['billing_city']['class'][3] = 'third first';
	$fields['billing']['billing_state']['class'][3] = 'third ';
	$fields['billing']['billing_postcode']['class'][3] = 'third last';


	$fields['shipping']['shipping_first_name']['class'][3] = 'third first';
	$fields['shipping']['shipping_last_name']['class'][3] = 'third';
	$fields['shipping']['shipping_address_1']['class'][3] = 'two-thirds';
	$fields['shipping']['shipping_address_2']['class'][3] = 'two-thirds';
	$fields['shipping']['shipping_city']['class'][3] = 'third first';
	$fields['shipping']['shipping_state']['class'][3] = 'third ';
	$fields['shipping']['shipping_postcode']['class'][3] = 'third last';
	$fields['order']['order_comments']['class'][3] = 'two-thirds';

	$fields['billing']['billing_state']['options'] = array(
	  'option_1' => 'Option 1 text',
	  'option_2' => 'Option 2 text'
	);

	$fields['billing']['billing_city']['label'] = $fields['shipping']['shipping_city']['label'] = 'City';
	$fields['billing']['billing_city']['placeholder'] = $fields['shipping']['shipping_city']['placeholder'] = '';

	$fields['billing']['billing_address_1']['label'] = $fields['shipping']['shipping_address_1']['label'] = 'Address';
	$fields['billing']['billing_address_1']['placeholder'] = $fields['shipping']['shipping_address_1']['placeholder'] = '';

	$fields['billing']['billing_address_2']['label'] = $fields['shipping']['shipping_address_2']['label'] = '';
	$fields['billing']['billing_address_2']['placeholder'] = $fields['shipping']['shipping_address_2']['placeholder'] = '';
	$fields['billing']['billing_address_2']['required'] = $fields['shipping']['shipping_address_2']['required'] = false;
	
	$fields['billing']['billing_postcode']['label'] = $fields['shipping']['shipping_postcode']['label'] = 'Zipcode';
	$fields['billing']['billing_postcode']['placeholder'] = $fields['shipping']['shipping_postcode']['placeholder'] = '';
	$fields['billing']['billing_postcode']['clear'] = $fields['shipping']['shipping_postcode']['clear'] = false;

	$fields['billing']['billing_phone']['clear'] = false;

	$billing = array(
		"billing_first_name",
		"billing_last_name",
		"billing_email",
		"billing_phone",
		"billing_address_1",
		"billing_address_2",
		"billing_city",
		"billing_state",
		"billing_postcode"
	);

	$shipping = array(
		"shipping_first_name",
		"shipping_last_name",
		"shipping_address_1",
		"shipping_address_2",
		"shipping_city",
		"shipping_state",
		"shipping_postcode"
	);

	foreach( $billing as $field )
	{
		$billing_fields[$field] = $fields["billing"][$field];
	}

	foreach( $shipping as $field )
	{
		$shipping_fields[$field] = $fields["shipping"][$field];
	}

	$fields["billing"] = $billing_fields;
	$fields["shipping"] = $shipping_fields;

	return $fields;

}


//disable reviews for products
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
	unset($tabs['reviews']);
	return $tabs;
}

function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }
    
    echo $thelist;
}

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// remove sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// remove breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
// remove sorting dropdown & results count from shop page
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// remove add-to-cart on archive
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// move description
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 40);
// remove meta
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="woocommerce-wrapper">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}











