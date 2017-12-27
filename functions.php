<?php
function themeslug_enqueue_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery-slim.min.js', array(), '1.0.0', true );

}


add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );