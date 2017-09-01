<?php
/**
 * Residential One Properties Specials Sidebar
 *
 * @package Residential_One_Properties
 */

function resone_template_specials_sidebar() {
  if ( function_exists( 'get_field' ) ) {
    $header  = get_field( 'specials_header', option );
    $content = get_field( 'specials_content', option );
    $details = get_field( 'specials_details', option );

    if( $header ): ?>

    <div class="specials">

      <?php if ( $header ): ?>
        <h2><?php echo esc_html( $header ); ?></h2>
      <?php endif ?>

      <?php if ( $content ): ?>
        <h3><?php echo esc_html( $content ); ?></h3>
      <?php endif ?>

      <?php if ( $details ): ?>
        <h4><?php echo $details; ?></h4>
      <?php endif ?>

    </div>

    <?php endif;
  }
}
