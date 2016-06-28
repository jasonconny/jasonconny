<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->
		<footer role="contentinfo">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'footer' ) ); ?>
			<p>Copyright &copy; <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 2000-2015</p>
		</footer><!-- footer -->

		<div id="modal">
			<div class="modal-content">
				<img>
				<div class="info">
					<h2></h2>
					<ul>
						<li class="materials"></li>
						<li class="dimensions"></li>
						<li class="year"></li>
					</ul>
				</div>
			</div>
			<nav class="modal-nav">
				<a href="#" class="previous">Previous</a>
				<a href="#" class="next">Next</a>
			</nav>
			<div class="count"></div>
		</div><!-- modal -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/wp-content/themes/jasonconny/_res/js/jquery-2.1.1.min.js"><\/script>')</script>
		<script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
		<script type="text/javascript" src="/wp-content/themes/jasonconny/_res/js/audiojs/audio.min.js?ver=1.0"></script>
		<script type="text/javascript" src="/wp-content/themes/jasonconny/_res/js/scripts.js?ver=0.2"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-2569982-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>

	</body>
</html>