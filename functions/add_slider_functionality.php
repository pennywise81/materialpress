<?php

add_filter('post_gallery', function($html, $attr, $instance) {
  $html = $html . '<!-- SUPER SEXY GALLERY -->';
  return $html;
}, 10 ,3);