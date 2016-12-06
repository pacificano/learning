function smoothScroll (duration) {
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );

	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top
	        }, duration);
	    }
	});
}



$(function() {

	smoothScroll(1000);
	$('.textContainer').fadeInScroll();
	$('.testimonialsBlock').slick({
		autoplay: true,
		autoplaySpeed: 4000,
		infinite: true,
		fade: true,
		arrows: false
	});

});



$(function() {
	// makes form validate in wordpress if html5
	$('#commentform').removeAttr('novalidate');

	// only put email address on page after a click
	$noSpamEmail = $('.sidebar .buttons a:nth-of-type(4)').attr("href");
	$noSpamEmail += '@gmail.com';
	$('.sidebar .buttons a:nth-of-type(4)').on('click', function(event) { // left 'click'
		$('.sidebar .buttons a:nth-of-type(4)').attr("href", $noSpamEmail);
	});
	$('.sidebar .buttons a:nth-of-type(4)').on('contextmenu', function(event) { // right click 'contextmenu'
		$('.sidebar .buttons a:nth-of-type(4)').attr("href", $noSpamEmail);
	});

});