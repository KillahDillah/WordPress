<?php 

function learnWordPress(){
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learnWordPress');

//Nav menus//

register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));

// Get top ancestor

function get_top_ancestor_id(){
  global $post;
  if($post->post_parent) {
    $ancestors= array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0]
  } else

  return $post->ID;
} 
// return most recent ancestor page relative to the child page. if viewing parent page, show itself, if viewing child, show parent.