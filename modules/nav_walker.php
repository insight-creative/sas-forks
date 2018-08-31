<?php

// A custom multi-level nav walker and a page walker

class Nav_Walker extends Walker_Nav_Menu {
  var $el_classes;

  function __construct($el_classes = array(
    'item_class' => NULL,
    'link_class' => NULL,
    'submenu_class' => NULL,
    'subitem_class' => NULL,
    'sublink_class' => NULL
  )) {
    $this->el_classes = $el_classes;
  }

  function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= sprintf(
      '<ul class="%s">',
      $this->el_classes['submenu_class']
    );
	}

  function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "</ul>";
	}

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $item_class = $this->el_classes['item_class'];
    $link_class = $this->el_classes['link_class'];
    if ( $depth > 0 ) {
      $item_class = $this->el_classes['subitem_class'];
      $link_class = $this->el_classes['sublink_class'];
    }
    $output .= sprintf(
      '<li class="%s"><a target="%s" class="%s %s" href="%s">%s</a>',
      $item_class,
      $item->target,
      implode(' ', $item->classes),
      $link_class,
      $item->url,
      $item->title
    );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>";
	}
}

class Page_Walker extends Walker_Page {
  var $el_classes;

  function __construct($el_classes) {
    $this->el_classes = $el_classes;
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<li class="%s"><a class="%s" href="%s">%s</a></li>',
      $this->el_classes[0],
      $this->el_classes[1],
      $item->guid,
      $item->post_title
    );
  }
}

?>
