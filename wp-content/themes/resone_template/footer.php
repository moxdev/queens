<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>
		</div><!-- end-page-flex-wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<?php
			$add_eho        = get_field( 'add_the_equal_housing_opportunity_logo', option );
			$address        = get_field( 'address', option );
			$add_hf         = get_field( 'add_the_handicap_friendly_logo', option );
			$add_dcbor      = get_field( 'add_the_dc_tenants_bill_of_rights', option );
			$add_gtranslate = get_field( 'add_the_google_translate_dropdown', option );
			$add_ahd        = get_field( 'add_the_ahd_management_logo', option );
			$add_social     = get_field( 'add_social_icons', option );
			?>

			<div class="left-column">

				<?php if ($address ):
					$name    = get_field( 'company_name', 'option' );
					$city    = get_field( 'city', 'option' );
					$state   = get_field( 'state', 'option' );
					$zip     = get_field( 'zip', 'option' );
					$phone   = get_field( 'phone', 'option' );
					$fax     = get_field( 'fax', 'option' );
					$email   = get_field( 'email', 'option' ); ?>

					<div class="contact-information">
					  <div itemscope itemtype="http://schema.org/Organization">
					    <span itemprop="name" class="company-name"><?php echo esc_html( $name ); ?></span>
					    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					        <span itemprop="streetAddress"><?php echo esc_html( $address ); ?>, </span>
					        <span itemprop="addressLocality"><?php echo esc_html( $city ); ?>, </span>
					        <span itemprop="addressRegion"><?php echo esc_html( $state ); ?></span>
					        <span itemprop="postalCode"><?php echo esc_html( $zip ); ?></span>
					    </div>
					      <span class="footer-tel">Tel: <span itemprop="telephone"><a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a> </span></span>
					      <span class="footer-bullet">&bull;</span>
					      <span class="footer-fax"> Fax: <span itemprop="faxNumber"><?php echo esc_html( $fax ); ?></span></span>
					      <span class="email"><a href="mailto:<?php echo esc_html( $email ); ?>" itemprop="email">Email Us</a></span>
					  </div>
					</div>

				<?php endif ?>

				<?php if ( $add_dcbor == 'Yes'):

					$file = get_field( 'dc_tenants_bill_of_rights_upload', 'option' );

					$url = wp_get_attachment_url( $file ); ?>

					<a class="bill-of-rights" href="<?php echo esc_url( $url ); ?>" target="_blank" alt="DC Tenants Bill of Rights PDF Download">DC Tenants Bill of Rights</a>

				<?php endif; ?>
			</div><!-- left-column -->

			<div class="right-column">

				<?php if ( $add_social == 'Yes' ): ?>

					<div class="social">

						<?php

						// Change fill="" color of svg's to match theme colors

						$facebook    = get_field( 'facebook', option );
						$google_plus = get_field( 'google_plus', option );
						$twitter     = get_field( 'twitter', option );
						$instagram   = get_field( 'instagram', option );
						$linkedin    = get_field( 'linkedin', option );
						$youtube     = get_field( 'youtube', option );
						$pinterest   = get_field( 'pinterest', option );
						?>

						<?php if ( $facebook ): ?>

								<a href="<?php echo esc_url( $facebook ); ?>" alt="hyperlink to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>facebook-icon</title><path fill="#111111" d="M37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40h19.1V24.6h-5.2v-6h5.2v-4.5c0-5.2 3.2-8 7.8-8a41.12 41.12 0 0 1 4.7.2v5.4h-3.2c-2.5 0-3 1.2-3 2.9v3.9h6l-.8 6h-5.2V40h10.2a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0z"/></svg></a>

						<?php endif ?>

						<?php if ( $google_plus ): ?>

								<a href="<?php echo esc_url( $google_plus ); ?>" alt="hyperlink to google plus page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>google-plus-icon</title><path fill="#111111" d="M37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40h35.6a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0zM14.6 29.5a9.5 9.5 0 1 1 0-19A9.17 9.17 0 0 1 21 13c-2 1.9-1.9 2-2.7 2.8a5.4 5.4 0 0 0-3.7-1.4 5.7 5.7 0 0 0 0 11.4c3.1 0 4.3-1.3 5.2-3.8h-5.2v-3.8h9.2c.6 4.5-1.3 11.3-9.2 11.3zm20.5-8.8h-3.3v3.4h-2.4v-3.4H26v-2.4h3.4V15h2.4v3.3h3.3z"/></svg></a>

						<?php endif ?>

						<?php if ( $twitter ): ?>

							<a href="<?php echo esc_url( $twitter ); ?>" alt="hyperlink to twitter page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>twitter-icon</title><path fill="#111111" d="M37.8 0H2.2A2.2 2.2 0 0 0 0 2.2v35.6A2.2 2.2 0 0 0 2.2 40h35.6a2.2 2.2 0 0 0 2.2-2.2V2.2A2.2 2.2 0 0 0 37.8 0zm-7.9 14.9v.7A14.55 14.55 0 0 1 7.5 27.9a4.87 4.87 0 0 0 1.2.1 10.36 10.36 0 0 0 3.45-.58 1.38 1.38 0 0 0 .33-2.42 5.42 5.42 0 0 1-2.18-2.8 3.4 3.4 0 0 0 1 .1 5.9 5.9 0 0 0 1.4-.2 5.06 5.06 0 0 1-4.1-5V17a6 6 0 0 0 2.3.6 5.1 5.1 0 0 1-2.3-4.3 1.33 1.33 0 0 1 2.23-1 14.43 14.43 0 0 0 9.07 3.8 4.87 4.87 0 0 1-.1-1.2 5.1 5.1 0 0 1 8.37-3.9 1.3 1.3 0 0 0 1.13.27 9.2 9.2 0 0 0 2.6-1.06 4.92 4.92 0 0 1-2.3 2.8 9.6 9.6 0 0 0 2.9-.8 9.58 9.58 0 0 1-2.6 2.7z"/></svg></a>

						<?php endif ?>

						<?php if ( $instagram ): ?>

							<a href="<?php echo esc_url( $instagram ); ?>" alt="hyperlink to instagram page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>instagram-icon</title><path fill="#111111" d="M20 14.67h-.1a5.16 5.16 0 0 0-3.5 1.4 5.5 5.5 0 0 0-1.6 3.83 5.35 5.35 0 0 0 5.3 5.33 5.48 5.48 0 0 0 5.3-5.33 5.12 5.12 0 0 0-1.3-3.72 6.55 6.55 0 0 0-4.1-1.5zM37.8 0H2.2A2.2 2.2 0 0 0 0 2.2v35.6A2.2 2.2 0 0 0 2.2 40h35.6a2.2 2.2 0 0 0 2.2-2.2V2.2A2.2 2.2 0 0 0 37.8 0zm-3.3 32.76A2.2 2.2 0 0 1 32.3 35H7.7a2.2 2.2 0 0 1-2.2-2.2V7.23A2.2 2.2 0 0 1 7.7 5h24.6a2.2 2.2 0 0 1 2.2 2.2zM30.1 7.24H9.9a2.2 2.2 0 0 0-2.2 2.2v21.1a2.2 2.2 0 0 0 2.2 2.22h20.2a2.2 2.2 0 0 0 2.2-2.2V9.45a2.2 2.2 0 0 0-2.2-2.22zM27.9 20a8.07 8.07 0 0 1-7.9 7.94A8 8 0 0 1 12.1 20a8.26 8.26 0 0 1 2.4-5.73 7.68 7.68 0 0 1 5.5-2.2 8.18 8.18 0 0 1 5.9 2.4 7.15 7.15 0 0 1 2 5.53zm.2-6.43a1.8 1.8 0 1 1 1.8-1.8 1.8 1.8 0 0 1-1.8 1.8z"/></svg></a>

						<?php endif ?>

						<?php if ( $linkedin ): ?>

							<a href="<?php echo esc_url( $linkedin ); ?>" alt="link to linkedin page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>linkedin-icon</title><path fill="#111111" d="M37 0H2.9A2.9 2.9 0 0 0 0 2.9v34.2A2.9 2.9 0 0 0 2.9 40H37a3 3 0 0 0 3-2.9V2.9A2.93 2.93 0 0 0 37 0zM11.9 34.1H6V15h5.9zm-3-21.7A3.4 3.4 0 1 1 12.3 9a3.37 3.37 0 0 1-3.4 3.4zm25.2 21.7h-5.9v-9.3c0-2.2 0-5.1-3.1-5.1s-3.6 2.4-3.6 4.9V34h-5.9V15h5.7v2.6h.1a6.2 6.2 0 0 1 5.6-3.1c6 0 7.1 4 7.1 9.1z"/></svg></a>

						<?php endif ?>

						<?php if ( $pinterest ): ?>

							<a href="<?php echo esc_url( $pinterest ); ?>" alt="link to linkedin page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>pinterest-icon</title><path fill="#111111" d="M19.9 0a20 20 0 0 0-8 38.3 18.2 18.2 0 0 1 .3-4.6c.4-1.6 2.6-10.9 2.6-10.9a8.35 8.35 0 0 1-.6-3.2c0-3 1.68-5.2 3.87-5.2a2.7 2.7 0 0 1 2.7 3c0 1.8-1.2 4.6-1.8 7.1a3.16 3.16 0 0 0 3.18 3.9c3.78 0 6.27-4.9 6.27-10.6 0-4.4-3-7.7-8.26-7.7a9.38 9.38 0 0 0-9.75 9.6 5.73 5.73 0 0 0 1.3 3.9 1 1 0 0 1 .3 1.1c-.1.4-.3 1.3-.4 1.6a.66.66 0 0 1-1 .5c-2.8-1.1-4.08-4.2-4.08-7.6 0-5.7 4.78-12.5 14.23-12.5 7.56 0 12.64 5.5 12.64 11.5 0 7.8-4.4 13.7-10.76 13.7a5.74 5.74 0 0 1-4.88-2.5s-1.2 4.6-1.4 5.5a18.92 18.92 0 0 1-2 4.3 21 21 0 0 0 5.68.8A20 20 0 0 0 40 20 20.3 20.3 0 0 0 19.9 0z"/></svg></a>

						<?php endif ?>

						<?php if ( $youtube ): ?>

							<a href="<?php echo esc_url( $youtube ); ?>" alt="link to youtube page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>youtube-icon</title><path fill="none" d="M37.8 40a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40z"/><path fill="#111111" d="M39.6 12s-.4-2.8-1.6-4a5.66 5.66 0 0 0-4-1.7c-5.6-.4-14-.4-14-.4s-8.4 0-14 .4A5.66 5.66 0 0 0 2 8C.8 9.2.4 12 .4 12a59.76 59.76 0 0 0-.4 6.5v3A62.24 62.24 0 0 0 .4 28s.4 2.8 1.6 4c1.5 1.6 3.5 1.5 4.4 1.7 3.2.3 13.6.4 13.6.4s8.4 0 14-.4a5.66 5.66 0 0 0 4-1.7c1.2-1.2 1.6-4 1.6-4a59.76 59.76 0 0 0 .4-6.5v-3a59.76 59.76 0 0 0-.4-6.5zM15.9 25.2V14l10.8 5.6z"/></svg></a>

						<?php endif ?>

					</div><!-- social -->

				<?php endif ?>

				<?php if ( $add_gtranslate == 'Yes' ): ?>

					<div class="translate">
						<div id="google_translate_element"></div><script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
						}
						</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</div>

				<?php endif ?>

				<div class="property-management-logos">
					<a href="http://www.res1.net" target="_blank" id="res-one-link">Professionally Managed By:

					<span class="res1-logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="132.5" height="21.62" viewBox="0 0 132.5 21.62"><title>icon-res1-logo</title><g><g><path d="M91.84 3.18A10.7 10.7 0 0 0 88.46.86a10.46 10.46 0 0 0-8.3 0 10.8 10.8 0 0 0-3.36 2.32 11 11 0 0 0-2.27 3.46 10.72 10.72 0 0 0-.8 3.74h4.34a6.12 6.12 0 0 1 .48-2 6.83 6.83 0 0 1 1.36-2 6.4 6.4 0 0 1 2-1.4 5.85 5.85 0 0 1 2.45-.5 5.74 5.74 0 0 1 2.4.52 6.47 6.47 0 0 1 2 1.4 6.66 6.66 0 0 1 1.33 2 6.57 6.57 0 0 1 0 5 6.47 6.47 0 0 1-1.34 2 6.55 6.55 0 0 1-2 1.4 5.48 5.48 0 0 1-.68.25v4.56a10 10 0 0 0 2.4-.7 10.65 10.65 0 0 0 3.4-2.32 11.22 11.22 0 0 0 2.28-3.45A10.6 10.6 0 0 0 95 10.9a10.7 10.7 0 0 0-.85-4.26 11.2 11.2 0 0 0-2.3-3.46"/><path d="M111.43 13.55L102.23.4h-5.18v21.14h3.57V6.14l10.8 15.4h3.84V.4h-3.83v13.15zM121.93 17.6v-4.5h6.24V9.03h-6.24V4.27h10.57V.37h-14.95v21.1h14.95V17.6h-10.57zM0 9.47h4q4 0 4 3.24v.82q0 3.24-3.23 3.24L6.4 19.2 8 21.6H6l-3.17-4.86H1.6v4.86H0zm1.6 5.67H4q2.42 0 2.42-1.62v-.8q0-1.63-2.42-1.63H1.6zM16.48 20v1.62h-3.23q-4 0-4-3.24v-2.43q0-3.24 4-3.24t4 2.44v.8q0 2.44-4 2.44h-2.42q0 1.62 2.42 1.62zm-5.63-3.24h2.42q2.42 0 2.37-1.22t-2.4-1.22q-2.42 0-2.4 1.22zM22.7 14.33q-2.42 0-2.42 1.2 0 .8 2.42.8 4 0 4 2.44 0 2.85-4 2.85t-4-2.43h1.62q0 .8 2.42.8t2.42-1.16q0-1.27-2.42-.9-4 0-4-2.42 0-2.8 4-2.8t4 2.42h-1.62q0-.8-2.42-.8"/><path d="M29.73 11.1h-1.6V9.46h1.6zm0 10.52h-1.6v-8.9h1.6zM35.38 21.62q-4 0-4-4v-1.67q0-3.24 4-3.24h2.42V9.48h1.6v12.15zm2.42-7.3h-2.42q-2.38 0-2.38 1.63v2.43Q33 20 35.38 20h2.42zM48.3 20v1.62h-3.23q-4 0-4-3.24v-2.43q0-3.24 4-3.24t4 2.44v.8q0 2.44-4 2.44h-2.42q0 1.62 2.42 1.62zm-5.63-3.24h2.42q2.4 0 2.36-1.22t-2.4-1.22q-2.42 0-2.4 1.22zM52.34 21.62h-1.62v-8.9h4q4 0 4 3.23v5.67h-1.54v-5.67q0-1.62-2.42-1.62h-2.42zM61.55 9.47h1.62v3.24h2.42v1.63h-2.44v4.05q0 1.62 2.42 1.62h.8v1.62h-.8q-4 0-4-3.24v-4.05h-1.64V12.7h1.6zM69.62 11.1H68V9.46h1.6zm0 10.52H68v-8.9h1.6zM72 14.33V12.7h3.23q4 0 4 3.25v5.67h-4q-4 0-4-2.43v-.82q0-2.43 4-2.43h2.47q0-1.62-2.42-1.62zm5.63 3.24h-2.38q-2.42 0-2.37 1.22t2.4 1.2h2.42zM79.5 9.47h3.23V20h1.62v1.62h-3.23V11.1H79.5V9.46z"/></g></g></svg>
					</span>

					<?php if ( $add_ahd == 'Yes' ): ?>

						<span class="ahd-logo">
							<svg xmlns="http://www.w3.org/2000/svg" width="132.35" height="28.83" viewBox="0 0 132.35 28.83"><title>icon-ahd-logo</title><g><g><path d="M9.64 22.85l-4.5 5.76h11.48v-5.75H9.64zM20.23 19.26h9.4v9.35h-9.4zM0 7v21.6h.72L17.62 7H0zM33.3 28.6h13.56V17.8c0 5.77-5 10.76-13.58 10.8"/><path d="M20.2 9.33h.03v6.32h9.4V7H20.2V9.3zM16.62 19.9v-5.98l-4.68 5.98h4.68zM33.23 7c8.68 0 13.64 5 13.64 10.8V7zM33.23 10.4v14.8c6.8 0 9.8-3.5 9.8-7.4s-3-7.33-9.8-7.4"/><path d="M33.17 28.6zM128.6 28.7h1.18v-7.23h2.57v-1H126v1h2.57zm-9.85 0h1.18v-6.8l3.74 6.8h1.5v-8.27H124v6.65l-3.65-6.65h-1.6zm-6.16 0h4.62v-1h-3.45V24.9h3.14v-1h-3.13v-2.45h3.45v-1h-4.63zm-10.88 0h1.18v-7.16l2.74 7.15h1.16l2.74-7.16v7.15h1.18v-8.27h-2l-2.55 6.87-2.6-6.87h-2zm-6.18 0h4.63v-1h-3.45V24.9h3.14v-1h-3.14v-2.45h3.45v-1h-4.63zm-1.88-8a6.26 6.26 0 0 0-2.43-.42 4.12 4.12 0 0 0-4.37 4.24 4.07 4.07 0 0 0 4.36 4.3 7.52 7.52 0 0 0 2.52-.36v-4.3H90.8v1h1.75v2.5a4.78 4.78 0 0 1-1.33.15 3.08 3.08 0 0 1-3.12-3.22 3.08 3.08 0 0 1 3.17-3.23 3.8 3.8 0 0 1 2.27.57zm-9.72 4.93h-3.3l1.65-4.1zm-5.75 3.05h1.23l.84-2.08h4l.84 2.08h1.3l-3.5-8.26h-1.2zm-7.3 0h1.18v-6.8l3.74 6.8h1.52v-8.25h-1.18v6.65l-3.65-6.65H70.9zm-3.34-3.05h-3.3l1.63-4.1zm-5.75 3.05H63l.84-2.08h4l.84 2.08h1.3l-3.5-8.26h-1.16zm-9.9 0h1.2v-7.14l2.73 7.15H57l2.74-7.16v7.15h1.18v-8.27H59l-2.55 6.87-2.6-6.87h-2zM0 0h131.72v.63H0z"/></g></g></svg>
						</span>

					<?php endif ?>

					</a>
				</div>

			</div><!-- right-column -->

		</div><!-- .site-info -->

		<div class="footer-disclaimer">
			<?php if ( $add_eho == 'Yes'): ?>

				<div class="eho">
					<span class="eho-icons">
						<?php if ( $add_hf == 'Yes' ): ?>

							<span class="icon-handicap"><svg xmlns="http://www.w3.org/2000/svg" width="25.66" height="29.9" viewBox="0 0 25.66 29.9"><title>icon-handicap</title><g><path d="M25.66 25.27c-1.6.5-3.1 1-4.7 1.5-.4-.9-.8-1.8-1.1-2.7-.9-2.1-1.7-4.1-2.6-6.2-.1-.3-.3-.3-.6-.3-3 0-5.9 0-8.9.1-.6 0-.6 0-.7-.6-.2-2.3-.4-4.6-.6-6.8s-.2-3.9-.4-5.8a.76.76 0 0 0-.2-.4A2.87 2.87 0 0 1 6.16 1a2.66 2.66 0 0 1 3-.8 2.92 2.92 0 0 1 1.9 2.5 2.8 2.8 0 0 1-1.8 2.6c-.4.1-.5.3-.4.7.1 1.4.1 2.8.1 4.2 0 .4.2.5.5.5h5.2c.4 0 .5.1.5.5v2h-5.5v1.9h8.9a.55.55 0 0 1 .5.3c1.1 2.6 2.1 5.2 3.2 7.9 0 .1.1.2.1.3.7-.2 1.4-.3 2-.5.3-.1.4 0 .5.3.2.5.5 1.2.8 1.9M5.76 10.87c.1 1.1.1 2.2.1 3.2q0 .15-.3.3a10.34 10.34 0 0 0-2.3 3.9 6.6 6.6 0 0 0 1.1 5.3 8 8 0 0 0 9.7 2.4 7.34 7.34 0 0 0 3.6-4.3c0-.1.1-.2.2-.4a9.44 9.44 0 0 0 .3.9c.2.8.5 1.7.7 2.5v.4a11.08 11.08 0 0 1-5.8 4.4c-2.9.8-5 .5-8.1-1.1a10.66 10.66 0 0 1-4.8-6.8 9.6 9.6 0 0 1 2.3-7.9A13.65 13.65 0 0 1 4.16 12c.5-.3 1-.7 1.6-1.1"/></g></svg></span>

						<?php endif ?>

						<span class="icon-eho"><svg xmlns="http://www.w3.org/2000/svg" width="28.77" height="31.99" viewBox="0 0 28.77 31.99"><defs><clipPath id="a"><path fill="none" d="M0 0h28.77v32H0z"/></clipPath></defs><title>icon-eho</title><g><g><path fill="#231f20" d="M14 0L0 8.4v3.42h1.8v10.65h25V11.82h1.9V8.7C24 5.5 19 2.83 14 0m9.7 19.64H5.22V9.5l9.13-5.66A94.23 94.23 0 0 1 23.7 9.5z" clip-path="url(#a)"/><path fill="#231f20" d="M9.48 14.28h9.57v3.04H9.48zM9.46 10.4h9.57v3.05H9.46zM3.4 27.1H1.72v-3.17h1.66v.38H2.03v.98h1.25v.38H2.03v1.07H3.4v.38z"/><g fill="#231f20" clip-path="url(#a)"><path d="M5.67 27.35L5.32 27a.86.86 0 0 1-.6.2c-.84 0-1.1-1-1.1-1.66s.26-1.67 1.1-1.67 1.12 1 1.12 1.67a2.25 2.25 0 0 1-.33 1.24l.32.34zM5 26.2l.3.3a1.72 1.72 0 0 0 .24-1c0-.75-.3-1.3-.8-1.3s-.78.55-.78 1.3.3 1.3.8 1.3a.57.57 0 0 0 .33-.1l-.25-.27zM8 23.93V26c0 .65-.3 1.2-.92 1.2s-.88-.55-.88-1.14v-2.13h.3v2c0 .7.3.88.6.88s.6-.17.6-.86v-2z"/></g><path fill="#231f20" d="M8.74 26.18l-.24.92h-.32L9 23.93h.35l.82 3.17h-.3l-.22-.92zm.8-.38l-.34-1.4-.36 1.4zM10.74 26.73h1.15v.38h-1.47v-3.17h.3v2.8zM14.45 23.93h.3v3.18h-.3v-1.47h-1.2v1.48h-.3v-3.17h.3v1.32h1.2v-1.32z"/><g fill="#231f20" clip-path="url(#a)"><path d="M16.17 27.2c-.85 0-1.1-1-1.1-1.68s.25-1.67 1.1-1.67 1.1 1 1.1 1.67-.25 1.67-1.1 1.67m0-3c-.5 0-.8.53-.8 1.28s.3 1.3.8 1.3.8-.55.8-1.3-.3-1.3-.8-1.3"/><path d="M19.08 23.93v2c0 .7-.32.87-.6.87s-.58-.2-.58-.88v-2h-.3V26c0 .6.25 1.14.87 1.14s.92-.55.92-1.2v-2zM21.18 24.86c0-.5-.3-.65-.57-.65a.5.5 0 0 0-.5.57.37.37 0 0 0 .26.4l.65.2a.78.78 0 0 1 .53.86.85.85 0 0 1-.9 1 .77.77 0 0 1-.68-.3 1.2 1.2 0 0 1-.23-.8H20c0 .57.34.74.63.74a.52.52 0 0 0 .6-.53c0-.33-.1-.44-.5-.56l-.46-.15a.7.7 0 0 1-.5-.75c0-.5.24-1 .8-1 .8 0 .87.66.88 1z"/></g><path fill="#231f20" d="M21.9 23.93h.32v3.17h-.3zM24.2 23.93h.3v3.18h-.35L23 24.55h-.02v2.57h-.3v-3.17h.37l1.14 2.57v-2.57z"/><g fill="#231f20" clip-path="url(#a)"><path d="M25.9 25.4h1v1.7h-.2l-.07-.4a.86.86 0 0 1-.75.5.8.8 0 0 1-.7-.36 2.14 2.14 0 0 1-.36-1.34c0-.77.34-1.65 1.08-1.65a1 1 0 0 1 1 1h-.3c-.1-.55-.43-.67-.68-.67-.4 0-.75.46-.75 1.3 0 .64.15 1.3.76 1.3a.58.58 0 0 0 .47-.2 1.18 1.18 0 0 0 .25-.85h-.75zM2.75 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67S3.75 32 2.75 32m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3S3.32 29 2.75 29"/><path d="M4.8 31.9h-.37v-3.17h1.2a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93H4.8zm0-1.7h.7c.33 0 .55-.14.55-.57a.47.47 0 0 0-.53-.53H4.8zM7.2 31.9h-.37v-3.17H8a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93h-.8zm0-1.7h.7c.32 0 .54-.14.54-.57a.47.47 0 0 0-.53-.53h-.7zM10.36 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67-.3 1.67-1.3 1.67m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3-.36-1.28-.94-1.28"/><path d="M12.4 31.9h-.35v-3.17h1.23a.78.78 0 0 1 .88.85.8.8 0 0 1-.37.76c.14.08.3.16.3.6v.57c0 .2 0 .25.14.33v.07h-.44a4.7 4.7 0 0 1-.06-.8c0-.26 0-.57-.48-.57h-.87zm0-1.72h.84c.26 0 .54-.08.54-.55s-.3-.53-.48-.53h-.9z"/></g><path fill="#231f20" d="M14.38 28.73v.38h.9v2.8h.36v-2.8h.9v-.37H14.4z"/><path fill="#231f20" d="M18.55 28.73v2c0 .7-.37.87-.7.87s-.68-.2-.68-.88v-2h-.36v2.12a1 1 0 0 0 1 1.14 1.06 1.06 0 0 0 1.08-1.2v-2.05z" clip-path="url(#a)"/><path fill="#231f20" d="M21.18 28.73v2.57l-1.34-2.57h-.43v3.18h.36v-2.56l1.36 2.57h.4v-3.17h-.34zM22.07 28.73h.36v3.17h-.36zM22.74 28.73v.38h.9v2.8H24v-2.8h.9v-.37h-2.16zM26.88 28.73l-.76 1.53-.77-1.53h-.42l1 1.9v1.28h.37v-1.27l1-1.9h-.42z"/></g></g></svg></span>
					</span>

					<span class="eho-text">We pledge to the letter and spirit of U.S. policy for the achievement of equal housing opportunity throughout the nation. We encourage and support an affirmative advertising and marketing program in which there are no barriers to obtaining housing because of race, color, religion, sex, handicap, familial status or national origin</span>

				</div><!-- eho -->

			<?php endif ?>

			<span id="mms">Site by: <a href="http://www.mm4solutions.com" target="_blank">Millennium Marketing Solutions</a></span>
		</div>
	</footer><!-- #colophon -->

</div><!-- #end-page -->

<?php wp_footer(); ?>

</body>
</html>
