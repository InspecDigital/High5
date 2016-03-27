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

			<div class="navbar navbar-default navbar-fixed-top">

				<div class="container">

					<div class="navbar-header">

						<a class="navbar-brand" href="#">
					        <!-- <img class="img-responsive" alt="Brand" src="wp-content/themes/high5/images/BWU-logo.png"> -->
					    </a>

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						<?php wp_bootstrap_secondary_nav(); // Adjust using Menus in Wordpress Admin ?>
						<!-- <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="input-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>">
								<span class="input-group-btn">
					        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					      </span>
							</div>
						</form> -->
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->

		<?php if(is_front_page()) { ?>

			<div class="container banner-brand">
			<div class="col-md-1"></div>
				<div class="col-md-10 text-center">
					<h1 style="color: #ee352a; font-size: 4em; font-weight: 400!important; text-transform: uppercase;">We are the heart of Burgerville.</h1>
					<h1 style="color: #007fb5; font-size: 4.5em; font-weight: 700!important; text-transform: uppercase;">We are Burgerville workers.</h1>
				</div>
			<div class="col-md-1"></div>
			</div>

<div class="jumbotron">
  <p>The Burgerville Workers Union aims to deepen Burgerville’s commitment to the Pacific Northwest by making jobs at Burgerville the foundation of happy and healthy lives, and creating an independent way for Burgerville workers to connect to our communities.</p>
  <p>We have a vision for a Burgerville where workers raise families, save money while attending school, take ownership over our work, and engage creatively and critically in our region.</p>
  <p><strong>We’re excited about it, and we hope you are too.</strong></p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>

			<div class="hero container hero-container">
				<div class="hero-wrapper bg-color-primary">
					<div class="hero-content col-md-8">
						<h1>Our Vision</h1>
						<p>We want BV to do right by their workers, invest in them, and listen to them.  We want:</p>
							<ol>
							<li>$5 raise</li>
							<li>Safe and healthy workplace</li>
							<li>Better healthcare for all workers</li>
							<li>Paid Maternity/Paternity leave</li>
							<li>Fair and consistent scheduling with ample notice</li>
							<li>Bus passes</li>
							<li>Acceptance of the Union as a partner in improving Burgerville</li>
							</ol>

						<p>There are lots of ways to connect and support our work. <a href="get-involved">Get involved today!</a></p>
					</div>

					<div class="mailing-list col-md-4 text-center">
						<h2>Interested?</h2>
						<a href="/?page_id=20" class="btn btn-default btn-lg cta-submit">Get in touch</a>
					</div>
				</div>
			</div>
		<?php } ?>

		</header> <!-- end header -->