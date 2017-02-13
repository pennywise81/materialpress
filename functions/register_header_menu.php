<?php

function register_header_menu() {
  register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_header_menu');