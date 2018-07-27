<?php

function woo_custom_breadrumb_home_url() {
  return '/products';
}
add_filter('woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url');

function sasforks_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'sasforks_add_woocommerce_support' );

?>
