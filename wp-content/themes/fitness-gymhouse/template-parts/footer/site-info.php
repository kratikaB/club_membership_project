<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'fitness_gymhouse_hide_show_scroll',true) != '' || get_theme_mod( 'fitness_gymhouse_enable_disable_scrolltop',true) != '') { ?>
    <?php $fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_footer_options','Right');
        if($fitness_gymhouse_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'fitness-gymhouse' ); ?></span></a>
        <?php }else if($fitness_gymhouse_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'fitness-gymhouse' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="fas fa-long-arrow-alt-up"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'fitness-gymhouse' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<div class="container">
		<span><?php fitness_gymhouse_credit(); ?> <?php echo esc_html(get_theme_mod('fitness_gymhouse_footer_text',__('By ThemesEye','fitness-gymhouse'))); ?></span>
		<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','fitness-gymhouse') ?></span>
	</div>
</div>