<?php

function load_file() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_file');

// The Excerpt
function get_excerpt_length() {
	return 5;
}

function return_excerpt_length() {
	return '';
}

add_filter('excerpt_length', 'get_excerpt_length');
add_filter('excerpt_more', 'return_excerpt_length');

function init_setup() {
	register_nav_menus([
		'main_menu' => 'Menu Utama',
		'footer_menu' => 'Menu Footer',
	]);

	// add featrued image
	add_theme_support('post-thumbnails');
	add_image_size('small_thumb', 150, 150, true);

	add_theme_support('post-formats', ['aside','gallery']);
}

add_action('after_setup_theme','init_setup');

function widget_setup() {
	register_sidebar([
		'name' => 'Sidebar Pertama',
		'id' => 'Sidebar1'
	]);
}

add_action('widgets_init','widget_setup');

?>