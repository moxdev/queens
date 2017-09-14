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
		<?php $ph = get_field( 'phone', option );
					$add_download_link = get_field( 'add_a_download_application', option ); ?>

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

			<div class="flex-group">

				<?php if( $ph ): ?>

					<div id="masthead-tel">

						<?php if ( $add_download_link == 'Yes' ):

							$app_download_file = get_field( 'download_application_upload', option );
							$app_download_link_text = get_field( 'download_application_display_name', option ); ?>

							<span class="icon-download"><svg xmlns="http://www.w3.org/2000/svg" width="43.75" height="45.45" viewBox="0 0 43.75 45.45"><title>icon-download</title><g><path fill="#e5ce9e" d="M25 19.4H8.4a.78.78 0 1 0 0 1.6H25a.78.78 0 1 0 0-1.56m0-6.3H8.4a.78.78 0 1 0 0 1.57H25a.78.78 0 0 0 0-1.55M31.7 42a.85.85 0 0 1-.86.85H15.36l-1.4.45a2.83 2.83 0 0 1-.86.14 2.65 2.65 0 0 1-1.66-.58h-8a.85.85 0 0 1-.9-.86V6.3a.85.85 0 0 1 .86-.84h3.2V6.8a.85.85 0 0 0 1.7 0V5.47h4.88V6.8a.85.85 0 0 0 1.7 0V5.47h4.25V6.8a.85.85 0 0 0 1.7 0V5.47h4.7V6.8a.85.85 0 1 0 1.7 0V5.47h3.6a.85.85 0 0 1 .86.85v5.9l2.54-2.55V6.3a3.4 3.4 0 0 0-3.4-3.4h-3.6V.86a.85.85 0 0 0-1.7 0V2.9h-4.7V.86a.85.85 0 0 0-1.7 0V2.9H14.9V.86a.85.85 0 0 0-1.7 0V2.9H8.3V.86a.85.85 0 0 0-1.7 0V2.9H3.4A3.4 3.4 0 0 0 0 6.3V42a3.4 3.4 0 0 0 3.4 3.4h27.44a3.4 3.4 0 0 0 3.4-3.4V29.66L31.7 32.2zm.78-25a.64.64 0 0 0-.9 0L18.46 30.18a.64.64 0 0 0 .9.9L32.5 18a.64.64 0 0 0 0-.9M20.8 37.6l-4.34-4.34-1.16 3.66 1.85 1.85zm11.96-23.35l7.06 7.06L23 38.16a1.34 1.34 0 0 1-.6.37h-.1l-8.78 2.8a.6.6 0 0 1-.8-.78l2.8-8.8v-.1a1.32 1.32 0 0 1 .38-.6l3.17-3.15H8.4a.78.78 0 1 1 0-1.57h12.25zm10.77 3.35L41 20.14l-7.06-7.06 2.53-2.54a1.92 1.92 0 0 1 2.68-.22l4.6 4.6"/></g></svg></span><a class="download-file" href="<?php echo $app_download_file; ?>" target="_blank"><?php echo $app_download_link_text; ?></a>

						<?php endif ?>

						<a class="tel-link" href="tel:<?php echo esc_html( $ph ) ?>"><span><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45"><defs><clipPath id="a"><path fill="none" d="M0 0h45v45H0z"/></clipPath></defs><title>icon-phone</title><g><g fill="#e6cf9f" clip-path="url(#a)"><path d="M42.46 3.43A.75.75 0 0 0 41.4 4.5a7.2 7.2 0 0 1 0 10.15.75.75 0 1 0 1.06 1.06 8.7 8.7 0 0 0 0-12.27M39.3 5.13a.75.75 0 0 0-1.06 1.07 4.92 4.92 0 0 1 0 7 .75.75 0 1 0 1.06 1.06 6.43 6.43 0 0 0 0-9.08M3.6 4.5a.75.75 0 0 0-1.06-1.07 8.7 8.7 0 0 0 0 12.3.75.75 0 1 0 1.06-1.08 7.2 7.2 0 0 1 0-10.16M6.76 4.93a.75.75 0 0 0-1.06 0 6.43 6.43 0 0 0 0 9.07.75.75 0 1 0 1.06-1.06 4.93 4.93 0 0 1 0-7 .75.75 0 0 0 0-1.06M24 39.75a1.5 1.5 0 1 1-1.5-1.5 1.5 1.5 0 0 1 1.5 1.5M33.75 34.5h-22.5V6h22.5zM22.5 42.75a3 3 0 1 1 3-3 3 3 0 0 1-3 3m-3-40.5h3a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1 0-1.5m5.25 0h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1 0-1.5M31.95 0h-18.9a3.3 3.3 0 0 0-3.3 3.3v38.4a3.3 3.3 0 0 0 3.3 3.3h18.9a3.3 3.3 0 0 0 3.3-3.3V3.3a3.3 3.3 0 0 0-3.3-3.3"/></g></g></svg></span><span class="call">Call Today!</span><span class="tel"><?php echo esc_html( $ph ); ?></span></a>
					</div>

				<?php endif; ?>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<button id="menu-toggle" aria-expanded="false"><?php esc_html_e( 'Menu', 'resone_template' ); ?></button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'main-navigation', 'container_id'=> 'site-navigation' ) ); ?>

				<?php endif; ?>

			</div><!-- flex-group -->

		</div><!-- flex-wrapper -->

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'mobile-navigation', 'container_id'=> 'mobile-navigation' ) ); ?>

	</header><!-- #masthead -->

	<?php if ( function_exists( 'resone_template_homepage_slider' ) && is_page_template( 'frontpage.php' ) ) {
		resone_template_homepage_slider();
	} ?>

	<?php if ( function_exists( 'resone_template_specials_callout' ) && is_page_template( 'page-floorplans.php' ) ) {
	    resone_template_specials_callout();
	}  ?>

	<div class="page-flex-wrapper">