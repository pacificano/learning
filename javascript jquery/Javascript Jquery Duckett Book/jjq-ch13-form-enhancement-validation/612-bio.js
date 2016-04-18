(function () {

	var bio = $('#bio');
	var bioCounter = $('#bio-count');

	bio.on('focus', updateCounter);
	bio.on('keyup', updateCounter);

	bio.on('blur', function () {
		if (bioCounter.text() >= 0) {
			bioCounter.addClass('hide');
		}; // end bioCounter if
	}); // end bio.on

	function updateCounter (e) {
		var count = 140 - bio.val().length;
		var status = '';
		
		if (count < 0) {
			status = 'error';
		} else if (count <= 15) {
			status = 'warn';
		} else {
			status = 'good';
		}; // end if/elseif/else

		bioCounter.removeClass('error warn good hide');
		bioCounter.addClass(status);
		bioCounter.text(count);
	} // end updateCounter

}()); // end IIFE