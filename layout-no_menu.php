<?php

/*
Template Name: No menu
*/

?>
<!-- START OF FILE "layout-no_menu.php" -->
<?php

get_header();

get_template_part('templates/container_open');

get_template_part('templates/main_open');

get_template_part('templates/loop', is_page() ? 'page' : '');

get_template_part('templates/main_close');

get_sidebar();

get_template_part('templates/container_close');

get_footer();

?>
<!-- END OF FILE "layout-no_menu.php" -->