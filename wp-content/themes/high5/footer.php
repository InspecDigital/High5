		<footer class="footer" role="contentinfo">
			<div class="container">

			<div id="inner-footer" class="clearfix">
	          <div id="widget-footer" class="clearfix row">
	            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
	            <?php endif; ?>
	            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
	            <?php endif; ?>
	            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
	            <?php endif; ?>
	          </div>

				<nav class="clearfix">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>

				<!-- <p class="pull-right">
					<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
						<div class="input-group">
							<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>">
							<span class="input-group-btn">
				        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				      </span>
						</div>
					</form>
				</p> -->

				<div class="socialmedia">
					<a href="http://facebook.com" style="margin-right: 1em;" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a><a href="http://twitter.com" style="margin-right: 1em;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a><a href="http://youtube.com" style="margin-right: 1em;" target="_blank"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a><a href="http://instagram.com" style="margin-right: 1em;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>


				<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				</div>
			</div> <!-- end #inner-footer -->

		</div>

		</footer> <!-- end footer -->


	<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>