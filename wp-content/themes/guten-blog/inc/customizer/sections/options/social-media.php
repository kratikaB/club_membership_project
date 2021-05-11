<?php
/**
 * Social Media Sections

 */
add_action( 'customize_register', 'guten_blog_social_media' );

function guten_blog_social_media( $wp_customize ) {

    $wp_customize->add_section( 'guten_blog_social_media', array(
        'title'          => esc_html__( 'Social Media', 'guten-blog' ),
        'description' => esc_html__('Social Media Section :', 'guten-blog'),
        'priority'       => 16,
       
    ) );
    
    $wp_customize->add_setting( 'abt_fb_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_fb_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'Facebook URL', 'guten-blog' ),
        'description' => __( 'This is a custom url input.', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.google.com', 'guten-blog'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_fb_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_fb_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'Facebook URL', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.facebook.com', 'guten-blog'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_twitter_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_twitter_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'Twitter URL', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.twitter.com', 'guten-blog'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_instagram_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_instagram_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'Instagram URL', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.instagram.com', 'guten-blog'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_linkedin_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_linkedin_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'LinkedIn URL', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.linkedin.com', 'guten-blog'  ),
    ),
    ) );

    $wp_customize->add_setting( 'abt_youtube_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'guten_blog_sanitize_url',
    ) );
  
    $wp_customize->add_control( 'abt_youtube_url_setting_id', array(
        'type' => 'url',
        'section' => 'guten_blog_social_media', // Add a default or your own section
        'label' => __( 'Youtube URL', 'guten-blog' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.youtube.com', 'guten-blog'  ),
    ),
    ) );
  
  function guten_blog_sanitize_url( $url ) {
    return esc_url_raw( $url );
  }

}