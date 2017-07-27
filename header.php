<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-suzuki
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsAON98ndGW0tqEmULBRVhFKV3UmgjPZQ"></script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header class="suzuki1_header navbar navbar-static-top">
		<div class="container">
			<div class="navbar-header" id="suzuki1_navbar-header">
				<button class="navbar-toggle collapsed" data-target="#suzuki1_navbar" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="suzuki1_menu-toggle">
						<span class="suzuki1_menu-toggle-label">Menu</span>
						<i class="fa fa-bars"></i>
					</span>
				</button>

				<!-- Logo -->
				<div class="pull-left">
					<?php the_custom_logo(); ?>
				</div>

				<!-- Franchise Information (Desktop view)-->
				<div class="suzuki1_franchise-info row pull-right visible-sm visible-md visible-lg">
					<div class="suzuki1_franchise-name-box">
						<h1 class="suzuki1_franchise-name text-uppercase text-right">Franchise Name Here</h1>
					</div>
					<div class="suzuki1_franchise-contact-box">
						<address class="text-uppercase text-right hidden-sm">
							18 Something Street Milton
						</address>
						<p class="suzuki1_franchise-contact-number text-uppercase text-right">Call 1800 00 000</p>
					</div>
				</div>
			</div>

			<!-- Navbar -->
			<nav class="collapse navbar-collapse" id="suzuki1_navbar">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => 'ul',
						'menu_class' => 'nav navbar-nav'
					) );
				?>
			</nav>
		</div>
	</header>

	<div class="suzuki1_franchise-info hidden-lg hidden-md hidden-sm">
		<div class="container">
			<h1 class="suzuki1_franchise-name text-uppercase text-right">Franchise Name Here</h1>

			<div class="suzuki1_franchise-contact">
				<p class="suzuki1_franchise-contact-number text-uppercase text-right">Call 1800 00 000</p>
			</div>
		</div>
	</div>
