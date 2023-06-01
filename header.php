<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ruby - Responsive Corporate Tempalte</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/header-logo1.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slicknav.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate-text.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
		
		<!-- Ruby CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
		
		<!-- Color CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/color/color7.css">


		<link rel="stylesheet" href="#" id="colors">
		<?php wp_head();?>
    </head>
    <body>
	
		<div class="color-plate ">
			<a class="icon"><i class="fa fa-cog fa-spin"></i></a>
			<h2>Ruby Color</h2>
			<div class="color-head">
				<span class="color1"></span>
				<span class="color2"></span>
				<span class="color3"></span>
				<span class="color4"></span>
				<span class="color5"></span>
				<span class="color6"></span>
				<span class="color7"></span>
				<span class="color8"></span>
				<span class="color9"></span>
			</div>
		</div>
		
		<!-- Header Area -->
		<header id="header" class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-2">
							<div class="logo">
								<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo.png"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
                                    <li class="current"><a href="<?php echo get_template_directory_uri(); ?>/home">home</a></li>
                                    <li><a href="#Services">Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/portfolio">Portfolio</a></li>
										<li><a href="#team">Team</a></li>
										<li><a href="#contact">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header Area -->