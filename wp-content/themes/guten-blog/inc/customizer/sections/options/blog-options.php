<?php
/**
 * Blog List Settings
 * 
 * @package guten_blog
 */


add_action( 'customize_register', 'guten_blog_customize_blog_option' );

function guten_blog_customize_blog_option( $wp_customize ) {

    $wp_customize->add_section( 'guten_blog_customize_blog_option', array(
        'title'          => esc_html__( 'Blog Options', 'guten-blog' ),
        'priority'       => 15,        
    ) );
        
        $wp_customize->add_setting( 'blog_post_layout', array(
            'capability'  => 'edit_theme_options',        
            'sanitize_callback' => 'guten_blog_sanitize_choices',
            'default'     => 'no-sidebar',
        ) );
    
        $wp_customize->add_control( new Guten_Blog_Buttonset_Control( $wp_customize, 'blog_post_layout', array(
            'label' => esc_html__( 'Layouts :', 'guten-blog' ),
            'section' => 'guten_blog_customize_blog_option',
            'settings' => 'blog_post_layout',
            'type'=> 'radio-buttonset',
            'choices'     => array(
                'sidebar-left' => esc_html__( 'Sidebar at left', 'guten-blog' ),
                'no-sidebar'    =>  esc_html__( 'No sidebar', 'guten-blog' ),
                'sidebar-right' => esc_html__( 'Sidebar at right', 'guten-blog' ),            
            ),
        ) ) );

        $wp_customize->add_setting( 'blog_post_view', array(
            'capability'  => 'edit_theme_options',     
            'sanitize_callback' => 'guten_blog_sanitize_choices',
            'default'     => 'col-3-view',
        ) );
    
        $wp_customize->add_control( new Guten_Blog_Buttonset_Control( $wp_customize, 'blog_post_view', array(
            'label' => esc_html__( 'Post View :', 'guten-blog' ),
            'section' => 'guten_blog_customize_blog_option',
            'settings' => 'blog_post_view',
            'type'=> 'radio-buttonset',
            'choices'     => array(
                'grid-view' => esc_html__( 'Grid View', 'guten-blog' ),
                'list-view' => esc_html__( 'List View', 'guten-blog' ),
                'col-3-view' => esc_html__( 'Column 3 View', 'guten-blog' ),
                'full-width-view' => esc_html__( 'Fullwidth View', 'guten-blog' ),
            ),
        ) ) );   

        $wp_customize->add_setting( 'hide_show_date', array(
            'sanitize_callback'     =>  'guten_blog_sanitize_checkbox',
            'default'               =>  true
        ) );
    
        $wp_customize->add_control( new Guten_Blog_Toggle_Control( $wp_customize, 'hide_show_date', array(
            'label' => esc_html__( 'Show/Hide Date','guten-blog' ),
            'section' => 'guten_blog_customize_blog_option',
            'settings' => 'hide_show_date',
            'type'=> 'toggle',
        ) ) );

        $wp_customize->add_setting( 'hide_show_author', array(
            'sanitize_callback'     =>  'guten_blog_sanitize_checkbox',
            'default'               =>  true
        ) );
    
        $wp_customize->add_control( new Guten_Blog_Toggle_Control( $wp_customize, 'hide_show_author', array(
            'label' => esc_html__( 'Show/Hide Author','guten-blog' ),
            'section' => 'guten_blog_customize_blog_option',
            'settings' => 'hide_show_author',
            'type'=> 'toggle',
        ) ) );

        $wp_customize->add_setting( 'hide_show_comment', array(
            'sanitize_callback'     =>  'guten_blog_sanitize_checkbox',
            'default'               =>  true
        ) );
    
        $wp_customize->add_control( new Guten_Blog_Toggle_Control( $wp_customize, 'hide_show_comment', array(
            'label' => esc_html__( 'Show/Hide Comment','guten-blog' ),
            'section' => 'guten_blog_customize_blog_option',
            'settings' => 'hide_show_comment',
            'type'=> 'toggle',
        ) ) );

}