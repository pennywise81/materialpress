
<!-- START OF FILE "templates/loop-page.php" -->
<?php

if (have_posts()) {
  while (have_posts()) {
    the_post();

    get_template_part('templates/post_open');
    get_template_part('templates/post_content');
    get_template_part('templates/post_comments');
    get_template_part('templates/post_close');
  }

  // https://codex.wordpress.org/Function_Reference/paginate_links
  global $wp_query;
  echo paginate_links(array());
}
else {
  _e('Sorry, no posts matched your criteria.');
}

?>
<!-- END OF FILE "templates/loop-page.php" -->