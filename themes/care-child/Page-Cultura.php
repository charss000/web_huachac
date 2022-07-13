<?php
/**
 * Template Name: Content / Cultura Sidebar
 */
?>
<?php
get_header( 'cultura' );
$sliders = getSlider();
?>





<div class="site-block-wrap" id="portada-section">
<div  id='slider_carrucel_cultura' class='owl-carousel slider_cultura'>

<?php foreach ($sliders as $item) { ?>

	<div id="slider-<?php echo $item['ID']; ?>"
		 class="site-blocks-cover slider "
		 style="background-image: url(<?php echo $item['image_full'][0] ?>);"
		 data-aos="fade">
		 <span class="esquin_right"></span>
		 <span class="esquin_top_left"></span>
		 <span class="esquin_booton"></span>
		 <div class="overlay-bg ">
		 <span class='overlay-left-bg'><span>
         <span class='esquin_slider'></span>
		 
		 </div>
		
		<div class="container">
		
			<div class="row ">
		
				<div class="col-md-12 mt-lg-5 cont-tex">

				
					<h1 class="slider-title text-shadow animated fadeInRight"><?php echo $item['slider_title']; ?></h1>
					<div class="slider-description mb-5 text-shadow"><?php echo $item['slider_description']; ?></div>
					<?php if ($item['slider_url']) : ?>
						<p>
							<a href="<?php echo $item['slider_url']; ?>" target="_blank" class="btn btn-slider px-5 py-3">
								<?php echo $item['slider_btn']; ?>
							</a>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
					</div>
</div> 
 
<div id="container" class="no-sidebar">
			<div id="content">
			

				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					<div class="entry-content clearfix">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article>

				<?php if (ot_get_option('page_comments') != 'off') {
					echo '<div class="row-inner"><div class="vc_span12 wpb_column column_container">';
						comments_template( '', true );
					echo '</div></div>';
				} ?>
				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #conta
		
<?php get_footer('cultura'); ?>