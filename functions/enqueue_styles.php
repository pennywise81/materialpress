<?php

function enqueue_styles() {
  /*
  wp_register_style(
    'basic-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('bootstrap'),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('basic-style');

  wp_register_style(
    'menu',
    get_stylesheet_directory_uri() . '/css/menu.css',
    array('basic-style'),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('menu');

  wp_register_style(
    'bootstrap',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css',
    array(),
    '4.0.0-alpha.6',
    'all'
  );
  wp_enqueue_style('bootstrap');
  */

  wp_register_style(
    'all',
    get_stylesheet_directory_uri() . '/css/all.css',
    array(),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('all');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');