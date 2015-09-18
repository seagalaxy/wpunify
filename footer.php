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
	<!-- Footer Section -->
	<section id="footer" class="contacts-section" role="contentinfo">
		<?php get_sidebar( 'main' ); ?>
	</section><!-- #Footer -->
	
	<!-- JS Global Compulsory -->
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/smoothScroll.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery.easing.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/pace/pace.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery.parallax.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/counter/waypoints.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/counter/jquery.counterup.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<!-- JS Page Level-->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/one.app.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/forms/login.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/forms/contact.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/pace-loader.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/owl-carousel.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/revolution-slider.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
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
	    <script src="<?php bloginfo('template_url'); ?>/assets/plugins/respond.js"></script>
	    <script src="<?php bloginfo('template_url'); ?>/assets/plugins/html5shiv.js"></script>
	    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/placeholder-IE-fixes.js"></script>
	    <script src="<?php bloginfo('template_url'); ?>/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	    <script src="<?php bloginfo('template_url'); ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>