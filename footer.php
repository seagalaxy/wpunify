<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage wpunify
 * @since wpunify 0.1
 */
?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		
		    <!-- Contact Section -->
	<section id="contact" class="contacts-section">
		<div class="container content-lg">
		    <div class="title-v1">
			<h2>Contact Us</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
			It has been the industry's standard dummy text.</p>
		    </div>

		    <div class="row contacts-in">
			<div class="col-md-6 md-margin-bottom-40">
			    <ul class="list-unstyled">
				<li><i class="fa fa-home"></i> 5B Streat, City 50987 New Town US</li>
				<li><i class="fa fa-phone"></i> 1(800) 220 084</li>
				<li><i class="fa fa-envelope"></i> <a href="info@example.com">info@example.com</a></li>
				<li><i class="fa fa-globe"></i> <a href="http://htmlstream.com">www.htmlstream.com</a></li>
			    </ul>
			</div>

			<div class="col-md-6">
			    <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
				<fieldset>
				    <label>Name</label>
				    <div class="row">
					<div class="col-md-7 margin-bottom-20 col-md-offset-0">
					    <div>
						<input type="text" name="name" id="name" class="form-control">
					    </div>
					</div>
				    </div>

				    <label>Email <span class="color-red">*</span></label>
				    <div class="row">
					<div class="col-md-7 margin-bottom-20 col-md-offset-0">
					    <div>
						<input type="text" name="email" id="email" class="form-control">
					    </div>
					</div>
				    </div>

				    <label>Message</label>
				    <div class="row">
					<div class="col-md-11 margin-bottom-20 col-md-offset-0">
					    <div>
						<textarea rows="8" name="message" id="message" class="form-control"></textarea>
					    </div>
					</div>
				    </div>

				    <p><button type="submit" class="btn-u btn-brd btn-brd-hover btn-u-dark">Send Message</button></p>
				</fieldset>

				<div class="message">
				    <i class="rounded-x fa fa-check"></i>
				    <p>Your message was successfully sent!</p>
				</div>
			    </form>
			</div>
		    </div>
		</div>

		<div class="copyright-section">
			<p>2015 &copy; All Rights Reserved. Unify Theme by <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a></p>
			<ul class="social-icons">
				<li><a href="#" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
				<li><a href="#" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
				<li><a href="#" data-original-title="Goole Plus" class="social_googleplus rounded-x"></a></li>
				<li><a href="#" data-original-title="Pinterest" class="social_pintrest rounded-x"></a></li>
				<li><a href="#" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
			</ul>
			<span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span>
		</div>
	</section>
	<!-- End Contact Section -->
	
	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/jquery.easing.min.js"></script>
	<script src="assets/plugins/pace/pace.min.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/counter/waypoints.min.js"></script>
	<script src="assets/plugins/counter/jquery.counterup.min.js"></script>
	<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<!-- JS Page Level-->
	<script src="assets/js/one.app.js"></script>
	<script src="assets/js/forms/login.js"></script>
	<script src="assets/js/forms/contact.js"></script>
	<script src="assets/js/plugins/pace-loader.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/revolution-slider.js"></script>
	<script src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initParallaxBg();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			RevolutionSlider.initRSfullScreen();
		});
	</script>
	<!--[if lt IE 9]>
	    <script src="assets/plugins/respond.js"></script>
	    <script src="assets/plugins/html5shiv.js"></script>
	    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
	    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>