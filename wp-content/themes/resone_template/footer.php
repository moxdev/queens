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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

		<?php $add_eho        = get_field( 'add_the_equal_housing_opportunity_logo', option );
					$address        = get_field( 'address', option );
			    $add_hf         = get_field( 'add_the_handicap_friendly_logo', option );
			    $add_dcbor      = get_field( 'add_the_dc_bill_of_rights_link', option );
	        $add_gtranslate = get_field( 'add_the_google_translate_dropdown', option );
					$add_ahd        = get_field( 'add_the_ahd_management_logo', option ); ?>

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
					      <span class="email"><a href="mailto:<?php echo esc_html( $email ); ?>" itemprop="email">Email</a></span>
					  </div>
					</div>

				<?php endif ?>

				<?php if ( $add_eho == 'Yes'): ?>

					<div class="eho">
						<svg xmlns="http://www.w3.org/2000/svg" width="28.77" height="31.99" viewBox="0 0 28.77 31.99"><defs><clipPath id="a"><path fill="none" d="M0 0h28.77v32H0z"/></clipPath></defs><title>icon-eho</title><g><g><path fill="#231f20" d="M14 0L0 8.4v3.42h1.8v10.65h25V11.82h1.9V8.7C24 5.5 19 2.83 14 0m9.7 19.64H5.22V9.5l9.13-5.66A94.23 94.23 0 0 1 23.7 9.5z" clip-path="url(#a)"/><path fill="#231f20" d="M9.48 14.28h9.57v3.04H9.48zM9.46 10.4h9.57v3.05H9.46zM3.4 27.1H1.72v-3.17h1.66v.38H2.03v.98h1.25v.38H2.03v1.07H3.4v.38z"/><g fill="#231f20" clip-path="url(#a)"><path d="M5.67 27.35L5.32 27a.86.86 0 0 1-.6.2c-.84 0-1.1-1-1.1-1.66s.26-1.67 1.1-1.67 1.12 1 1.12 1.67a2.25 2.25 0 0 1-.33 1.24l.32.34zM5 26.2l.3.3a1.72 1.72 0 0 0 .24-1c0-.75-.3-1.3-.8-1.3s-.78.55-.78 1.3.3 1.3.8 1.3a.57.57 0 0 0 .33-.1l-.25-.27zM8 23.93V26c0 .65-.3 1.2-.92 1.2s-.88-.55-.88-1.14v-2.13h.3v2c0 .7.3.88.6.88s.6-.17.6-.86v-2z"/></g><path fill="#231f20" d="M8.74 26.18l-.24.92h-.32L9 23.93h.35l.82 3.17h-.3l-.22-.92zm.8-.38l-.34-1.4-.36 1.4zM10.74 26.73h1.15v.38h-1.47v-3.17h.3v2.8zM14.45 23.93h.3v3.18h-.3v-1.47h-1.2v1.48h-.3v-3.17h.3v1.32h1.2v-1.32z"/><g fill="#231f20" clip-path="url(#a)"><path d="M16.17 27.2c-.85 0-1.1-1-1.1-1.68s.25-1.67 1.1-1.67 1.1 1 1.1 1.67-.25 1.67-1.1 1.67m0-3c-.5 0-.8.53-.8 1.28s.3 1.3.8 1.3.8-.55.8-1.3-.3-1.3-.8-1.3"/><path d="M19.08 23.93v2c0 .7-.32.87-.6.87s-.58-.2-.58-.88v-2h-.3V26c0 .6.25 1.14.87 1.14s.92-.55.92-1.2v-2zM21.18 24.86c0-.5-.3-.65-.57-.65a.5.5 0 0 0-.5.57.37.37 0 0 0 .26.4l.65.2a.78.78 0 0 1 .53.86.85.85 0 0 1-.9 1 .77.77 0 0 1-.68-.3 1.2 1.2 0 0 1-.23-.8H20c0 .57.34.74.63.74a.52.52 0 0 0 .6-.53c0-.33-.1-.44-.5-.56l-.46-.15a.7.7 0 0 1-.5-.75c0-.5.24-1 .8-1 .8 0 .87.66.88 1z"/></g><path fill="#231f20" d="M21.9 23.93h.32v3.17h-.3zM24.2 23.93h.3v3.18h-.35L23 24.55h-.02v2.57h-.3v-3.17h.37l1.14 2.57v-2.57z"/><g fill="#231f20" clip-path="url(#a)"><path d="M25.9 25.4h1v1.7h-.2l-.07-.4a.86.86 0 0 1-.75.5.8.8 0 0 1-.7-.36 2.14 2.14 0 0 1-.36-1.34c0-.77.34-1.65 1.08-1.65a1 1 0 0 1 1 1h-.3c-.1-.55-.43-.67-.68-.67-.4 0-.75.46-.75 1.3 0 .64.15 1.3.76 1.3a.58.58 0 0 0 .47-.2 1.18 1.18 0 0 0 .25-.85h-.75zM2.75 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67S3.75 32 2.75 32m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3S3.32 29 2.75 29"/><path d="M4.8 31.9h-.37v-3.17h1.2a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93H4.8zm0-1.7h.7c.33 0 .55-.14.55-.57a.47.47 0 0 0-.53-.53H4.8zM7.2 31.9h-.37v-3.17H8a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93h-.8zm0-1.7h.7c.32 0 .54-.14.54-.57a.47.47 0 0 0-.53-.53h-.7zM10.36 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67-.3 1.67-1.3 1.67m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3-.36-1.28-.94-1.28"/><path d="M12.4 31.9h-.35v-3.17h1.23a.78.78 0 0 1 .88.85.8.8 0 0 1-.37.76c.14.08.3.16.3.6v.57c0 .2 0 .25.14.33v.07h-.44a4.7 4.7 0 0 1-.06-.8c0-.26 0-.57-.48-.57h-.87zm0-1.72h.84c.26 0 .54-.08.54-.55s-.3-.53-.48-.53h-.9z"/></g><path fill="#231f20" d="M14.38 28.73v.38h.9v2.8h.36v-2.8h.9v-.37H14.4z"/><path fill="#231f20" d="M18.55 28.73v2c0 .7-.37.87-.7.87s-.68-.2-.68-.88v-2h-.36v2.12a1 1 0 0 0 1 1.14 1.06 1.06 0 0 0 1.08-1.2v-2.05z" clip-path="url(#a)"/><path fill="#231f20" d="M21.18 28.73v2.57l-1.34-2.57h-.43v3.18h.36v-2.56l1.36 2.57h.4v-3.17h-.34zM22.07 28.73h.36v3.17h-.36zM22.74 28.73v.38h.9v2.8H24v-2.8h.9v-.37h-2.16zM26.88 28.73l-.76 1.53-.77-1.53h-.42l1 1.9v1.28h.37v-1.27l1-1.9h-.42z"/></g></g></svg>

						<span>We pledge to the letter and spirit of U.S. policy for the achievement of equal housing opportunity throughout the nation. We encourage and support an affirmative advertising and marketing program in which there are no barriers to obtaining housing because of race, color, religion, sex, handicap, familial status or national origin</span>

					</div>

				<?php endif ?>

				<?php if ( $add_hf == 'Yes' ): ?>

					<img src="<?php echo get_template_directory_uri() . '/imgs/icon-handicap.gif' ?>" alt="Handicap Accessible">

				<?php endif ?>

				<?php if ( $add_dcbor == 'Yes'):

					$file = get_field( 'dc_tenants_bill_of_rights_upload', 'option' );

					$url = wp_get_attachment_url( $file ); ?>

					<a href="<?php echo esc_url( $url ); ?>" target="_blank" alt="DC Tenants Bill of Rights PDF Download">DC Tenants Bill of Rights</a>

				<?php endif; ?>

			</div><!-- left-column -->

			<div class="right-column">

				<div class="social">

				</div>

				<?php if ( $add_gtranslate == 'Yes' ): ?>

					<div class="translate">
						<p>Translate Box</p>

					</div>

				<?php endif ?>

				<div class="property-management-logos">

				</div>
			</div><!-- right-column -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
