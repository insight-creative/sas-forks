<?php

// Load fonts and styles into theme
function theme_styles() {

  // If loading fonts from Google Fonts or Typekit, put URL here
  $font_url = 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i,800,800i';

  // Gets the theme version and automatically appends it to the stylesheet url
  $theme = wp_get_theme();
  $version = $theme->get('Version');

  if ($font_url) {
    wp_enqueue_style( 'fonts', $font_url);
  }

  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
