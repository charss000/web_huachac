function mnky_sidebars() {
register_sidebar( array(
		'name' => __( 'Page Sidebar Cultura 2', 'care' ),
		'id' => 'cultura-sidebar2',
		'description' => __( 'Appears as default sidebar on pages', 'care' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
}