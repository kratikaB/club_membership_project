<?php
if( ! function_exists( 'guten_blog_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function guten_blog_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';

   
    require_once get_template_directory() . '/inc/custom-controls/radiobtn/class-radio-buttonset-control.php';

    
    require_once get_template_directory() . '/inc/custom-controls/radioimg/class-radio-image-control.php';

    
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';

   
    require_once get_template_directory() . '/inc/custom-controls/notes.php';
            
    // Register the control type.
    $wp_customize->register_control_type( 'Guten_Blog_Slider_Control' );
    $wp_customize->register_control_type( 'Guten_Blog_Buttonset_Control' );
    $wp_customize->register_control_type( 'Guten_Blog_Radio_Image_Control' );
    $wp_customize->register_control_type( 'Guten_Blog_Toggle_Control' );
}
endif;
add_action( 'customize_register', 'guten_blog_register_custom_controls' );