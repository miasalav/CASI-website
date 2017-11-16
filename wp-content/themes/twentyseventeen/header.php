<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" role="banner">
		<div class="section-container">
			<div class=" d-flex justify-content-between align-items-end">
				<div class="header-logo">
						<a style="display: inline-block;" href="<?php echo get_site_url(); ?>"><h1 style="font-family: 'bebas_neueregular';">IDENTITY</h1></a>
					</div>

					 	 <?php  wp_nav_menu( 
								array(
									'theme_location'  => 'primary',
									'container_class' => 'd-flex desktop-menu',
									'container_id'    => '',
									'menu_class'      => 'nav navbar-nav d-flex flex-row hidden-sm-down',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'menu'		      => 'Main Menu',
								)
							);  ?> 

					 <a href="#"class="hamburger hidden-md-up">&#9776;</a>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="mobile-nav-container flex-column align-items-center" style="display: none;">
			
			<a class="close-btn" href="#">
				<object type="image/svg+xml" data="<?php echo get_template_directory_uri() ?>/img/close.svg">
				</object>
			</a>
		
			<div class="mobile-menu-wrapper">
			 
				<?php  wp_nav_menu( 
						array(
							'theme_location'  => 'primary',
							'container_class' => 'd-flex',
							'container_id'    => '',
							'menu_class'      => 'nav navbar-nav d-flex flex-row hidden-md-down',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'menu'		      => 'Main Menu',
						)
					);  ?> 
			</div>
	</div>


	<div class="site-content-contain">
		<div id="content" class="site-content">
