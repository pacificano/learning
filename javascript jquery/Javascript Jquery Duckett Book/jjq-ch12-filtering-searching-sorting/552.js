(function () {

	var $imgs = $('#gallery img');
	var $buttons = $('#buttons');
	var tagged = {};

	$imgs.each(function () {
		var img = this;
		var tags = $(this).data('tags');

		if (tags) {
			tags.split(',').forEach(function (tagName) {

				if (tagged[tagName] == null) {
					tagged[tagName] = [];
				};

				tagged[tagName].push(img);

			}); // end split.forEach
		}; //end if(tags)
	}); // end $imgs.each

	$('<button/>', {
		text: 'Show All',
		class: 'active',
		click: function () {
			$(this)
				.addClass('active')
				.siblings()
				.removeClass('active');
			$imgs.show();
		} // end click function
	}).appendTo($buttons);

	$.each(tagged, function (tagName) {
		$('<button/>', {
			text: tagName + ' (' + tagged[tagName].length + ')',
			click: function () {
				$(this)
					.addClass('active')
					.siblings()
					.removeClass('active');
				$imgs
					.hide()
					.filter(tagged[tagName])
					.show();
			} // end click function
		}).appendTo($buttons); // end button selector
	}); // end each

}()); // end IIEF