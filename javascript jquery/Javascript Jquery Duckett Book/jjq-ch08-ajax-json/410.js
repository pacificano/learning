$(function(){

	var times;
	$.ajax({
		beforeSend: function (xhr) { // before requesting data
			if (xhr.overrideMimeType) { // if supported
				xhr.overrideMimeType("application/json"); // set MIME to prevent errors
			};
		}
	});

	// COLLECT DATA FROM THE JSON FILE
	function loadTimetable () {
		$.getJSON('data/example.json')
			.done(function (data) {
				times = data;
			})
			.fail(function () {
				$('#event').html('Sorry! We could not load the timetalbe at the moment');
			})
		;
	}

	loadTimetable();


	// CLICK EVENT TO LOAD TIMETABLE
	$('#content').on('click', '#event a', function (e) { // event, select the element, then do function
		
		e.preventDefault();
		var loc = this.id.toUpperCase();

		var newContent = '';
		for (var i = 0; i < times[loc].length; i++) {
			newContent += '<li><span class="time">' + times[loc][i].time + '</span>';
			newContent += '<a href="data/descriptions.html#';
			newContent += times[loc][i].title.replace(/ /g, '-') + '">'; // replace spaces in title with a dash
			newContent += times[loc][i].title + '</a></li>';
		};

		$('#sessions').html('<ul>' + newContent + '</ul>');

		$('#event a.current').removeClass('current');
		$(this).addClass('current');

		$('#details').text('');

	});


	// CLICK ON SESSION TO LOAD DESCRIPTION
	$('#content').on('click', '#sessions li a', function (e) {
		e.preventDefault();
		var fragment = this.href;

		fragment = fragment.replace('#', ' #');
		$('#details').load(fragment);

		$('#sessions a.current').removeClass('current');
		$(this).addClass('current');
	});


	// CLICK ON PRIMARY NAV
	$('nav a').on('click', function (e) {
		e.preventDefault();
		var url = this.href;

		$('nav a.current').removeClass('current');
		$(this).addClass('current');

		$('#container').remove();
		$('#content').load(url + ' #container').hide().fadeIn('slow');
	});

});// end anonmyous function 