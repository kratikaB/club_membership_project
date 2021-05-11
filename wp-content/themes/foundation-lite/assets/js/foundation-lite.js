/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// The number of characters
	var titlelength = 27;

	$( '.site-title' ).filter( function() {
		return $( this ).text().length > titlelength;
	} ).addClass( 'long-title' );

} )( jQuery );
