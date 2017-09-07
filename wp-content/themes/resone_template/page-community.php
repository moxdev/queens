<?php
/**
 * Template Name: Community Page
 *
 * This is the template that displays the Community Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Residential_One_Properties
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="side-map-canvas" class="map-canvas" style="height:300px;"></div>

<?php

get_footer();
