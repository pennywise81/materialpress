<?php get_header(); ?>

<!-- https://www.npmjs.com/package/hamburgers -->
<nav class="menu-main">
  <div class="menu-title">
    <a href="#">menu</a>
  </div>
  <div class="menu-items">
<?php

if (has_nav_menu('header-menu')) {
  wp_nav_menu(array(
    'theme_location' => 'header-menu'
  ));
} else {
  wp_page_menu(array('show_home' => true));
}

?>
  </div>
</nav>

<?php

if (have_posts()) {
  while (have_posts()) {
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="post-title">
        <?php the_title(sprintf('<h2><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
      </div>

      <div class="post-meta">
        <?php _e('Written by'); ?>
        <?php the_author('display_name'); ?>
        <?php _e('on'); ?>
        <?php the_time(get_option('date_format')); ?>
        <?php _e('in'); ?>
        <?php the_category(', ') ?>
        <?php edit_post_link(__('Edit post'), '<nobr>[', ']</nobr>'); ?>
      </div>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <div class="post-comments">
        <?php if (comments_open() || get_comments_number()) comments_template(); ?>
      </div>

    </article>
    <?php
  }

  // https://codex.wordpress.org/Function_Reference/paginate_links
  global $wp_query;
  echo paginate_links(array());
}
else {
  _e('Sorry, no posts matched your criteria.');
}

?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>