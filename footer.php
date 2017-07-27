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


	<footer class="suzuki1_footer">
		<div class="container">
			<!-- Footer Up -->
			<div class="suzuki1_footer-up row">
				<?php dynamic_sidebar( 'footer-widget-up' ); ?>
			</div>
		</div><!-- Footer Below -->
		<div class="suzuki1_footer-below">
			<div class="container">
				<div class="col">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
							'container'      => 'ul',
							'menu_class' => 'list-inline'
						) );
					?>
				</div>

				<div class="col">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img alt="Suzuki" class="suzuki1_footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/suzuki-footer-logo.png">
					</a>
				</div>

				<div class="col-right pull-right">
				  <div class="col">
				    <p class="suzuki1_copyright">&copy; 2015 <?php bloginfo( 'name' ); ?></p>
				  </div>
				  <div class="col">
				    <p class="suzuki1_developer-website"><?php bloginfo( 'name' ); ?> Website by <a href="http://www.dealersolutions.com.au">Dealer Solutions</a></p>
				  </div>
				</div>

			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
