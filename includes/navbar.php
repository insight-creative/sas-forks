<nav class="navbar">
  <div class="navbar-header">
    <a href="/"><img class="logo" src="<?php get_image_uri('sas-forks-logo3.png'); ?>" alt="SAS Forks"></a>
    <span class="navbar-toggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
  </div>
  <?php
    create_menu('main-menu', 2, 'navbar-nav', array(
      'item_class' => '',
      'link_class' => 'b',
      'submenu_class' => '',
      'subitem_class' => '',
      'sublink_class' => ''
    ));
  ?>
</nav>
