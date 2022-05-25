</div><!-- #main  -->

<?php get_sidebar('footer'); ?>

<nav id="mobile-site-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
</nav><!-- #mobile-site-navigation -->

</div><!-- #wrapper -->

<?php if (ot_get_option('scroll_to_top_button') == 'on'){?>
<a href="#top" class="scrollToTop"><i class="fa fa-chevron-up"></i></a>

<?php } ?>	
    
<?php echo ot_get_option('code_before_body'); ?>
<?php wp_footer(); ?>
<?php include('icono.php'); ?> 
<!-- Compiled and minified JavaScript -->
<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	jQuery('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook
            next:true,
			autoCenter: true

	});
}


// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['<?php echo get_stylesheet_directory_uri() . '/js/visor/turn.js' ?>'],
	nope: ['<?php echo get_stylesheet_directory_uri() . '/js/visor/turn.html4.min.js' ?>'],
	both: ['<?php echo get_stylesheet_directory_uri() . '/css/assets/visor.css' ?>',
    '<?php echo get_stylesheet_directory_uri() . '/js/visor/zoom.js' ?>'],
	complete: loadApp
});
jQuery("#prev").click(function(e){
    e.preventDefault();
    oTurn.turn("previous");
});

jQuery("#next").click(function(e){
    e.preventDefault();
    oTurn.turn("next");
});
</script>
</body>
</html>