<?php

/**
 * Container width Settings
 *
 * @package guten_blog
 */


add_action( 'customize_register', 'guten_blog_customize_container_width' );

function guten_blog_customize_container_width( $wp_customize ) {

    $wp_customize->add_section( 'guten_blog_container_width', array(
        'title'          => esc_html__( 'Container Width', 'guten-blog' ),
        'description'    => esc_html__( 'Container Width :', 'guten-blog' ), 
        'priority'       => 17,       
    ) );
            
    $wp_customize->add_setting( 'container_width', array(
        'default'           => 1140,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Guten_Blog_Slider_Control( $wp_customize, 'container_width', array(
        'section' => 'guten_blog_container_width',
        'settings' => 'container_width',
        'label'   => esc_html__( 'Container Width', 'guten-blog' ),
        'choices'     => array(
            'min'   => 1024,
            'max'   => 1600,
            'step'  => 1,
        )
    ) ) );

    
}

