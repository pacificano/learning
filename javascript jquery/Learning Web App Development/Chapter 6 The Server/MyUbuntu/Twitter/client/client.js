var main = function () {
	"use strict";

	var insertCountsIntoDom = function (counts) {
		$("p").html(counts.awesome);
	};

	setInterval(function () {
		$.getJSON("/counts.json", insertCountsIntoDom);
	}, 3000);

	$.getJSON("/counts.json", insertCountsIntoDom);

	
}

$(document).ready(main);