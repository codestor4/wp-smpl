<?php

// CSS
function ob_load_css() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
	wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'ob_load_css');

// JS
function ob_load_js() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
	wp_enqueue_script( 'bootstrapjs' );
}
add_action( 'wp_enqueue_scripts', 'ob_load_js' );

// OPTIONS
add_theme_support( 'menus' );

// MENUS
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'other-menu' => 'Other Menu Location',
	)
);