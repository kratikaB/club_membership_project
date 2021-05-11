<?php

/**
 * Color and Fonts options
 */
add_action( 'customize_register', 'guten_blog_colors_panel' );
function guten_blog_colors_panel( $wp_customize )
{
    $wp_customize->get_section( 'colors' )->priority = 14;
    $wp_customize->get_section( 'colors' )->title = esc_html__( 'Color & Fonts', 'guten-blog' );
}

add_action( 'customize_register', 'guten_blog_color_fonts_options_section' );
function guten_blog_color_fonts_options_section( $wp_customize )
{
    $wp_customize->add_setting( 'body_options_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Guten_Blog_Custom_Text( $wp_customize, 'body_options_text', array(
        'label'    => esc_html__( 'Body Font:', 'guten-blog' ),
        'section'  => 'colors',
        'settings' => 'body_options_text',
    ) ) );
    $wp_customize->add_setting( 'body_line_height', array(
        'default'           => 1.5,
        'sanitize_callback' => 'guten_blog_sanitize_float',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'body_line_height', array(
        'section'  => 'colors',
        'settings' => 'body_line_height',
        'label'    => esc_html__( 'Line Height', 'guten-blog' ),
        'choices'  => array(
        'min'  => 0.1,
        'max'  => 10,
        'step' => 0.1,
    ),
    ) ) );
    $wp_customize->add_setting( 'font_family', array(
        'transport'         => 'postMessage',
        'default'           => 'Poppins',
        'sanitize_callback' => 'guten_blog_sanitize_google_fonts',
    ) );
    $wp_customize->add_control( 'font_family', array(
        'settings' => 'font_family',
        'label'    => esc_html__( 'Choose Font Family For Your Site', 'guten-blog' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => guten_blog_google_fonts(),
    ) );
    $wp_customize->add_setting( 'font_size', array(
        'transport'         => 'postMessage',
        'default'           => '16px',
        'sanitize_callback' => 'guten_blog_sanitize_select',
    ) );
    $wp_customize->add_control( 'font_size', array(
        'settings' => 'font_size',
        'label'    => esc_html__( 'Choose Font Size', 'guten-blog' ),
        'section'  => 'colors',
        'type'     => 'select',
        'default'  => '13px',
        'choices'  => array(
        '13px' => '13px',
        '14px' => '14px',
        '15px' => '15px',
        '16px' => '16px',
        '17px' => '17px',
        '18px' => '18px',
    ),
        'priority' => 101,
    ) );
    $wp_customize->add_setting( 'body_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'body_font_weight', array(
        'section'  => 'colors',
        'settings' => 'body_font_weight',
        'label'    => esc_html__( 'Font Weight', 'guten-blog' ),
        'priority' => 103,
        'choices'  => array(
        'min'  => 100,
        'max'  => 900,
        'step' => 100,
    ),
    ) ) );
    $wp_customize->add_setting( 'heading_options_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Guten_Blog_Custom_Text( $wp_customize, 'heading_options_text', array(
        'label'    => esc_html__( 'Heading Options :', 'guten-blog' ),
        'section'  => 'colors',
        'settings' => 'heading_options_text',
        'priority' => 103,
    ) ) );
    $wp_customize->add_setting( 'header_line_height', array(
        'default'           => 1.5,
        'sanitize_callback' => 'guten_blog_sanitize_float',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'header_line_height', array(
        'section'  => 'colors',
        'settings' => 'header_line_height',
        'label'    => esc_html__( 'Line Height', 'guten-blog' ),
        'priority' => 103,
        'choices'  => array(
        'min'  => 0.1,
        'max'  => 10,
        'step' => 0.1,
    ),
    ) ) );
    $wp_customize->add_setting( 'heading_font_family', array(
        'transport'         => 'postMessage',
        'sanitize_callback' => 'guten_blog_sanitize_google_fonts',
        'default'           => 'Frank Ruhl Libre',
    ) );
    $wp_customize->add_control( 'heading_font_family', array(
        'settings' => 'heading_font_family',
        'label'    => esc_html__( 'Font Family', 'guten-blog' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => guten_blog_google_fonts(),
        'priority' => 103,
    ) );
    $wp_customize->add_setting( 'heading_font_weight', array(
        'default'           => 700,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'heading_font_weight', array(
        'section'  => 'colors',
        'settings' => 'heading_font_weight',
        'label'    => esc_html__( 'Font Weight', 'guten-blog' ),
        'priority' => 103,
        'choices'  => array(
        'min'  => 100,
        'max'  => 900,
        'step' => 100,
    ),
    ) ) );
    $default_size = array(
        '1' => 32,
        '2' => 28,
        '3' => 24,
        '4' => 21,
        '5' => 15,
        '6' => 12,
    );
    for ( $i = 1 ;  $i <= 6 ;  $i++ ) {
        $max_size = ( $i == '1' ? '150' : '50' );
        $wp_customize->add_setting( 'guten_blog_heading_' . $i . '_size', array(
            'default'           => $default_size[$i],
            'sanitize_callback' => 'absint',
            'transport'         => 'postMessage',
        ) );
        $wp_customize->add_control( 'guten_blog_heading_' . $i . '_size', array(
            'type'        => 'number',
            'section'     => 'colors',
            'label'       => esc_html__( 'Heading ', 'guten-blog' ) . $i . esc_html__( ' Size', 'guten-blog' ),
            'priority'    => 104,
            'input_attrs' => array(
            'min'  => 10,
            'max'  => $max_size,
            'step' => 1,
        ),
        ) );
    }
}
