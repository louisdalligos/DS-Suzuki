<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ds-suzuki
 */

get_header(); ?>

	<div class="suzuki1_banner-page">
		<img alt="page banner" class="img-responsive centered-img" src="<?php echo get_template_directory_uri(); ?>/img/banners/banner-page.jpg">
	</div>

	<section class="suzuki1_main-content-wrap">
		<div class="container suzuki1_inner-pages">
			<div class="row"><?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.

				get_sidebar();
				?>
			</div>
		</div>
	</section>

	<!-- Map -->
  <section class="suzuki1_dealer-location-map">
  	<div class="gmap3" id="suzuki1_dealer-gmap"></div>
    <a class="suzuki1_direction-button" href="#">Get Directions</a>
  </section>

<?php
get_footer();
