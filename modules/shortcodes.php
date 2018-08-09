<?php
  function button_icon_shortcode( $atts, $content = null ) {
  	return '<a class="btn btn-primary" href="'. $atts['link'] . '" class="caption"><i class="fa ' . $atts['icon'] . '"></i> ' . $content . '</a> ';
  }
  add_shortcode( 'button_icon', 'button_icon_shortcode' );

  function row_shortcode( $atts, $content = null ) {
  	return '<div class="row">' . do_shortcode($content) . '</div>';
  }
  add_shortcode( 'row', 'row_shortcode' );

  function column_shortcode( $atts, $content = null ) {
  	return '<div class="col-50">' . do_shortcode($content) . '</div>';
  }
  add_shortcode( 'column', 'column_shortcode' );
?>
