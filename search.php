<!-- START OF FILE "search.php" -->
<?php

if (is_page_template() === false) {
  get_template_part('layout', 'full');
} else {
  require_once get_page_template_slug();
}

?>
<!-- END OF FILE "search.php" -->