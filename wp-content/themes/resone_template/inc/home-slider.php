<?php
/**
 * Residential One Properties Homepage Carousel
 *
 * @package Residential_One_Properties
 */

function resone_template_homepage_slider() {
  if ( function_exists( 'get_field' ) ) {
    $addCarousel = get_field('add_a_carousel_to_the_hompage');

    if($addCarousel == "Yes") { ?>

      <div class="home-slider">
        <?php

        if( have_rows('slides') ): ?>
          <ul>
          <?php while ( have_rows('slides') ) : the_row();
            $image = get_sub_field('slide_image'); ?>

            <li>
              <?php if($image): ?>
                <div class="slide-img"><img src="<?php echo $image['sizes']['home-carousel']; ?>" alt="<?php echo $image['alt']; ?>"></div>
              <?php endif; ?>
            </li>

          <?php endwhile; ?>
          </ul>

          <?php $rows = get_field('slides');
          $rowCount = count($rows); ?>
          <ol>
          <?php for ($i = 1; $i <= $rowCount; $i++) { ?>
            <li><a href="#"><?php echo $i; ?></a></li>
          <?php } ?>
          </ol>
        <?php endif;

        ?>
        <!--<img src="<?php //echo get_template_directory_uri() . '/imgs/home-ph1.gif'; ?>" style="display:block; margin:0 auto;">-->
      </div>

      <?php
    }
  }
}
