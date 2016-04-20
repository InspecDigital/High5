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

			<nav class="navbar navbar-default" role="navigation">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
			      <a class="navbar-brand" href="http://www.burgervilleworkersunion.org"><img class="img-responsive center-block" src="/wp-content/themes/high5/images/BWU-logo-whitebkgd.png" alt="Burgerville Workers Union" /></a>
    			</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="about">About <span class="sr-only">(current)</span></a></li>
			        <li><a href="get-involved">Get Involved</a></li>
			        <li><a href="donate">Donate</a></li>
							<li>&nbsp;</li>
			        <li><a href="news">News</a></li>
			        <li><a href="contact">Contact</a></li>
			        <li><a href="http://iww.org" target="_blank">I.W.W.</a></li>
			      </ul>

			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

		<?php if(is_front_page()) { ?>

			<div class="container content">
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
							<li>A $5.00 raise for all hourly Burgerville workers</li>
							<li>Affordable, quality healthcare</li>
							<li>A safe and healthy workplace</li>
							<li>Fair and consistent scheduling with ample notice</li>
							<li>A supportive, sustainable workplace including paid maternity/paternity leave, free childcare and transportation stipends</li>
							<li>An independent organization for Burgerville workers</li>
							</ol>
					</div>

					<div class="mailing-list col-md-4 text-center">
						<img class="img-responsive center-block" style="width: 80%; margin-top: 10%; margin-bottom: 10%;" src="/wp-content/themes/high5/images/BWU-logo-blue.png" alt="Burgerville Workers Union" />
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
				  	<p><strong>We are fast food workers</strong> – mothers, fathers, students, grandparents. We are young and old. Everyday going into work, we're made to feel that we're at the bottom of the American economy. We make near minimum wage and struggle to make ends meet. People say, "It's fast food, what do you expect?" <strong>But no one should expect to live in poverty.</strong></p>
					<p>We formed our union because we matter, we work hard, we want respect, and we need a raise. We want to see the company do right by us, agree to a $5.00/hour raise, and listen to our voice.</p>
				</div>
				<div class="col-lg-1"></div>
			</div>
			</div>
		</div>

		<?php } ?>

		</header> <!-- end header -->
