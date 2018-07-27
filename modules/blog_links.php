<?php

// Edit blog pagination and excerpt more button styles

function posts_link_attributes() {
  return 'class=""';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function new_excerpt_more( $more ) {
	return '... <a class="" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>
