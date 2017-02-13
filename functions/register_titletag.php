<?php

function register_titletag() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'register_titletag');