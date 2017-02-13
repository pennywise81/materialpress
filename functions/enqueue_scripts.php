<?php

function enqueue_scripts() {
  /*
  wp_deregister_script('jquery');
  wp_register_script(
    'jquery',
    'https://code.jquery.com/jquery-3.1.1.min.js',
    array(),
    '3.1.1',
    true
  );
  wp_enqueue_script('jquery');

  wp_register_script(
    'tether',
    'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',
    array(),
    '1.4.0',
    true
  );
  wp_enqueue_script('tether');

  wp_register_script(
    'bootstrap',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',
    array(),
    '4.0.0-alpha.6',
    true
  );
  wp_enqueue_script('bootstrap');

  wp_register_script(
    'modernizr',
    'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
    array(),
    '2.8.3',
    true
  );
  wp_enqueue_script('modernizr');

  wp_register_script(
    'menu',
    get_stylesheet_directory_uri() . '/js/menu.js',
    array(),
    '1.0.0',
    true
  );
  wp_enqueue_script('menu');
  */

  wp_register_script(
    'all',
    get_stylesheet_directory_uri() . '/js/all.js',
    array(),
    '1.0.0',
    true
  );
  wp_enqueue_script('menu');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');