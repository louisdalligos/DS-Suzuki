<?php
/**
 * Template Name: Home
 *
 * @package ds-suzuki
 *
 */

get_header(); ?>

<div class="content-area">
  <?php
  while ( have_posts() ) : the_post(); ?>

  <div class="carousel slide" data-ride="carousel" id="suzuki1_carousel">
  	<!-- Indicators -->
  	<ol class="carousel-indicators">
  		<li class="active" data-slide-to="0" data-target="#suzuki1_carousel"></li>
  		<li data-slide-to="1" data-target="#suzuki1_carousel"></li>
  		<li data-slide-to="2" data-target="#suzuki1_carousel"></li>
  	</ol>

    <!-- Wrapper for slides -->
  	<div class="carousel-inner">
  		<div class="item active"><img alt="Banner 1" class="centered-img" src="img/banners/banner1.jpg"></div>
  		<div class="item"><img alt="Banner 2" class="centered-img" src="img/banners/banner1.jpg"></div>
  		<div class="item"><img alt="Banner 3" class="centered-img" src="img/banners/banner1.jpg"></div>
  	</div>
  </div>

  <div class="container">
    <?php the_content(); ?>
  </div>

  <?php endwhile; // End of the loop.
  ?>
</div><!-- #primary -->

<?php get_footer(); ?>
