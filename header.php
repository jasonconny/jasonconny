<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo get_page_link(); ?> " />
		<meta property="og:image" content="http://www.jasonconny.com/wp-content/themes/jasonconny/_res/img/icon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
 		<link rel="stylesheet" href="/wp-content/themes/jasonconny/_res/css/styles.css" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<script type="text/javascript" src="/wp-content/themes/jasonconny/_res/js/modernizr.custom.2.8.3.js"></script>

	</head>
	<body <?php body_class(); ?>>
		<header role="banner">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- <p><?php bloginfo( 'description' ); ?></p> -->
			<nav id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
		</header>

		<section id="content" role="main">
