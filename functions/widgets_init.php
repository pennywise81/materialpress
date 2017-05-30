<?php

function widgets_init() {
  register_sidebar(array(
  'name' => __('Sidebar'),
    'id' => 'sidebar',
    'description' => __('Right hand sidebar'),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}

add_action('widgets_init', 'widgets_init');