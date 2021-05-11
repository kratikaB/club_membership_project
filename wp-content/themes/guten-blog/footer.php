<?php

$layout = 'one';
?>

</div>

<footer id="colophon" class="site-footer footer-<?php 
echo  esc_attr( $layout ) ;
?>">
    <div class="container">
        <div class="footer-section">
            <?php 
for ( $i = 1 ;  $i < 5 ;  $i++ ) {
    ?>
            <div class="f-block">
                <?php 
    dynamic_sidebar( 'footer-' . $i . '' );
    ?>
            </div>
            <?php 
}
?>
        </div>
        <div class="site-info">
            <?php 
?>
            <?php 
get_template_part( 'template-parts/header-social', 'icon' );
?>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->


<button onclick="guten_blog_topFunction()" id="scrollTop" title="<?php 
esc_attr_e( "Go to top", 'guten-blog' );
?>"><span class="icon-up-open"></span></button>


</div><!-- #page -->

<?php 
wp_footer();
?>
</body>

</html>