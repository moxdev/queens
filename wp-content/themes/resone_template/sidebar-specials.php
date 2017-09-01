<?php
/**
 * The sidebar containing the Specials widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>

<aside id="specials-secondary" class="widget-area">

  <?php if( is_page_template( 'frontpage.php' ) && function_exists( 'resone_template_specials_sidebar' ) ) {
    resone_template_specials_sidebar();
  } ?>

</aside><!-- #secondary -->