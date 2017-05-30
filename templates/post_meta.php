<!-- START OF FILE "templates/post_meta.php" -->
<div class="post-meta">
  <?php _e('Written by'); ?>
  <?php the_author('display_name'); ?>
  <?php _e('on'); ?>
  <?php the_time(get_option('date_format')); ?>
  <?php _e('in'); ?>
  <?php the_category(', ') ?>
  <?php edit_post_link(__('Edit post'), '<nobr>[', ']</nobr>'); ?>
</div>
<!-- END OF FILE "templates/post_meta.php" -->