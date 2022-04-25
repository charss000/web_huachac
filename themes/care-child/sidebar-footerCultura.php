<?php
/*	
*	---------------------------------------------------------------------
*	MNKY Footer sidebar
*	--------------------------------------------------------------------- 
*/
?>

<footer class="site-footer">
	<div class="wpb_row">

		<?php if ( is_active_sidebar( 'cultura-footer' )    ) : ?>
			<div class="footer-sidebar footer-sidebar-cultura ">
				<div class="row-inner footer-cultura">
				
<?php if ( ! dynamic_sidebar( 'cultura-footer' ) ) : ?>

				

			<?php endif; ?>
				

				

				
				</div><!-- .row-inner -->
			</div><!-- .footer-sidebar -->
		<?php endif; ?>	
		
		<?php if ( is_active_sidebar( 'copyright-widget-area' ) ) : ?>	
			<div class="site-info"> 
				<div class="row-inner">
					<?php dynamic_sidebar( 'copyright-widget-area' ); ?>
				</div>
			</div>	
		<?php endif; ?>	
		
	</div><!-- .wpb_row -->
</footer><!-- .site-footer -->