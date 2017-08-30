<div class="home-slider">
  <?php $addCarousel = get_field('add_a_carousel_to_the_hompage');
  if($addCarousel == "No") {
    $customContent = get_field('custom_html');
    if($customContent): echo $customContent; endif;
  } else {
    // check if the repeater field has rows of data
    if( have_rows('slides') ): ?>
      <ul>
      <?php while ( have_rows('slides') ) : the_row();
        $title = get_sub_field('slide_title');
        $subTitle = get_sub_field('slide_sub_title');
        $content = get_sub_field('slide_content');
        $image = get_sub_field('slide_image');
        $link = get_sub_field('slide_link');
        $class = get_sub_field('slide_class'); ?>
        <li class="<?php echo $class; ?>">
          <div class="slide-content-wrapper">
            <?php if($title): ?><span class="slide-title"><?php echo $title; ?></span><?php echo "\n"; endif;
            if($subTitle): ?><span class="slide-sub-title"><?php echo $subTitle; ?></span><?php echo "\n"; endif;
            if($content): ?><div class="slide-content"><?php echo $content; ?></div><?php echo "\n"; endif;
            if($link): ?><a class="slide-link" href="<?php echo $link; ?>">Learn More &raquo;</a><?php echo "\n"; endif; ?>
          </div>
          <?php if($image): ?><div class="slide-img"><img src="<?php echo $image['sizes']['home-carousel']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif; ?>
        </li>
      <?php endwhile; ?>
      </ul>
      <button id="home-carousel-prev" class="home-carousel-nav"></button>
      <button id="home-carousel-next" class="home-carousel-nav"></button>
      <?php $rows = get_field('slides');
      $rowCount = count($rows); ?>
      <ol>
      <?php for ($i = 1; $i <= $rowCount; $i++) { ?>
        <li><a href="#"><?php echo $i; ?></a></li>
      <?php } ?>
      </ol>
    <?php endif;

  } ?>
  <!--<img src="<?php //echo get_template_directory_uri() . '/imgs/home-ph1.gif'; ?>" style="display:block; margin:0 auto;">-->
</div>

<!-- script load -->
<?php

if(is_page_template('frontpage.php')) {
  wp_enqueue_script( 'millennium-marketing-solutions-touchswipe-library', get_template_directory_uri() . '/js/min/jquery.touchSwipe.min.js', array('jquery'), '20151001', true );

  $addCarousel = get_field('add_a_carousel_to_the_hompage');

  if($addCarousel == "Yes") {
    /*wp_enqueue_script( 'millennium-marketing-solutions-images-loaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array(), '20141217', true );
    wp_enqueue_script( 'millennium-marketing-solutions-image-fill', get_template_directory_uri() . '/js/jquery-imagefill.min.js', array(), '20141217', true );*/
    wp_enqueue_script( 'millennium-marketing-solutions-home-carousel', get_template_directory_uri() . '/js/home-carousel.js', array('jquery','millennium-marketing-solutions-touchswipe-library'), '20151006', true );
  }
}