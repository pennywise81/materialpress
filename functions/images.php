<?php

// add post thumbnail support
add_action('after_setup_theme', function() {
  add_theme_support('post-thumbnails');
});

// add custom image sizes
function custom_image_sizes() {
  add_image_size('header', 1200, 300, true);
  add_image_size('thumbnail-big', 300, 300, true);

  update_option('medium_size_w', 560);
  update_option('medium_size_h', 0);

  update_option('large_size_w', 1024);
  update_option('large_size_h', 0);
}
add_action('after_setup_theme', 'custom_image_sizes');

// make the custom sizes chooseable
function image_size_names_choose($sizes) {
  $custom_sizes = array(
    'header' => __('Header'),
    'thumbnail-big' => __('Thumbnail Big')
  );

  return array_merge($sizes, $custom_sizes);
}
add_filter('image_size_names_choose', 'image_size_names_choose');















/*
add_action('admin_footer', 'test');
function test() {

  wp_enqueue_media();

  ?>

  <script>
    jQuery(document).ready(function($) {
      if (wp.media) {
        wp.media.controller.GalleryEdit.prototype.on('activate', function() {
          setTimeout(function() {
            $('.collection-settings.gallery-settings').append('<label class="setting"><span>Render as slider</span><input type="checkbox" id="btn_renderSlider"></label>');
          }, 200);
        });

        wp.media.controller.GalleryAdd.prototype.on('reset', function(e) {
          window.console && console.log($('#btn_renderSlider').val());
          $(document).trigger('gallery-add');
        });
      }

      $(document).on('gallery-add', function(e) {
        window.console && console.log(wp.media.controller);
      });
    });

  </script>

  <?php
}
*/