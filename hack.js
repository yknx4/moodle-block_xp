requirejs(['jquery'], function( $ ) {
	$.getScript("https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js", function(toastr) {
	  console.log( "Load was performed." );
	  alert( "Load was performed." );

	});


});