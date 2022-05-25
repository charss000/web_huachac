<?php

function enqueue_styles_child_theme() {

	$parent_style = 'care-style';
	$child_style  = 'care-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );


function custom_enqueue_styles() {
	wp_enqueue_style( 'custom-style', 
			get_stylesheet_directory_uri() . '/css/TemaEstilo.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

function estilo_header_styles() {
	wp_enqueue_style( 'header-style', 
			get_stylesheet_directory_uri() . '/css/header.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'estilo_header_styles');

function estilo_footer_styles() {
	wp_enqueue_style( 'footer-style', 
			get_stylesheet_directory_uri() . '/css/footer.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'estilo_footer_styles');

function estilo_sweetAlert_styles() {
	wp_enqueue_style( 'sweetAlert-style', 
			get_stylesheet_directory_uri() . '/css/assets/sweetAlert.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'estilo_sweetAlert_styles');


function estilo_iconos_styles() {
	wp_enqueue_style( 'iconos-style', 
			get_stylesheet_directory_uri() . '/css/assets/IonosMedia.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'estilo_iconos_styles');
function estilo_page_styles() {
	wp_enqueue_style( 'page-style', 
			get_stylesheet_directory_uri() . '/css/page.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
}
add_action( 'wp_enqueue_scripts', 'estilo_page_styles');




function mpw_create_widget(){
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget_social.php');
    register_widget('mpw_widget');
}
add_action('widgets_init','mpw_create_widget');
// Incluir Animate CSS
function animate_css() {
	wp_enqueue_style( 'animate_css', 
  					'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'animate_css');
// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://cdn.jsdelivr.net/npm/sweetalert2@10.12.7/dist/sweetalert2.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');
// Incluir Libreria de pdf
/*function pdf_lib() {
	wp_enqueue_style( 'pdf_lib', 
  					'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'pdf_lib');*/

// Incluir sweetalert y dependencia popper
function bootstrap_js() {

	wp_enqueue_script( 'bootstrap_js', 
  					'https://cdn.jsdelivr.net/npm/sweetalert2@10.12.7/dist/sweetalert2.all.min.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');
//  incluuir  carrucel  js
function carrucel_js() {

	wp_enqueue_script( 'carrucel_js', 
  					'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', 
  					array('jquery'), 
  					'2.3.4', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'carrucel_js');
// Incluir carrucel  CSS
function carrucel_css() {
	wp_enqueue_style( 'carrucel_css', 
  					'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', 
  					array(), 
  					'2.3.4'
  					); 
}
add_action( 'wp_enqueue_scripts', 'carrucel_css');


function enqueue_styles_alcalde() {



    wp_enqueue_style( 'enqueue_styles', get_stylesheet_directory_uri() . '/css/pages/alcalde.css' );
   
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_alcalde' );
function main_insertar_js(){
    
    wp_register_script('main_js', get_stylesheet_directory_uri(). '/js/main.js',
    array('jquery'), '1', true );
    wp_enqueue_script('main_js');
    
}
add_action("wp_enqueue_scripts", "main_insertar_js");



	
	function doc_insertar_js(){
    if (is_page( array( 'normas-emitidas','resoluciones' ,'acuerdos-municipales' ) ) ) {
    wp_register_script('doc_js', get_stylesheet_directory_uri(). '/js/documentos.js',
    array('jquery'), '1', true );
    wp_enqueue_script('doc_js');
    
   }

  }
add_action("wp_enqueue_scripts", "doc_insertar_js");
  
 

function doc_gestion_js(){
   if (is_page( 1948 ) ) {
    wp_register_script('doc_ges_js', get_stylesheet_directory_uri(). '/js/DocGestion.js',
    array('jquery'), '1', true );
    wp_enqueue_script('doc_ges_js');
    
   }

  }
add_action("wp_enqueue_scripts", "doc_gestion_js");
// script de pagina cultura
function cultura_js(){
   //if (is_page( 2347 ) ) {
    wp_register_script('cultura_js', get_stylesheet_directory_uri(). '/js/cultura.js',
    array('jquery'), '1', true );
    wp_enqueue_script('cultura_js');
    
  // }

  }
add_action("wp_enqueue_scripts", "cultura_js");
/*inicio esitlo*/
function estilo_cultura_styles() {
	 if (is_page( 2347 ) ) {
	wp_enqueue_style( 'cultura-style', 
			get_stylesheet_directory_uri() . '/css/cultura.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
	 }
}
add_action( 'wp_enqueue_scripts', 'estilo_cultura_styles');

// fiin page cultura
/*inicio esitlo inicial*/
function estilo_home_styles() {
	 if (is_front_page() ) {
	wp_enqueue_style( 'home-style', 
			get_stylesheet_directory_uri() . '/css/home.css', 	 
			array(), 
			wp_get_theme()->get('Version')
			);
	 }
}
add_action( 'wp_enqueue_scripts', 'estilo_home_styles');

// fiin page Inicio
function dcms_insertar_js(){
   if ( is_front_page() ) { 
    wp_register_script('miscript', get_stylesheet_directory_uri(). '/js/app.js',
    array('jquery'), '1', true );
    wp_enqueue_script('miscript');
    } 
}
add_action("wp_enqueue_scripts", "dcms_insertar_js");


function enqueue_javascript_home() {

if ( is_front_page() ) {

    wp_enqueue_script( 'enqueue_javascript_home', get_stylesheet_directory_uri() . '/js/inicio.js' );
	
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript_home');

// cargar solo funciones de tramite



function enqueue_javascript_Tramite() {
	if ( is_front_page() ) {
		 wp_register_script('Tramite_js', get_stylesheet_directory_uri(). '/js/tramite.js',
    array('jquery'), '1', true );
    wp_enqueue_script('Tramite_js');
 
	
    }
	
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript_Tramite');

function enqueue_javascript_Eventos() {
	if ( is_front_page() ) {
		 wp_register_script('Eventos_js', get_stylesheet_directory_uri(). '/js/eventos.js',
    array('jquery'), '1', true );
    wp_enqueue_script('Eventos_js');
 
	
    }
	
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascript_Eventos');



// fin carga tramites

function wp_trim_all_excerpt($text) {
global $post;
   $raw_excerpt = $text;
   if ( '' == $text ) {
      $text = get_the_content('');
      $text = strip_shortcodes( $text );
      $text = apply_filters('the_content', $text);
      $text = str_replace(']]>', ']]&gt;', $text);
   }
 
$text = strip_tags($text);
$excerpt_length = apply_filters('excerpt_length', 20);
$excerpt_more = apply_filters('excerpt_more', ' ' . ' [...]');
$text = wp_trim_words( $text, $excerpt_length, $excerpt_more ); 
 
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt); 
}
 
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');
//realizando un nuevo sidebarTransparecia
//<--insercion de nuevos menus --->
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
			'secundario' => __( 'Main Navigation right', 'care' ),
			
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}



