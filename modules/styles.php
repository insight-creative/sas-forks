<?php

// Load fonts and styles into theme

// If loading fonts from Google Fonts or Typekit, put URL here
$font_url = 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i';

// Gets the theme version and automatically appends it to the stylesheet url
$theme = wp_get_theme();
$version = $theme->get('Version');

function theme_styles() {

  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

  if ($font_url) {
    wp_enqueue_style( 'fonts', $font_url);
  }

  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
