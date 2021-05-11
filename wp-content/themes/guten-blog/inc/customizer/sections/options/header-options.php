<?php

/**
 * Header options
 */
add_action( 'customize_register', 'guten_blog_header_options_section' );
function guten_blog_header_options_section( $wp_customize )
{
    $wp_customize->add_section( 'guten_blog_header_options_section', array(
        'title'       => esc_html__( 'Header Options', 'guten-blog' ),
        'description' => esc_html__( 'Enable Sticky Menu', 'guten-blog' ),
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
    ) );
    $wp_customize->add_setting( 'guten_blog_header_sticky_menu_option', array(
        'sanitize_callback' => 'guten_blog_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Guten_Blog_Toggle_Control( $wp_customize, 'guten_blog_header_sticky_menu_option', array(
        'label'    => esc_html__( 'Enable Sticky Menu', 'guten-blog' ),
        'section'  => 'guten_blog_header_options_section',
        'settings' => 'guten_blog_header_sticky_menu_option',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'guten_blog_header_layouts', array(
        'sanitize_callback' => 'guten_blog_sanitize_choices',
        'default'           => 'one',
    ) );
    $choices = array(
        'one' => get_template_directory_uri() . '/images/homepage/header-layouts/header-layout-one.jpg',
    );
    $wp_customize->add_control( new Guten_Blog_Radio_Image_Control( $wp_customize, 'guten_blog_header_layouts', array(
        'label'    => esc_html__( 'Header Layout', 'guten-blog' ),
        'section'  => 'guten_blog_header_options_section',
        'settings' => 'guten_blog_header_layouts',
        'type'     => 'radio-image',
        'choices'  => $choices,
    ) ) );
}
