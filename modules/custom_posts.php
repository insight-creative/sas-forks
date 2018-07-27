<?php

// Example template for creating custom post types

function create_custom_posts() {
  register_post_type( 'sasforks_distributor',
    array(
      'labels' => array(
        'name' => __( 'Distributors' ),
        'singular_name' => __( 'Distributor' ),
        'all_items' => __( 'All Distributors' ),
        'view_item' => __( 'View Distributor' ),
        'add_new_item' => __( 'Add New Distributor' ),
        'edit_item' => __( 'Edit Distributor' ),
        'update_item' => __( 'Update Distributor' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'contact'),
			'menu_icon' => 'dashicons-phone',
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );
}

add_action( 'init', 'create_custom_posts' );

?>
