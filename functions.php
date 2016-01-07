<?php

add_theme_support('post-thumbnails');

function b2w_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.css' );
}

add_action('wp_enqueue_scripts', 'b2w_theme_styles');

function b2w_theme_js() {
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
	wp_enqueue_script( 'scrolling_js', get_template_directory_uri() . '/js/scrolling.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'b2w_theme_js');


?>