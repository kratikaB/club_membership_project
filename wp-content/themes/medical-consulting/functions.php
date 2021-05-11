<?php
/**
 * Theme functions and definitions
 *
 * @package medical_consulting
 */

if ( ! function_exists( 'medical_consulting_enqueue_styles' ) ) :
	/**
	 * @since Medical Consulting 1.0.0
	 */
	function medical_consulting_enqueue_styles() {
		wp_enqueue_style( 'medical-consulting-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'medical-consulting-style', get_stylesheet_directory_uri() . '/style.css', array( 'medical-consulting-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'medical_consulting_enqueue_styles', 99 );