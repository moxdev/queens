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
      $hours  = get_field('office_hours', option);

      if ($hours) {

        if( have_rows('office_hours', option) ): ?>

            <aside class="office-hours">
              <h2>Office Hours</h2>

            <?php while( have_rows('office_hours', option) ): the_row();

                $days = get_sub_field('days');
                $hours = get_sub_field('hours');

                ?>

                <div class="hours">

                    <?php if( !empty($days) ) : ?>
                      <span class="hours" id="side-hours-1"><?php echo $days; ?></span>
                      <span class="hours" id="side-hours-1"><?php echo $hours; ?></span>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

            </aside>

        <?php endif;
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
        <aside id="directions">
          <h2>Find Us</h2>

          <?php

          if($add): ?><span class="side-contact" id="side-address-1"><?php echo $add; ?></span><?php endif;

          if($city): ?><span class="side-contact" id="side-city"><?php echo $city; ?></span><?php endif; if($city || $state || $zip): ?><span class="comma">, </span><?php endif; if($state): ?><span class="side-contact" id="side-state"><?php echo $state; ?> </span><?php endif; if($zip): ?><span class="side-contact" id="side-zip"><?php echo $zip; ?></span><?php endif;

          ?>

          <div id="side-map-canvas" class="map-canvas" style="height:300px;"></div>
          <form id="form-directions" onSubmit="calcRoute(); return false;">
            <label for="start">Starting Address</label>
            <input type="text" id="start" name="start">
            <input type="hidden" id="end" name="end" value="<?php echo $add . ', ' . $city . ', ' . $state . ' ' . $zip; ?>">
            <div class="error-box" id="map-error"></div>
            <input type="button" onclick="calcRoute();" value="Get Directions" class="btn">
          </form>
          <div id="directions-panel"></div>

        </aside>

        <?php
      }
    }
  }
}

/*

if( function_exists( 'acf_add_options_page' ) ) {
  $lat = get_field('lat', option);
  $lng = get_field('long', option);

   ?> Hi! <?php

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
*/