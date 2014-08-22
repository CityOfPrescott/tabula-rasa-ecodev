<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->


	</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="cop_footer">
		<div class="footer_inner">
			<p class="logo"><a href="http://www.cityofprescott.net/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Prescott Municipal Airport" /></a></p>
			<div class="cop_menu">
				<ul>
					<li><a href="http://www.cityofprescott.net/visitors/">Visitors</a></li>
					<li><a href="http://www.cityofprescott.net/services/">City Services</a></li>
					<li><a href="http://www.cityofprescott.net/history/">History</a></li>
					<li><a href="http://www.cityofprescott.net/business/">Business</a></li>
					<li><a href="http://www.cityofprescott.net/leadership/">City Leadership</a></li>
					<li><a href="http://www.cityofprescott.net/documents/">Documents</a></li>
					<li><a href="http://www.cityofprescott.net/contact/">Contact Us</a></li>
				</ul>
			</div><!-- .site-info -->
		</div>	
	</div>	
	<header id="masthead" class="site-header" role="banner">
		<div class="inner-header">
			<div class="site-branding">
				<a href="#my-menu" class="mobile-menu"><img src="<?php echo bloginfo('template_url'); ?>/images/navicon_25.png" /></a>	
				<!--
				<p class="logo"><a href="http://www.cityofprescott.net/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Prescott Municipal Airport" /></a></p>
				-->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="my-menu" class="main-navigation" role="navigation">
				<?php tr_main_nav(); ?>
			</nav><!-- #site-navigation -->
		</div>
		<div class="banner">
			<div class="inner-banner">
				<?php if ( !is_front_page() ) { ?>
				<h2><?php echo get_the_title(); ?></h2>
				<?php } ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">