<?php

/**
 * Custom image size
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'sidebar-feature-post-thumb', 120, 68 );  
add_image_size( 'profile-picture', 250, 250 );  
add_image_size( 'gallery-thumb', 480, 480 );  


/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
  global $post;
  return '... <a class="more-tag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');