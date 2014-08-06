<?php

// What the theme supports
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

//Menu Locations
register_nav_menus(
	array(
		'Header_Nav' => 'Header Navigation Area',
		) 
	);

//Custom Post Types
function lawman_create_post_type() {
	register_post_type('casetypes', array(
		'labels' => array(
			'name' => __('Case Types'),
			'singular_name' => __('casetype')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'casetypes'),
		'supports' => array('title','editor','thumbnail'),
		)
	);
	register_post_type('press', array(
		'labels' => array(
			'name' => __('Press and Awards'),
			'singular_name' => __('press')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'press'),
		'supports' => array('title','editor','thumbnail', 'author'),
		)
	);
}
add_action('init', 'lawman_create_post_type');



//Remove Featured Image Attributes

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

function custom_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>