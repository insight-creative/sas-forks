<?php

// Load scripts into theme

function theme_scripts() {

	// Gets the theme version and automatically appends it to the stylesheet url
	$theme = wp_get_theme();
	$version = $theme->get('Version');

	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js?v=2', array( 'jquery' ), $version, true);
	wp_enqueue_script('font-awesome-kit', 'https://kit.fontawesome.com/452163bde0.js');

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>
