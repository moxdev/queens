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

						<a class="tel-link" href="tel:<?php echo esc_html( $ph ) ?>"><span><img src="<?php echo get_template_directory_uri() . '/imgs/icon-phone.svg' ?>"></span><span class="call">Call Today!</span><span class="tel"><?php echo esc_html( $ph ); ?></span></a>
					</div>

				<?php endif; ?>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<button id="mobile-toggle" class="slant-btn" aria-controls="site-navigation" aria-expanded="false" aria-label="Menu"><?php esc_html_e( 'Menu', 'resone_template' ); ?></button>

					<!-- <button class="menu-toggle" aria-expanded="false"><?php //esc_html_e( 'Menu', 'resone_template' ); ?></button> -->

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'main-navigation', 'container_id'=> 'site-navigation' ) ); ?>

				<?php endif; ?>

			</div><!-- flex-group -->

		</div><!-- flex-wrapper -->

		<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_id' => 'mobile-desktop-menu', 'container' => '' ) ); ?>
		</nav><!-- mobile-navigation -->

	</header><!-- #masthead -->

	<?php if ( function_exists( 'resone_template_homepage_slider' ) && is_page_template( 'frontpage.php' ) ) {
		resone_template_homepage_slider();
	} ?>

	<?php if ( function_exists( 'resone_template_specials_callout' ) && is_page_template( 'page-floorplans.php' ) ) {
	    resone_template_specials_callout();
	}  ?>

	<div class="page-flex-wrapper">