<!-- START OF FILE "templates/menu.php" -->
<?php get_template_part('templates/container_open', 'block'); ?>
<nav class="menu menu--open">
  <div class="menu__head">

    <!-- <a class="menu__btn-home" href="<?php echo home_url(); ?>">
      <span class="menu__title"><?php echo get_bloginfo('name'); ?></span>
    </a> -->

    <button class="menu__btn-toggle hamburger hamburger--squeeze is-active" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

  </div>
  <div class="menu__items">
<?php

if (has_nav_menu('header-menu')) {
  // defined menu from 'Appearance' > 'Menus'
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'container_class' => 'menu__items__wrapper'
  ));
} else {
  // default menu of all pages including home
  wp_page_menu(array(
    'show_home' => true,
    'menu_class' => 'menu__items__wrapper'
  ));
}

?>
  </div>
</nav>
<?php get_template_part('templates/container_close'); ?>
<!-- END OF FILE "templates/menu.php" -->