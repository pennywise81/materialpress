<!-- START OF FILE "front-page.php" -->
<?php

if (is_page_template() === false) {
  get_template_part('layout', 'no_menu');
} else {
  require_once get_page_template_slug();
}

?>
<!-- END OF FILE "front-page.php" -->