<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package guten_blog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function guten_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	$is_sticky = get_theme_mod( 'guten_blog_header_sticky_menu_option', false );
	
	if( $is_sticky )
		$classes[] = 'sticky';

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'guten_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function guten_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'guten_blog_pingback_header' );
