$(document).ready(function() {

	// $pText = $('.submit .form p').text();
	// alert($pText);

	$('form#formspree').submit(function(event) {

		var $formAddress = '//formspree.io/' + 'tris.pacificano+QDform' + '@' + 'gmail' + '.' + 'com';
		// trying to stop spam

		$.ajax({
			url: $formAddress,
			method: 'POST',
			data: $('#formspree').serialize(),
			dataType: 'json',
			success: function(data) { 
				$('.submit .form p').css('color', 'green');
				$('.submit .form p').html('Review successfully sent! Thank you!');
				$('.submit .form form').trigger("reset");
				// $("form").css("opacity", "0");
				// $(".successMsg").show();
			},
			error: function (err) {
				$('.submit .form p').html('There was a problem with the form. Please <a href="/contact-us/">contact us</a> for assistance.');
				// $("form").css("opacity", "0");
				// $(".failMsg").show();
			}
		});

		event.preventDefault();

	});

});