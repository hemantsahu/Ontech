<?php
// Theme Functions Code

function project_template_scripts() {

  wp_enqueue_style('style', get_stylesheet_uri());
  
}

add_action('wp_enqueue_scripts', 'project_template_scripts');

?>