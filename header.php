<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baryon
 */

 $site_logo_header = get_field('site_logo_header', 'options');
 $site_icon		   = get_field('site_icon', 'options');
 $telephone_no	   = get_field('telephone_number', 'options');
 $mobile_no		   = get_field('mobile_telephone_number', 'options')

?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=11">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo $site_icon ?>" type="image/png">

	<link rel="stylesheet" href="https://use.typekit.net/cxq5rov.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="mobile-nav-toggle">
		<img src="<?php bloginfo('stylesheet_directory') ?>/src/img/menu-toggle.svg" alt="">
	</div>
	<nav>
		<div class="container">
			<div class="nav-top">
				<p>t: <?php echo $telephone_no ?></p>
				<p>m: <?php echo $mobile_no ?></p>
			</div>
			<div class="nav-main">
				<div class="nav-logo">
					<a href="/"><img src="<?php echo $site_logo_header ?>" alt="Nigel Roberts Ltd."></a>
				</div>

				<?php 
					wp_nav_menu( array(
						'menu' => 'menu-1',
						'menu_class' => 'nav-items',
						'container'  => false
					) )
				?>
			</div>
		</div>
	</nav>
