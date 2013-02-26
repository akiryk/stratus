(function (window, document, $) {

	/**
	 * OFF CANVAS 
	 * Manage when to show and hide the side navigation.
	 * Handle window resize events
	 */

  var $selector = $('#sidebarButton'),
    	$body = $( 'body' ),
    	mobileWidth = 600,
	    timeout = false;

  $('#sidebarButton').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('active');
  });

	// Remove open side menu when window is resized bigger
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


	/**
	 * FIT VIDS
	 * Handle videos in a responsive way
	 *
	 */
	 $("#main-wrapper").fitVids();

}(this, document, jQuery));
