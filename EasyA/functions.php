<?php

function easya_scripts() {


	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', false, '4.0.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', false, '4.7.0' );
	wp_enqueue_style ('custom-css', get_template_directory_uri() . '/assets/css/easya.css', array(), '1', 'all');


	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	
	
	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/my.js', array(), '1', true);
	

}						

add_action('wp_enqueue_scripts', 'easya_scripts');

function easya_theme_setup() {

	add_theme_support('menus'); 

	register_nav_menu( 'primary', 'Primary header navigation' );
}

add_action('init', 'easya_theme_setup');
