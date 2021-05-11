<?php
/**
 * The index page of SKT White Lite
 *
 * Displays the home page elements.
 *
 * @package SKT White Lite
 *
 * @since SKT White Lite 1.0
 */
global $complete;
?>
<?php get_header(); ?>
<?php if ( !is_front_page() ) { ?>
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
    <?php get_template_part('templates/post','layout4'); ?>
  </div>
</div>
<?php } //is_front_page ENDS ?>
<?php get_footer(); ?>