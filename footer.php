<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-suzuki
 */

?>

	</div><!-- #content -->

	<footer class="suzuki1_footer">
		<div class="container">
			<!-- Footer Up -->
			<div class="suzuki1_footer-up row">
				<div class="col-md-3 col-sm-6 col-md-push-9">
					<div class="suzuki1_widget suzuki1_contact-wrap">
						<a class="suzuki1_widget-title" href="#suzuki1_contact-wrap">Contact Us <i class='fa fa-chevron-right visible-xs'></i></a>
						<div id="suzuki1_contact-wrap">
							<address>
								10 Address Street<br>
								Suburb State
							</address><span>Sales 1800 000 000</span> <span>Service 1800 000 000</span> <span>Finance 1800 000 000</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-md-push-3">
					<div class="suzuki1_widget suzuki1_trading-wrap">
						<a class="suzuki1_widget-title" href="#suzuki1_trading-wrap">Trading Hours <i class='fa fa-chevron-right visible-xs'></i></a>
						<div id="suzuki1_trading-wrap">
							<ul>
								<li>Mon - 8:30AM - 5:00PM</li>
								<li>Tue - 8:30AM - 5:00PM</li>
								<li>Wed - 8:30AM - 5:00PM</li>
								<li>Thu - 8:30AM - 5:00PM</li>
								<li>Fri - 8:30AM - 5:00PM</li>
								<li>Sat - 8:30AM - 1:00PM</li>
								<li>Sun - Closed</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-md-pull-3">
					<div class="suzuki1_widget suzuki1_owners-wrap">
						<a class="suzuki1_widget-title" href="#suzuki1_owners-wrap">Owners <i class='fa fa-chevron-right visible-xs'></i></a>
						<div id="suzuki1_owners-wrap">
							<ul>
								<li>
									<a href="#">Warranty</a>
								</li>
								<li>
									<a href="#">Servicing</a>
								</li>
								<li>
									<a href="#">Vehicle Care</a>
								</li>
								<li>
									<a href="#">Motoring TIps</a>
								</li>
								<li>
									<a href="#">Genuine Parts</a>
								</li>
								<li>
									<a href="#">FAQ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-md-pull-9">
					<div class="suzuki1_widget suzuki1_vehicles-wrap">
						<a class="suzuki1_widget-title" href="#suzuki1_vehicles-wrap">Vehicles <i class='fa fa-chevron-right visible-xs'></i></a>
						<div id="suzuki1_vehicles-wrap">
							<ul>
								<li>
									<a href="#">Celerio</a>
								</li>
								<li>
									<a href="#">Swift</a>
								</li>
								<li>
									<a href="#">S-Cross</a>
								</li>
								<li>
									<a href="#">Jimny Sierra</a>
								</li>
								<li>
									<a href="#">Grand Vitara - 3 Door, 5 Door, Prestige, Urban, Diesel</a>
								</li>
								<li>
									<a href="#">Kizashi</a>
								</li>
								<li>
									<a href="#">APV</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Footer Below -->
		<div class="suzuki1_footer-below">
			<div class="container">
				<div class="col">
					<ul class="list-inline">
						<li>
							<a href="#">Site map</a>
						</li>
						<li>
							<a href="#">Terms</a>
						</li>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Careers</a>
						</li>
					</ul>
				</div>
				<div class="col">
					<a href="#"><img alt="Suzuki" class="suzuki1_footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/suzuki-footer-logo.png"></a>
				</div>
				<div class="col-right pull-right">
					<div class="col">
						<p class="suzuki1_copyright">&copy; 2015 Dealer Name Here</p>
					</div>
					<div class="col">
						<p class="suzuki1_developer-website">Dealer Website by <a href="#">Dealer Solutions</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
</body>
</html>
