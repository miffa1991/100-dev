<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function miffka_styles() {
	
	wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/assets/css/vendors/swiper/swiper.min.css', array() , null, 'all');
	wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() . '/assets/css/vendors/fancybox/jquery.fancybox.min.css', array() , null, 'all');
	wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri() . '/assets/css/vendors/animate.min.css', array() , null, 'all');
	wp_enqueue_style( 'mifka-style-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array() , null, 'all');
	wp_enqueue_style( 'miffka-style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom-miffka-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', array() , null, 'all');
	
}
add_action( 'wp_enqueue_scripts', 'miffka_styles' );

function miffka_scripts() {

	wp_enqueue_script( 'miffka-smoothScroll', get_template_directory_uri() . '/assets/js/smoothScroll.js', 'jquery', '20151215', true );
	wp_enqueue_script( 'miffka-fancybox', get_template_directory_uri() . '/assets/js/fancybox/jquery.fancybox.min.js', 'jquery', '20151215', true );
	wp_enqueue_script( 'miffka-wow', get_template_directory_uri() . '/assets/js/wow.js', 'jquery', '20151215', true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array('jquery'), null, true );
	wp_enqueue_script( 'custom-miffka-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
	wp_enqueue_script('ajax-quick' , get_template_directory_uri() . '/assets/js/ajax-quick-veiw.js', array('jquery'), '20151215', true);
	wp_localize_script('ajax-quick', 'ajax_quick' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('quick-nonce')
	));
}
add_action( 'wp_enqueue_scripts', 'miffka_scripts' );


/**
 * Enqueue admin scripts.
 */
function my_admin_enqueue_scripts() {
	wp_enqueue_style(
		 'admin',
		 get_stylesheet_directory_uri() . '/assets/css/admin.css',
		 [],
		 '1.0'
	);
}
add_action( 'admin_enqueue_scripts', 'my_admin_enqueue_scripts' );