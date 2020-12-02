<?php

// wp_enqueue_style( 'empatkali-styles', get_template_directory_uri().'/css/theme.css', array(), YOUR_THEME_VERSION );
function empatkali_register_styles() {
	wp_enqueue_style( 'fontawesome-styles', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css');
	wp_enqueue_style( 'empatkali-styles', get_template_directory_uri().'/assets/css/app.css');

	// home css
	/*if ( is_home() ) {
		wp_enqueue_style( 'empatkali-home-styles', get_template_directory_uri().'/assets/css/4x.web-home-1.0.css');
	}*/
}
add_action( 'wp_enqueue_scripts', 'empatkali_register_styles' );


add_theme_support( 'menus' );