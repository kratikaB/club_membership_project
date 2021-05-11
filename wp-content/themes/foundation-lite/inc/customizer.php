<?php
/**
 * Foundation Lite Theme Customizer
 *
 * @package foundation-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function foundation_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'foundation_lite_theme_options', array(
		'title'    => __( 'Theme Options', 'foundation-lite' ),
		'priority' => 130,
	) );

	/* Front Page: Featured Page One */
	$wp_customize->add_setting( 'foundation_lite_featured_page_one_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'foundation_lite_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'foundation_lite_featured_page_one_front_page', array(
		'label'             => __( 'Front Page: Featured Page One', 'foundation-lite' ),
		'section'           => 'foundation_lite_theme_options',
		'priority'          => 2,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Two */
	$wp_customize->add_setting( 'foundation_lite_featured_page_two_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'foundation_lite_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'foundation_lite_featured_page_two_front_page', array(
		'label'             => __( 'Front Page: Featured Page Two', 'foundation-lite' ),
		'section'           => 'foundation_lite_theme_options',
		'priority'          => 3,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Three */
	$wp_customize->add_setting( 'foundation_lite_featured_page_three_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'foundation_lite_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'foundation_lite_featured_page_three_front_page', array(
		'label'             => __( 'Front Page: Featured Page three', 'foundation-lite' ),
		'section'           => 'foundation_lite_theme_options',
		'priority'          => 4,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Four */
	$wp_customize->add_setting( 'foundation_lite_featured_page_four_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'foundation_lite_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'foundation_lite_featured_page_four_front_page', array(
		'label'             => __( 'Front Page: Featured Page Four', 'foundation-lite' ),
		'section'           => 'foundation_lite_theme_options',
		'priority'          => 5,
		'type'              => 'dropdown-pages',
	) );
}
add_action( 'customize_register', 'foundation_lite_customize_register' );

/**
 * Sanitize the dropdown pages.
 *
 * @param interger $input.
 * @return interger.
 */
function foundation_lite_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function foundation_lite_customize_preview_js() {
	wp_enqueue_script( 'foundation_lite_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'foundation_lite_customize_preview_js' );
