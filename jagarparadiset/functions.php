<?php

function jap_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function jap_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', $dependencies, '', true );
}

function enqueue_load_fa() {
 
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}


add_action( 'wp_enqueue_scripts', 'jap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'jap_enqueue_scripts' );

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

function jap_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'jap_wp_setup' );
?>
