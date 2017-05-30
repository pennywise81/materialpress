<?php

function enqueue_scripts() {
  /*
  wp_deregister_script('jquery');
  wp_register_script(
    'jquery',
    get_stylesheet_directory_uri() . '/js/jquery.js',
    array(),
    '3.1.1',
    true
  );
  wp_enqueue_script('jquery');
  */

  /*
  wp_register_script(
    'tether',
    get_stylesheet_directory_uri() . '/js/tether.js',
    array(),
    '1.4.0',
    true
  );
  wp_enqueue_script('tether');
  */

  /*
  wp_register_script(
    'modernizr',
    'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
    array(),
    '2.8.3',
    true
  );
  wp_enqueue_script('modernizr');
  */

  wp_register_script(
    'all',
    get_stylesheet_directory_uri() . '/js/all.js',
    array(),
    '1.0.0',
    true
  );
  wp_enqueue_script('all');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');