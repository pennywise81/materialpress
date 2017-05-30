<?php

function enqueue_styles() {
  wp_register_style(
    'all',
    get_stylesheet_directory_uri() . '/css/all.css',
    array(),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('all');

  /*
  wp_register_style(
    'basic-style',
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('basic-style');
  */
}
add_action('wp_enqueue_scripts', 'enqueue_styles');