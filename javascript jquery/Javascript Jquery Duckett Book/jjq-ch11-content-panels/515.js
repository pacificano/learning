var request;
var $current;
var cache = {}; // cache object ^^ what i made above
var $frame = $('#photo-viewer');
var $thumbs = $('.thumb');

function crossfade ($img) {
	if ($current) {
		$current.stop().fadeOut('slow');
	}

	// image centering... css puts top left corner of img to 50% of the window
	// then javascript sets the margin to negative half of the img
	// so it centers the img box
	$img.css({
		marginLeft: -$img.width() / 2,
		marginTop: -$img.height() /2
	});

	$img.stop().fadeTo('slow', 1);
	$current = $img;
}

$(document).on('click', '.thumb', function (e) {
	var $img;
	var src = this.href;
	request = src;

	e.preventDefault();

	$thumbs.removeClass('active');
	$(this).addClass('active');

	if (cache.hasOwnProperty(src)) { // if there is a src property in cache

		if (cache[src].isLoading === false) { // do this
			crossfade(cache[src].$img);
		}

	} else { // otherwise, do this

		$img = $('<img/>');
		cache[src] = {
			$img: $img,
			isLoading: true
		};

		$img.on('load', function () {
			$img.hide();
			$frame.removeClass('is-loading').append($img);
			cache[src].isLoading = false;

			if (request === src) {
				crossfade($img);
			}; // end request src function

		}); // end $img.on function

		$frame.addClass('is-loading');

		$img.attr({
			'src': src,
			'alt': this.title || ''
		});

	} // end cache if/else

});

// final line runs once rest of script has loaded to show first image
$('.thumb').eq(0).click(); // simulates the first click on thumb 1