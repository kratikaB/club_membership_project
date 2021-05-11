<?php
/**
 * guten-blog Theme Customizer
 *
 * @package guten_blog
 */

add_action( 'customize_register', 'guten_blog_change_homepage_settings_options' );
function guten_blog_change_homepage_settings_options( $wp_customize )  {
    
	$wp_customize->get_section( 'title_tagline' )->priority = 10;
    $wp_customize->get_section( 'static_front_page' )->priority = 20;

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => '.site-title a',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-description',
	) );

	$wp_customize->remove_control( 'header_textcolor' );

    require get_template_directory() . '/inc/google-fonts.php';    
}

$sections = array(  'header-options', 'color-options', 'blog-options', 'social-media', 'container-width','footer-options');



if( ! empty( $sections ) ) {
	foreach( $sections as $section ) {
	    require get_template_directory() . '/inc/customizer/sections/options/' . $section . '.php';
	}
}

/**
 * Enqueue the customizer javascript.
 */
function guten_blog_customize_preview_js() {
 	wp_enqueue_script( 'guten-blog-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'guten_blog_customize_preview_js' );


/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

add_action( 'customize_register', 'guten_blog_site_identity_settings' );

function guten_blog_site_identity_settings( $wp_customize ) {

    $wp_customize->add_setting( 'site_title_color_option', array(
        'capability'  => 'edit_theme_options',
        'default'     => '#52a5ad',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color_option', array(
        'label'      => esc_html__( 'Site Title Color', 'guten-blog' ),
        'section'    => 'title_tagline',
        'settings'   => 'site_title_color_option',
    ) ) );

    $wp_customize->add_setting( 'site_title_size', array(
        'default'           => 20,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'site_title_size', array(
        'section' => 'title_tagline',
        'settings' => 'site_title_size',
        'label'   => esc_html__( 'Logo Size', 'guten-blog' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 60,
            'step'  => 1,
        )
    ) ) );

    $wp_customize->add_setting( 'site_identity_font_family', array(
        'transport' => 'postMessage',
        'sanitize_callback' => 'guten_blog_sanitize_google_fonts',
        'default'     => 'Frank Ruhl Libre',
    ) );

    $wp_customize->add_control( 'site_identity_font_family', array(
        'settings'    => 'site_identity_font_family',
        'label'       =>  esc_html__( 'Site Identity Font Family', 'guten-blog' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => guten_blog_google_fonts(),
    ) );
    
}
