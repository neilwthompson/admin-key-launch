(function( $ ) {
	'use strict';

	$(document).keyup(function(e) {
		if (e.key === "Escape") { // escape key maps to keycode `27`
		   window.location.href=adminkey.adminUrl;
		   e.preventDefault();
	   }
   });

})( jQuery );
