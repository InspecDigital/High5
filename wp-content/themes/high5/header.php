<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->

		<link href='https://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel='shortcut icon' href='/wp-content/themes/high5/images/favicon.ico' type='image/x-icon'/ >

		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

			<!-- respond.js -->
		<!--[if lt IE 9]>
		  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
			      <a class="navbar-brand" href="http://www.burgervilleworkersunion.org"><img class="img-responsive center-block" src="/wp-content/themes/high5/images/BWU-logo.png" alt="Burgerville Workers Union" /></a>
    			</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="about">About <span class="sr-only">(current)</span></a></li>
			        <li><a href="get-involved">Get Involved</a></li>
			        <li><a href="donate">Donate</a></li>
			        <li><a href="news">News</a></li>
			        <li><a href="contact">Contact</a></li>
			        <li><a href="http://iww.org" target="_blank">I.W.W.</a></li>
			      </ul>

			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

		<?php if(is_front_page()) { ?>

			<div class="container">
			<div class="col-md-1"></div>
				<div class="col-md-10 text-center">
					<h1 style="color: #ee352a; font-size: 4em; font-weight: 400!important; text-transform: uppercase;">We are the heart of Burgerville.</h1>
					<h1 style="color: #007fb5; font-size: 4.5em; font-weight: 700!important; text-transform: uppercase;">We are Burgerville workers.</h1>
				</div>
			<div class="col-md-1"></div>
			</div>

			<div class="hero container hero-container">
				<div class="hero-wrapper bg-color-primary">
					<div class="hero-content col-md-8">
						<h1><span style="font-size: 70%; margin-right: 0.2em;" class="glyphicon glyphicon-star" aria-hidden="true"></span>Our Vision</h1>
						<p style="line-height: 1em;">We want Burgerville to do right by their workers.  We want:</p>
							<ol>
							<li>$5.00/hour raise</li>
							<li>Safe and healthy workplace</li>
							<li>Better healthcare for all workers</li>
							<li>Paid maternity/paternity leave</li>
							<li>Fair and consistent scheduling with ample notice</li>
							<li>Bus passes</li>
							<li>Acceptance of the Union as a partner in improving Burgerville</li>
							</ol>
					</div>

					<div class="mailing-list col-md-4 text-center">
						<img class="img-responsive center-block" style="width: 80%; margin-top: 10%; margin-bottom: 10%;" src="/wp-content/themes/high5/images/BWU-logo.png" alt="Burgerville Workers Union" />
						<!-- <h2>Support our work</h2> -->
						<a href="get-involved" class="btn btn-default btn-lg cta-submit">Get involved!</a>
					</div>
				</div>
			</div>

		<div class="jumbotron">
			<div class="container">
			<div class="row jumbotron-bkgd">
				<div class="col-lg-1"></div>
			  	<div class="col-lg-10 col-md-12 col-xs-12">
				  	<p>The Burgerville Workers Union aims to deepen Burgerville’s commitment to the Pacific Northwest by making jobs at Burgerville the foundation of happy and healthy lives, and creating an independent way for Burgerville workers to connect to our communities.</p>
					<p>We have a vision for a Burgerville where workers raise families, save money while attending school, take ownership over our work, and engage creatively and critically in our region.</p>
					<p><strong style="font-family: 'Economica', sans-serif; font-size:1.4em;">We’re excited about it, and we hope you are too.</strong></p>
				</div>
				<div class="col-lg-1"></div>
			</div>
			</div>
		</div>

		<?php } ?>

		</header> <!-- end header -->
