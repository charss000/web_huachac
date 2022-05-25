<?php
/*	
*	---------------------------------------------------------------------
*	MNKY Top bar sidebar
*	--------------------------------------------------------------------- 
*/
?>
<div id="top-bar-wrapper" class="clearfix">
	<div id="top-bar">
	
		<?php wp_nav_menu( array( 'theme_location' => 'infoTop', 'container_class' => 'menu-container-info', 'fallback_cb' => 'mnky_no_menu') ); ?>
		
	
	<?php if ( is_active_sidebar( 'top-left-widget-area' ) ) : ?>
			<div id="topleft-widget-area">
				<ul>
					<?php dynamic_sidebar( 'top-left-widget-area' ); ?>
				</ul>
			</div>
		<?php endif; ?>	
		
		<?php if ( is_active_sidebar( 'top-right-widget-area' ) ) : ?>
			<div id="topright-widget-area">
				<ul>
					<?php dynamic_sidebar( 'top-right-widget-area' ); ?>
				</ul>
				
			</div>
		<?php endif; ?>	
	
	
		

	</div>
</div>