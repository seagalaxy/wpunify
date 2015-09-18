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
	<!--
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
	-->
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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	
	<?php wp_head(); ?>
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" <?php body_class('demo-lightbox-gallery'); ?>>
    <!--=== Header ===-->
    <nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#intro">
                    <span><?php bloginfo( 'name' ); ?></span>
                    <!-- <img src="assets/img/logo1.png" alt="Logo"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php 
		    wp_nav_menu(array( 
			'menu' => '', 
			'container' => 'div', 
			'container_class' => 'menu-container', 
			'container_id' => 'menu-container', 
			'menu_class' => '', 
			'menu_id' => 'navbar-nav',
			'echo' => true, 
			'fallback_cb' => 'wp_page_menu', 
			'before' => '', 
			'after' => '', 
			'link_before' => '', 
			'link_after' => '', 
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0, 
			'walker' => '', 
			'theme_location' => ''
		    )); 
		?>
                <div class="menu-container" style="display:none;">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll home">
                            <a href="#body">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About Us</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#services">Services</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#news">News</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Submenu
                            </a>
                            <ul class="dropdown-menu">
                                <li class="page-scroll"><a href="#body">Home</a></li>
                                <li class="page-scroll"><a href="#about">About Us</a></li>
                                <li class="page-scroll"><a href="#services">Services</a></li>
                                <li class="page-scroll"><a href="#news">News</a></li>
                                <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
                                <li class="page-scroll"><a href="#contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="page-scroll">
                            <a href="../index.html">Main</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->

