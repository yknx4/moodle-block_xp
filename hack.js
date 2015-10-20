requirejs(['jquery'], function( $ ) {
	$.getScript("https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js", function() {
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": true,
			"progressBar": false,
			"positionClass": "toast-bottom-center",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		toastr["info"]("You've reached level 3", "Level Up!");
	});


});