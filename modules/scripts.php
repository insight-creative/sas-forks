<?php

// Load scripts into theme

function theme_scripts() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery' ), null, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>
