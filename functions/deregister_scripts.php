<?php

function deregister_scripts() {
  wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'deregister_scripts');