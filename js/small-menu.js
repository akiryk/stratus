/**
 * Handles toggling the main navigation menu for small screens.
 */
jQuery( document ).ready( function( $ ) {
	var mobileWidth = 600,
			$body = $( 'body' ),
	    timeout = false;

	// $.fn.smallMenu = function() {
	// 	$masthead.find( '.site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );
	// 	$masthead.find( '.site-navigation h1' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );

	// 	$( '.menu-toggle' ).unbind( 'click' ).click( function() {
	// 		$masthead.find( '.menu' ).toggle();
	// 		$( this ).toggleClass( 'toggled-on' );
	// 	} );
	// };

	// Check viewport width on first load.
	// if ( $( window ).width() < mobileWidth )
	// 	$.fn.smallMenu();

	// Check viewport width when user resizes the browser window.
	$( window ).resize( function() {
		var browserWidth = $( window ).width();

		if ( timeout !== false  )
			clearTimeout( timeout );

		timeout = setTimeout( function() {
			if ( browserWidth > mobileWidth ) {
				$body.removeClass('active');
			} 
		}, 200 );
	} );
} );