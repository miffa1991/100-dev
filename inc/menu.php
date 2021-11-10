<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

register_nav_menus( array(
	'menu-lang' => esc_html__( 'Языкове меню', 'miffka' ),
) );

add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
function filter_wp_menu_args( $args ) {

	if ( $args['theme_location'] === 'menu-lang') {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'lang-switcher';
	}

	return $args;
}