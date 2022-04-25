<?php
/**
 * Template Name: Content / Documentos Sidebar
 */
?>

<?php get_header(); ?>

		<div id="container" class="row-inner">
			<div id="content" class="float-right">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'care' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php if (ot_get_option('page_comments') != 'off') {
					comments_template( '', true );
				} ?>
			
			</div><!-- #content -->

			<div id="sidebar" class="float-left">
<div class="page-sidebar">
			<div class="widget-area">
				<?php if ( ! dynamic_sidebar( 'documentos-sidebar' ) ) : ?>

					<aside id="archives" class="widget" role="complementary">
						<h3 class="widget-title"><?php _e( 'Archives', 'care' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget" role="complementary">
						<h3 class="widget-title"><?php _e( 'Meta', 'care' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<aside role="complementary"><?php wp_loginout(); ?>
						
							</aside>
							<?php wp_meta(); ?>
						</ul>
					</aside>

			<?php endif; ?>
			</div>
				
	</div>
			</div>
	<!--contenido footer -->
			<div id="content" class="float-right">
					<div class="widget-area footer-documentos">
				<?php if ( ! dynamic_sidebar( 'documentos-footer' ) ) : ?>

					<aside id="archives" class="widget" role="complementary">
						<h3 class="widget-title"><?php _e( 'Archives', 'care' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget" role="complementary">
						<h3 class="widget-title"><?php _e( 'Meta', 'care' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<aside role="complementary"><?php wp_loginout(); ?>
						
							</aside>
							<?php wp_meta(); ?>
						</ul>
					</aside>

			<?php endif; ?>
			</div>
				</div>
			<!--fin contenido Footer-->
		</div><!-- #container -->
		
<?php get_footer(); ?>