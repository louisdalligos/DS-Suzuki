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

  <div class="container">
    <?php the_content(); ?>
  </div>

  <?php endwhile; // End of the loop.
  ?>
</div><!-- #primary -->

<?php get_footer(); ?>
