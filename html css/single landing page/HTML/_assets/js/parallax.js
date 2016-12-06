$(function (){

	var $window = $(window);

	// $('section[data-type="background"]').each(function () {
	$('#headerDiv').each(function () {
		
		var $bgobj = $(this);

		$window.scroll(function () {
			
			var yPos = -($window.scrollTop() / 0.5);

			var coords = '50% ' + yPos + 'px';

			$bgobj.css({ backgroundPosition: coords });

		});
	});
});