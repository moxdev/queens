<?php
/**
 * Residential One Properties Homepage Carousel
 *
 * @package Residential_One_Properties
 */

function resone_template_contact_page_sidebar() {
  if(is_page_template( 'page-contact.php' ) && function_exists( 'acf_add_options_page' ) ) {
    if ( function_exists( 'get_field' ) ) {
      $add    = get_field('address', option);
      $city   = get_field('city', option);
      $state  = get_field('state', option);
      $zip    = get_field('zip', option);
      $ph     = get_field('phone', option);
      $fx     = get_field('fax', option);
      $email  = get_field('email', option);
      $hours1 = get_field('hours_1', option);
      $hours2 = get_field('hours_2', option);
      $hours3 = get_field('hours_3', option);

      if( $hours1 || $hours2 || $hours3 ) {
        ?>
        <aside id="office-hours">
          <h2>Office Hours</h2>

          <?php if($hours1): ?>
            <span class="hours" id="side-hours-1"><?php echo $hours1; ?></span>
          <?php endif;

          if($hours2): ?>
            <span class="hours" id="side-hours-2"><?php echo $hours2; ?></span>
          <?php endif;

          if($hours3): ?>
            <span class="hours" id="side-hours-3"><?php echo $hours3; ?></span>
          <?php endif; ?>

        </aside>
        <?php
      }

      if( $ph || $fx ) { ?>

        <aside id="address-phone">
          <h2>Phone/Fax</h2>

          <?php

          if($ph): ?>
            <span class="side-contact" id="side-phone"><a href="tel:<?php echo $ph; ?>" class="tel"><?php echo $ph; ?></a></span>
          <?php endif;

          if($fx): ?>
            <span class="side-contact" id="side-fax"><a href="fax:<?php echo $fx; ?>" class="tel"><?php echo $fx; ?></a></span>
          <?php endif;

          ?>

        </aside>

        <?php
      }

      if( $add || $city || $state || $zip || $ph || $fx ) {
        ?>
        <aside id="address">
          <h2>Find Us</h2>

          <?php

          if($add): ?><span class="side-contact" id="side-address-1"><?php echo $add; ?></span><?php endif;

          if($city): ?><span class="side-contact" id="side-city"><?php echo $city; ?></span><?php endif; if($city || $state || $zip): ?><span class="comma">, </span><?php endif; if($state): ?><span class="side-contact" id="side-state"><?php echo $state; ?> </span><?php endif; if($zip): ?><span class="side-contact" id="side-zip"><?php echo $zip; ?></span><?php endif;

          ?>

        </aside>

        <?php
      }
    }

    if( function_exists( 'acf_add_options_page' ) ) {
      $lat = get_field('lat', option);
      $lng = get_field('long', option);

      if($lat && $lng) { ?>
        <div id="map-canvas" style="height:350px"></div>
        <form id="get-directions">
          <label>Starting Address: <input id="start" type="text"></label>
          <input id="end" value="<?php echo $lat; ?>, <?php echo $lng; ?>" type="hidden">
          <div id="response-panel"></div>
          <input value="Get Directions" type="submit">
        </form>

        <?php //wp_enqueue_script( string $handle, string $src = false, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false );
      }
    }
  }
}

