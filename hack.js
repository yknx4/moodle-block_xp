requirejs(['jquery'], function( $ ) {
	$.getScript( "toastr.js", function(toastr) {


	  console.log( "Load was performed." );
	  alert( "Load was performed." );

	});


});