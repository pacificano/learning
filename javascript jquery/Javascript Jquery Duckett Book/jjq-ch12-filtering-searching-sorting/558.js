(function () {

	var $imgs = $('#gallery img');
	var $search = $('#filter-search');
	var cache = [];

	$imgs.each(function () {
		cache.push({
			element: this,
			text: this.alt.trim().toLowerCase()
		}); // end push
	}); // end imgs each

	function filter () {
		var query = this.value.trim().toLowerCase();

		cache.forEach(function (img) {
			var index = 0;
			if (query) {
				index = img.text.indexOf(query);
			}; // end if
			img.element.style.display = index === -1 ? 'none' : ''; // ternary operator. a different way of writing if/else conditional statement
		}); // end cache foreach

	} // end filter function

	if ('oninput' in $search[0]) {
		$search.on('input', filter);
	} else {
		$search.on('keyup', filter);
	};

}()); // end IIFE