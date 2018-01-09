<?php
function style() {
	wp_enqueue_style( 'style', get_stylesheet_uri(),'style.css' );
}

add_action( 'wp_enqueue_scripts', 'style' );

function script() {
	wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'socket', get_template_directory_uri() . '/js/node_modules/socket.io-client/dist/socket.io.js', array(), '1.0.0', true );
	wp_enqueue_script( 'live-reload', get_template_directory_uri() . '/js/live-reload-client.js', array(), '1.0.0', true );
	wp_enqueue_script( 'all','https://use.fontawesome.com/releases/v5.0.2/js/all.js', array(), '1.0.0', true );
	
}

add_action( 'wp_enqueue_scripts', 'script' );
