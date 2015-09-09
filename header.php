<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage wpunify
 * @since wpunify 0.1
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<!-- Meta -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
	
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/one.style.css">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footers/footer-v7.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/pace/pace-flash.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen">
	<![endif]-->

	<!-- Style Switcher -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/theme-colors/default.css" id="style_color">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom.css">
    
	<!-- wordpress -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" <?php body_class('demo-lightbox-gallery'); ?>>

