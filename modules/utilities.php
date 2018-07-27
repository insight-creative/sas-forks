<?php

  function get_image_uri($image_name) {
    echo get_bloginfo('template_directory') . '/images/' . $image_name;
  }

  // A less verbose way to create Wordpress menus
  function create_menu($menu_location, $depth = 1, $menu_class, $item_classes) {
    return wp_nav_menu(
      array(
        'theme_location' => $menu_location,
        'container' => FALSE,
        'container_id' => FALSE,
        'menu_class' => $menu_class,
        'depth' => $depth,
        'walker' => new Nav_Walker($item_classes)
      )
    );
  }

?>
