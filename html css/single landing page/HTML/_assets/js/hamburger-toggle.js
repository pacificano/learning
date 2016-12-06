$(function () {

	var $window = $(window);
	var scrollZone = $window.height() / 5;

	$window.on('scroll', function () {
			
		if ( $window.scrollTop() > scrollZone ) {

			$(".headerBlock nav").css({'background': 'black'}, 1250);

		} else {

			$(".headerBlock nav").css({'background': ''}, 1250);
		}

	});
	


	$(".menuButton.menuTop").click(function() {
		$(".menuOverlay").toggleClass("menuOverlay-open");
		$(".navLinks").toggleClass("navLinks-open");
		$(".menuButton.menuTop").toggleClass("active");
	});

	$(".navLinks").click(function () { //when menu link is clicked

		if ( $(".menuOverlay").hasClass("menuOverlay-open")) { //check if the overlay is open
			// if it is
			$(".menuOverlay").toggleClass("menuOverlay-open");
			$(".navLinks").toggleClass("navLinks-open");
			$(".menuButton.menuTop").toggleClass("active");
		}

	});



});