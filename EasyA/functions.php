<?php

function easya_scripts() {

	wp_enqueue_style ('customstyle-css', get_template_directory_uri() . '/css/my.css', array(), '1', 'all');
	wp_enqueue_style ('customstyle-css', get_template_directory_uri() . '/css/my.css', array(), '1', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/my.js', array(), '1', true);
}						

add_action('wp_enqueue_scripts', 'easya_scripts');

function easya_theme_setup() {

	add_theme_support('menus'); 

	register_nav_menu( 'primary', 'Primary header navigation' );
}

add_action('init', 'easya_theme_setup');
