<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}

add_filter('excerpt_more', function($more) {
	return ' ';
});

add_filter( 'excerpt_length', function(){
	return 20;
} );

// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false');
//remove tag p in excerpt
remove_filter( 'the_excerpt', 'wpautop' );

//add acf shortcode
add_filter('acf/format_value/type=text', 'do_shortcode');