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
		</div><!-- page-flex-wrapper -->
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
					      Tel: <span itemprop="telephone"><a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></span>&nbsp;
					      Fax: <span itemprop="faxNumber"><?php echo esc_html( $fax ); ?></span>
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
						$facebook    = get_field( 'facebook', option );
						$google_plus = get_field( 'google_plus', option );
						$twitter     = get_field( 'twitter', option );
						$instagram   = get_field( 'instagram', option );
						$linkedin    = get_field( 'linkedin', option );
						$youtube     = get_field( 'youtube', option );
						?>

						<?php if ( $facebook ): ?>

								<a href="<?php echo esc_url( $facebook ); ?>" alt="link to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><clipPath id="clip-path"><rect width="40" height="40" style="fill:none"/></clipPath></defs><title>icon-facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M24.39,39.84H20V40h3.6a6.76,6.76,0,0,0,.79-.16M40,33.31V6.54A6.56,6.56,0,0,0,33.44,0H6.56A6.56,6.56,0,0,0,0,6.54V33.31a6.56,6.56,0,0,0,6.56,6.54H20V27.59a2.52,2.52,0,0,0-2.52-2.68H15V18.67h5V15.53c0-4.5,3.39-8.16,7.56-8.16h5v6.22h-5c-.6,0-1.26.8-1.26,1.88v3.19h6.3v6.24H26.3V37.32a2.38,2.38,0,0,1-1.91,2.53h9A6.55,6.55,0,0,0,40,33.31" style="fill:#231f20"/></g></g></g></svg></a>

						<?php endif ?>

						<?php if ( $google_plus ): ?>

								<a href="<?php echo esc_url( $google_plus ); ?>" alt="link to google plus page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-g-plus</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M11.39,31.2a9.08,9.08,0,0,0-1.33-.06,23.15,23.15,0,0,0-6.1.93,8.43,8.43,0,0,0-4,2.67v3C0,39.74,1.65,40,3.69,40H18.76A2.51,2.51,0,0,0,19,38.95c0-3-3.2-4.6-7.62-7.75" style="fill:#231f20"/><path d="M7.67,25.54a5.26,5.26,0,0,1,.58-2.28c-.64.06-1.28.12-1.86.12A9.9,9.9,0,0,1,0,21.05V31.38c2.63-2.11,7.19-1.73,9.42-1.88a6.13,6.13,0,0,1-1.74-4" style="fill:#231f20"/><path d="M14.74,15.86c0-4.2-2.43-10.73-7.25-10.73A5.43,5.43,0,0,0,3.41,7.05a6.64,6.64,0,0,0-1.14,4.32c0,3.91,2.05,9.68,7,9.68a5.06,5.06,0,0,0,3.9-1.46,6.35,6.35,0,0,0,1.52-3.73" style="fill:#231f20"/><path d="M32.63,21.05H29.47V13.62H22.1V10.53h7.37V3.16h3.16v7.37H40V3.68A3.35,3.35,0,0,0,36.31,0H3.68A3.35,3.35,0,0,0,0,3.68V6.84c.14-.14.31-.3.47-.43a15.28,15.28,0,0,1,10-3.26H22.74L19.48,5.79H15.92a9.36,9.36,0,0,1,3.55,7.39c0,4.31-2.27,6.36-4.71,8.28a4.11,4.11,0,0,0-1.63,2.86,3.2,3.2,0,0,0,1.51,2.51l2.09,1.63c2.56,2.16,5.89,4.66,5.89,8.68A7.3,7.3,0,0,1,22.16,40H36.31c2,0,3.69-.26,3.69-2.29V13.62H32.63Z" style="fill:#231f20"/></g></g></svg></path></a>

						<?php endif ?>

						<?php if ( $twitter ): ?>

							<a href="<?php echo esc_url( $facebook ); ?>" alt="link to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><clipPath id="clip-path"><rect width="40" height="40" style="fill:none"/></clipPath></defs><title>icon-facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M24.39,39.84H20V40h3.6a6.76,6.76,0,0,0,.79-.16M40,33.31V6.54A6.56,6.56,0,0,0,33.44,0H6.56A6.56,6.56,0,0,0,0,6.54V33.31a6.56,6.56,0,0,0,6.56,6.54H20V27.59a2.52,2.52,0,0,0-2.52-2.68H15V18.67h5V15.53c0-4.5,3.39-8.16,7.56-8.16h5v6.22h-5c-.6,0-1.26.8-1.26,1.88v3.19h6.3v6.24H26.3V37.32a2.38,2.38,0,0,1-1.91,2.53h9A6.55,6.55,0,0,0,40,33.31" style="fill:#231f20"/></g></g></g></svg></a>

						<?php endif ?>

						<?php if ( $instagram ): ?>

							<a href="<?php echo esc_url( $facebook ); ?>" alt="link to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><clipPath id="clip-path"><rect width="40" height="40" style="fill:none"/></clipPath></defs><title>icon-facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M24.39,39.84H20V40h3.6a6.76,6.76,0,0,0,.79-.16M40,33.31V6.54A6.56,6.56,0,0,0,33.44,0H6.56A6.56,6.56,0,0,0,0,6.54V33.31a6.56,6.56,0,0,0,6.56,6.54H20V27.59a2.52,2.52,0,0,0-2.52-2.68H15V18.67h5V15.53c0-4.5,3.39-8.16,7.56-8.16h5v6.22h-5c-.6,0-1.26.8-1.26,1.88v3.19h6.3v6.24H26.3V37.32a2.38,2.38,0,0,1-1.91,2.53h9A6.55,6.55,0,0,0,40,33.31" style="fill:#231f20"/></g></g></g></svg></a>

						<?php endif ?>

						<?php if ( $linkedin ): ?>

							<a href="<?php echo esc_url( $facebook ); ?>" alt="link to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><clipPath id="clip-path"><rect width="40" height="40" style="fill:none"/></clipPath></defs><title>icon-facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M24.39,39.84H20V40h3.6a6.76,6.76,0,0,0,.79-.16M40,33.31V6.54A6.56,6.56,0,0,0,33.44,0H6.56A6.56,6.56,0,0,0,0,6.54V33.31a6.56,6.56,0,0,0,6.56,6.54H20V27.59a2.52,2.52,0,0,0-2.52-2.68H15V18.67h5V15.53c0-4.5,3.39-8.16,7.56-8.16h5v6.22h-5c-.6,0-1.26.8-1.26,1.88v3.19h6.3v6.24H26.3V37.32a2.38,2.38,0,0,1-1.91,2.53h9A6.55,6.55,0,0,0,40,33.31" style="fill:#231f20"/></g></g></g></svg></a>

						<?php endif ?>

						<?php if ( $youtube ): ?>

							<a href="<?php echo esc_url( $facebook ); ?>" alt="link to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><clipPath id="clip-path"><rect width="40" height="40" style="fill:none"/></clipPath></defs><title>icon-facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M24.39,39.84H20V40h3.6a6.76,6.76,0,0,0,.79-.16M40,33.31V6.54A6.56,6.56,0,0,0,33.44,0H6.56A6.56,6.56,0,0,0,0,6.54V33.31a6.56,6.56,0,0,0,6.56,6.54H20V27.59a2.52,2.52,0,0,0-2.52-2.68H15V18.67h5V15.53c0-4.5,3.39-8.16,7.56-8.16h5v6.22h-5c-.6,0-1.26.8-1.26,1.88v3.19h6.3v6.24H26.3V37.32a2.38,2.38,0,0,1-1.91,2.53h9A6.55,6.55,0,0,0,40,33.31" style="fill:#231f20"/></g></g></g></svg></a>

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

				<?php if ( $add_eho == 'Yes'): ?>

					<div class="eho">
						<span class="eho-icons">
							<?php if ( $add_hf == 'Yes' ): ?>

								<img class="handicap-icon" src="<?php echo get_template_directory_uri() . '/imgs/icon-handicap.gif' ?>" alt="Handicap Accessible">

							<?php endif ?>

							<svg xmlns="http://www.w3.org/2000/svg" width="28.77" height="31.99" viewBox="0 0 28.77 31.99"><defs><clipPath id="a"><path fill="none" d="M0 0h28.77v32H0z"/></clipPath></defs><title>icon-eho</title><g><g><path fill="#231f20" d="M14 0L0 8.4v3.42h1.8v10.65h25V11.82h1.9V8.7C24 5.5 19 2.83 14 0m9.7 19.64H5.22V9.5l9.13-5.66A94.23 94.23 0 0 1 23.7 9.5z" clip-path="url(#a)"/><path fill="#231f20" d="M9.48 14.28h9.57v3.04H9.48zM9.46 10.4h9.57v3.05H9.46zM3.4 27.1H1.72v-3.17h1.66v.38H2.03v.98h1.25v.38H2.03v1.07H3.4v.38z"/><g fill="#231f20" clip-path="url(#a)"><path d="M5.67 27.35L5.32 27a.86.86 0 0 1-.6.2c-.84 0-1.1-1-1.1-1.66s.26-1.67 1.1-1.67 1.12 1 1.12 1.67a2.25 2.25 0 0 1-.33 1.24l.32.34zM5 26.2l.3.3a1.72 1.72 0 0 0 .24-1c0-.75-.3-1.3-.8-1.3s-.78.55-.78 1.3.3 1.3.8 1.3a.57.57 0 0 0 .33-.1l-.25-.27zM8 23.93V26c0 .65-.3 1.2-.92 1.2s-.88-.55-.88-1.14v-2.13h.3v2c0 .7.3.88.6.88s.6-.17.6-.86v-2z"/></g><path fill="#231f20" d="M8.74 26.18l-.24.92h-.32L9 23.93h.35l.82 3.17h-.3l-.22-.92zm.8-.38l-.34-1.4-.36 1.4zM10.74 26.73h1.15v.38h-1.47v-3.17h.3v2.8zM14.45 23.93h.3v3.18h-.3v-1.47h-1.2v1.48h-.3v-3.17h.3v1.32h1.2v-1.32z"/><g fill="#231f20" clip-path="url(#a)"><path d="M16.17 27.2c-.85 0-1.1-1-1.1-1.68s.25-1.67 1.1-1.67 1.1 1 1.1 1.67-.25 1.67-1.1 1.67m0-3c-.5 0-.8.53-.8 1.28s.3 1.3.8 1.3.8-.55.8-1.3-.3-1.3-.8-1.3"/><path d="M19.08 23.93v2c0 .7-.32.87-.6.87s-.58-.2-.58-.88v-2h-.3V26c0 .6.25 1.14.87 1.14s.92-.55.92-1.2v-2zM21.18 24.86c0-.5-.3-.65-.57-.65a.5.5 0 0 0-.5.57.37.37 0 0 0 .26.4l.65.2a.78.78 0 0 1 .53.86.85.85 0 0 1-.9 1 .77.77 0 0 1-.68-.3 1.2 1.2 0 0 1-.23-.8H20c0 .57.34.74.63.74a.52.52 0 0 0 .6-.53c0-.33-.1-.44-.5-.56l-.46-.15a.7.7 0 0 1-.5-.75c0-.5.24-1 .8-1 .8 0 .87.66.88 1z"/></g><path fill="#231f20" d="M21.9 23.93h.32v3.17h-.3zM24.2 23.93h.3v3.18h-.35L23 24.55h-.02v2.57h-.3v-3.17h.37l1.14 2.57v-2.57z"/><g fill="#231f20" clip-path="url(#a)"><path d="M25.9 25.4h1v1.7h-.2l-.07-.4a.86.86 0 0 1-.75.5.8.8 0 0 1-.7-.36 2.14 2.14 0 0 1-.36-1.34c0-.77.34-1.65 1.08-1.65a1 1 0 0 1 1 1h-.3c-.1-.55-.43-.67-.68-.67-.4 0-.75.46-.75 1.3 0 .64.15 1.3.76 1.3a.58.58 0 0 0 .47-.2 1.18 1.18 0 0 0 .25-.85h-.75zM2.75 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67S3.75 32 2.75 32m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3S3.32 29 2.75 29"/><path d="M4.8 31.9h-.37v-3.17h1.2a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93H4.8zm0-1.7h.7c.33 0 .55-.14.55-.57a.47.47 0 0 0-.53-.53H4.8zM7.2 31.9h-.37v-3.17H8a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93h-.8zm0-1.7h.7c.32 0 .54-.14.54-.57a.47.47 0 0 0-.53-.53h-.7zM10.36 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67-.3 1.67-1.3 1.67m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3-.36-1.28-.94-1.28"/><path d="M12.4 31.9h-.35v-3.17h1.23a.78.78 0 0 1 .88.85.8.8 0 0 1-.37.76c.14.08.3.16.3.6v.57c0 .2 0 .25.14.33v.07h-.44a4.7 4.7 0 0 1-.06-.8c0-.26 0-.57-.48-.57h-.87zm0-1.72h.84c.26 0 .54-.08.54-.55s-.3-.53-.48-.53h-.9z"/></g><path fill="#231f20" d="M14.38 28.73v.38h.9v2.8h.36v-2.8h.9v-.37H14.4z"/><path fill="#231f20" d="M18.55 28.73v2c0 .7-.37.87-.7.87s-.68-.2-.68-.88v-2h-.36v2.12a1 1 0 0 0 1 1.14 1.06 1.06 0 0 0 1.08-1.2v-2.05z" clip-path="url(#a)"/><path fill="#231f20" d="M21.18 28.73v2.57l-1.34-2.57h-.43v3.18h.36v-2.56l1.36 2.57h.4v-3.17h-.34zM22.07 28.73h.36v3.17h-.36zM22.74 28.73v.38h.9v2.8H24v-2.8h.9v-.37h-2.16zM26.88 28.73l-.76 1.53-.77-1.53h-.42l1 1.9v1.28h.37v-1.27l1-1.9h-.42z"/></g></g></svg>
						</span>

						<span class="eho-text">We pledge to the letter and spirit of U.S. policy for the achievement of equal housing opportunity throughout the nation. We encourage and support an affirmative advertising and marketing program in which there are no barriers to obtaining housing because of race, color, religion, sex, handicap, familial status or national origin</span>

					</div><!-- eho -->

				<?php endif ?>

				<span id="mms">Site by: <a href="http://www.mm4solutions.com" target="_blank">Millennium Marketing Solutions</a></span>

			</div><!-- right-column -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
