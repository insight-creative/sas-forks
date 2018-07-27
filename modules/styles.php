<?php

// Load fonts and styles into theme

// If loading fonts from Google Fonts or Typekit, put URL here
$font_url = null;

// If you want to use Tachyons flip this to true! Go get the newest version if you want and paste it below in the Tachyons wp_enqueue_style.
$tachyons = false;

// Gets the theme version and automatically appends it to the stylesheet url
$theme = wp_get_theme();
$version = $theme->get('Version');

function theme_styles() {

  if ($tachyons) {
    wp_enqueue_style( 'tachyons', 'https://unpkg.com/tachyons@4.9.0/css/tachyons.min.css');
  }

  if ($font_url) {
    wp_enqueue_style( 'fonts', $font_url);
  }

  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
