
<!-- START OF FILE "sidebar.php" -->
<?php

get_template_part('templates/sidebar_open');

if (is_active_sidebar('sidebar')) {
  dynamic_sidebar('sidebar');
}

get_template_part('templates/sidebar_close');

?>
<!-- END OF FILE "sidebar.php" -->