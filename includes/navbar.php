<nav class="navbar">
  <div class="navbar-header">
    <a href="/"><img class="logo" src="<?php get_image_uri('sas-forks-logo3.png'); ?>" alt="SAS Forks"></a>
    <?php
      create_menu('main-menu', 2, 'navbar-nav', array(
        'item_class' => 'top-menu-item',
        'link_class' => 'b',
        'submenu_class' => 'submenu',
        'subitem_class' => '',
        'sublink_class' => ''
      ));
    ?>
    <span><a class="navbar-social white" href="https://twitter.com/sasforks" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
    <span class="navbar-toggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
  </div>
</nav>
