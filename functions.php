<?php
  add_theme_support(
    'html5', array(
      'gallery',
      'caption',
    )
  );
  add_theme_support(
    'post-formats', array(
      'gallery'
    )
  );
  require_once('modules/styles.php');
  require_once('modules/scripts.php');
  require_once('modules/utilities.php');
  require_once('modules/menus.php');
  require_once('modules/nav_walker.php');
  require_once('modules/custom_posts.php');
  require_once('modules/shortcodes.php');
  require_once('modules/blog_links.php');
  require_once('modules/woocommerce.php');
?>
