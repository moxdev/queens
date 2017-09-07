<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resone_template' ); ?></a>

	<header id="masthead" class="site-header">
		<?php $ph = get_field( 'phone', option ); ?>

		<div class="flex-wrapper">
			<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->


		 <?php if( $ph ): ?>

			<div id="masthead-tel">
				<a class="tel-link" href="tel:<?php echo esc_html($ph) ?>"><span><img src="<?php echo get_template_directory_uri() . '/imgs/icon-phone.svg' ?>"></span><span class="call">Call Today!</span><span class="tel"><?php echo esc_html( $ph ); ?></span></a>
			</div>

		<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<button class="menu-toggle" aria-expanded="false"><?php esc_html_e( 'Menu', 'resone_template' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'main-navigation', 'container_id'=> 'site-navigation' ) ); ?>

		<?php endif; ?>

	</header><!-- #masthead -->

	<?php if ( function_exists( 'resone_template_homepage_slider' ) && is_page_template( 'frontpage.php' ) ) {
		resone_template_homepage_slider();
	} ?>

	<?php if ( function_exists( 'resone_template_specials_callout' ) && is_page_template( 'page-floorplans.php' ) ) {
	    resone_template_specials_callout();
	}  ?>