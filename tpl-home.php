<?php
/**
 * Template Name: Home
 *
 * @package ds-suzuki
 *
 */

get_header();

  while ( have_posts() ) : the_post(); ?>

  <div class="carousel slide" data-ride="carousel" id="suzuki1_carousel">

    <?php
      $images = rwmb_meta( 'ds-banner-slider-image', 'size=FULL' );

      //print_r($images);

      if ( !empty( $images ) ) { ?>

        <div class="carousel-inner"><?php
        $count = 0;

        foreach ( $images as $image ) {
          $count++; ?>

          <div class="item <?php if($count == 1){echo ' active';} ?>">
            <img class="centered-img" src="<?php echo esc_url( $image['url'] ) ?>"  alt="<?php echo esc_attr( $image['alt'] )?>">
          </div><!-- end item -->

        <?php } ?>
      </div><!-- end carousel inner --><?php
      }
    ?>

  </div><!-- end carousel slide -->

  <section class="suzuki1_main-content-wrap">
  	<div class="container">
  		<div class="row">

        <!-- search form -->
  			<div class="suzuki1_sidebar col-md-4 col-md-push-8">
  				<div class="suzuki1_quicksearch panel panel-default">
  					<div class="panel-heading">
  						<h3 class="panel-title">Quick Search</h3>
  					</div>
  					<div class="panel-body">
  						<form action="#" class="form-horizontal suzuki1_form suzuki1_quicksearch-form" id="quick-search" method="post" name="quick-search">
  							<div class="form-group">
  								<div class="form-input">
  									<select class="form-control select-form-control" id="make_target">
  										<option value="">
  											Make
  										</option>
  									</select>
  								</div>
  							</div>
  							<div class="form-group">
  								<div class="form-input">
  									<select class="form-control select-form-control" id="model_target">
  										<option value="">
  											Model
  										</option>
  									</select>
  								</div>
  							</div>
  							<div class="form-group">
  								<div class="form-input">
  									<select class="form-control select-form-control" id="badge_target">
  										<option value="">
  											Badge
  										</option>
  									</select>
  								</div>
  							</div>
  							<div class="form-group suzuki1-slider">
  								<div class="form-input">
  									<div class="slider" id="year-range"></div>
  									<div class="value-wrap">
  										<input id="year" readonly type="text">
  									</div>
  								</div>
  							</div>
  							<div class="form-group suzuki1-slider">
  								<div class="form-input">
  									<div class="slider" id="price-range"></div>
  									<div class="value-wrap">
  										<input id="amount-min" readonly type="text"> <input class="pull-right" id="amount-max" readonly type="text">
  									</div>
  								</div>
  							</div>
  							<div class="form-group submit-group">
  								<div class="form-label">
  									<a class="suzuki1_advanced-search-link" href="#">Advanced Search</a>
  								</div>
  								<div class="form-input">
  									<button class="btn btn-default btn-block" id="qs_submit" name="submit">Search</button>
  								</div>
  							</div>
  						</form>
  					</div>
  				</div><!-- END .panel -->
  			</div>

  			<div class="suzuki1_cta-content col-md-8 col-md-pull-4">
  				<div class="suzuki1_cta-wrap row">
  					<div class="col-md-3 col-sm-3 col-xs-6">
  						<div class="cta suzuki1_cta-1-wrap">
  							<div class="cta_placeholder"></div>
                <a class="suzuki1_cta-1 suzuki1_cta-btn" href="#">
                  <span>Take a test drive</span>
                  <i class="fa fa-chevron-right"></i>
                </a>
  						</div>
  					</div>
  					<div class="col-md-3 col-sm-3 col-xs-6">
  						<div class="cta suzuki1_cta-2-wrap">
  							<div class="cta_placeholder"></div><a class="suzuki1_cta-2 suzuki1_cta-btn" href="#"><span>Request a brochure</span> <i class="fa fa-chevron-right"></i></a>
  						</div>
  					</div>
  					<div class="col-md-3 col-sm-3 col-xs-6">
  						<div class="cta suzuki1_cta-3-wrap">
  							<div class="cta_placeholder"></div><a class="suzuki1_cta-3 suzuki1_cta-btn" href="#"><span>Service Booking</span> <i class="fa fa-chevron-right"></i></a>
  						</div>
  					</div>
  					<div class="col-md-3 col-sm-3 col-xs-6">
  						<div class="cta suzuki1_cta-4-wrap">
  							<div class="cta_placeholder"></div><a class="suzuki1_cta-4 suzuki1_cta-btn" href="#"><span>Finance &amp; Insurance</span> <i class="fa fa-chevron-right"></i></a>
  						</div>
  					</div>
  				</div><!-- Car Gallery -->
  				<div class="owl-carousel owl-theme" id="suzuki1_car-gallery">
  					<div class="item">
  					  <div class="suzuki1_car-image">
                <img alt="Celerio" class="centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/celerio.png">
              </div>
              <img alt="Celerio" class="suzuki1_car-logo centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/celerio-logo.png">
            </div>

  					<div class="item">
  					  <div class="suzuki1_car-image">
                <img alt="Swift Sport" class="centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/swift-sport.png">
              </div>
              <img alt="Celerio" class="suzuki1_car-logo centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/swift-sport-logo.png">
            </div>

  					<div class="item">
  					  <div class="suzuki1_car-image">
                <img alt="Swift" class="centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/swift.png">
              </div>
              <img alt="Celerio" class="suzuki1_car-logo centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/swift-logo.png">
            </div>

  					<div class="item">
  					  <div class="suzuki1_car-image">
                <img alt="S-Cross" class="centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/s-cross.png">
              </div>
              <img alt="Celerio" class="suzuki1_car-logo centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/scross-logo.png">
            </div>

  					<div class="item">
  					  <div class="suzuki1_car-image">
                <img alt="Celerio" class="centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/celerio.png">
              </div>
              <img alt="Celerio" class="suzuki1_car-logo centered-img" src="<?php echo get_template_directory_uri(); ?>/img/cars/celerio-logo.png">
            </div>
  				</div>

  				<div class="customNavigation">
  					<a class="prev"><img alt="Prev" src="<?php echo get_template_directory_uri(); ?>/img/carousel-left-arrow.png"></a>
            <a class="next"><img alt="Next" src="<?php echo get_template_directory_uri(); ?>/img/carousel-right-arrow.png"></a>
  				</div>
  			</div>
  		</div>

  		<div class="suzuki1_dealer_about row">
  			<div class="col-md-4 col-sm-6 col-xs-12"><img alt="Dealer name" class="img-responsive centered-img" src="<?php echo get_template_directory_uri(); ?>/img/dealer-image.jpg"></div>
  			<div class="col-md-8 col-sm-6 col-xs-12">
  				<h3 class="suzuki1_widget-title">About Dealer Name Suzuki</h3>
  				<p>Suzuki Life represents everything that makes up the Suzuki Way of Life! - it encompasses our passion for Motorsport, a rich heritage in 4x4, all the latest Suzuki News and Reviews, everyone and everything aligned to Suzuki's energetic lifestyle and most importantly, the Suzuki Community, including the most enthusiastic Suzuki owners and clubs and what they wish to share with you.</p>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- Map -->
  <section class="suzuki1_dealer-location-map">
  	<div class="gmap3" id="suzuki1_dealer-gmap"></div>
    <a class="suzuki1_direction-button" href="#">Get Directions</a>
  </section>

  <div class="container">
    <?php the_content(); ?>
  </div>

  <?php endwhile; // End of the loop.
  ?>

<?php get_footer(); ?>
