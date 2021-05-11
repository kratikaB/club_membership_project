<?php

/**
 * footer Fonts Settings
 *
 * @package guten_blog
 */
add_action( 'customize_register', 'guten_blog_customize_register_footer_options_section' );
function guten_blog_customize_register_footer_options_section( $wp_customize )
{
    $wp_customize->add_section( 'guten_blog_customize_register_footer_options_section', array(
        'title'       => esc_html__( 'Footer Options', 'guten-blog' ),
        'description' => esc_html__( 'Footer widget title Fonts :', 'guten-blog' ),
        'priority'    => 18,
    ) );
    $wp_customize->add_setting( 'footer_font_family', array(
        'transport'         => 'postMessage',
        'default'           => 'Frank Ruhl Libre',
        'sanitize_callback' => 'guten_blog_sanitize_google_fonts',
    ) );
    $wp_customize->add_control( 'footer_font_family', array(
        'settings' => 'footer_font_family',
        'label'    => esc_html__( 'Choose Font', 'guten-blog' ),
        'section'  => 'guten_blog_customize_register_footer_options_section',
        'type'     => 'select',
        'choices'  => guten_blog_google_fonts(),
    ) );
    $choices = array(
        'one' => get_template_directory_uri() . '/images/homepage/footer-layouts/footer-layout-one.jpg',
    );
    $wp_customize->add_setting( 'guten_blog_footer_layouts', array(
        'sanitize_callback' => 'guten_blog_sanitize_choices',
        'default'           => 'one',
    ) );
    $wp_customize->add_control( new Guten_Blog_Radio_Image_Control( $wp_customize, 'guten_blog_footer_layouts', array(
        'label'    => esc_html__( 'Footer Layout', 'guten-blog' ),
        'section'  => 'guten_blog_customize_register_footer_options_section',
        'settings' => 'guten_blog_footer_layouts',
        'type'     => 'radio-image',
        'choices'  => $choices,
    ) ) );
}
