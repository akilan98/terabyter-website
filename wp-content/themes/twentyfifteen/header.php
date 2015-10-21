<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php
	if ( is_front_page() && is_home() ) : ?>
		<meta http-equiv="refresh" content="5;url=">
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentyfifteen/style.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentyfifteen/css/jquery.sidr.dark.css">
	<script src="/wp-content/themes/twentyfifteen/js/jquery-2.1.4.min.js"></script>
	<script src="/wp-content/themes/twentyfifteen/js/jquery.sidr.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a id="simple-menu" href="#sidr" style=""><img id="simple-menu-toggle" src="/wp-content/themes/twentyfifteen/images/menu_toggle_icon.png"></img></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif;?>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->
		<div id="sidr" class="sidr left">
		  <ul>
		    <li><a href="drone-live-stream">Drone Live Stream</a></li>
		    <li><a href="program">Terabyter Program</a></li>
		    <li><a href="about-us">About Us</a></li>
		  </ul>
		</div>
		
		<script>
		$(document).ready(function() {
		  $('#simple-menu').sidr({
		  		displace: false
		  	});
		});
		</script>
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
		
