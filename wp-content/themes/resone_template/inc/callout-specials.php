<?php
/**
 * Residential One Properties Specials Callout for Floor Plans Page
 *
 * @package Residential_One_Properties
 */

function resone_template_specials_callout() {
  if ( function_exists( 'get_field' ) ) {
    $content = get_field( 'specials_content', option );
    $details = get_field( 'specials_details', option );

    if( $content ): ?>

    <div class="specials-callout">

      <?php if ( $content ): ?>
        <h2>Specials: <?php echo esc_html( $content ); ?></h2>
      <?php endif ?>

      <?php if ( $details ):  ?>
        <span><?php echo $details; ?></span>
      <?php endif ?>

    </div>

    <?php endif;
  }
}
