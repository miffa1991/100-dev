<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// Register Custom Post Type
function custom_post_type_logo() {

	$labels = array(
		'name'                  => 'Логотипы',
		'singular_name'         => 'Логотипы',
		'menu_name'             => 'Логотипы',
		'add_new_item'          => 'Добавить логотип',
		'add_new'               => 'Добавить логотип',
		'new_item'              => 'Новый',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Просмотр',
		'view_items'            => 'Посмотреть все',
	);
	$rewrite = array(
		'slug'                  => 'logotype',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Логотипы',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'logotype',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'logotype', $args );

}
add_action( 'init', 'custom_post_type_logo', 0 );