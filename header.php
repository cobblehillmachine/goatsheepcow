<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="IE ie8"> <![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="IE ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo site_global_description(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/favicon.ico"> -->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
-->
<?php wp_head(); ?>
<script src="https://use.typekit.net/frf0tih.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.columnizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/instafeedly.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/general.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65111408-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
	<div class="loader"></div>
	<div class="loader-gif"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gif-web.gif" /></div>
	<div class="body-wrapper">
		<header>
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_new@2x.gif" /></a>
			</div>
			<div class="nav">
				<?php wp_nav_menu(array('menu' => "Main Nav")) ?>
				<!-- <li class="social">
					<a target=_blank class="facebook" href="<?php the_field('facebook_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook@2x.png" /></a>
					<a target=_blank class="instagram" href="<?php the_field('instagram_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram@2x.png" /></a>
					<a target=_blank class="twitter" href="<?php the_field('twitter_link', 'user_3') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter@2x.png" /></a>
				</li> -->

			</div>
		</header>
