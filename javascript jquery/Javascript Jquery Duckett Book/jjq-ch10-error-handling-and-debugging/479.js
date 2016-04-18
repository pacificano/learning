console.log('And we\'re off...');
var $form, width, height, area;
$form = $('#caclulator');

$('form input[type="text"]').on('blur', function () {
	console.warn('You entered ', this.value);
});

$('#calculator').on('submit', function (e) {
	e.preventDefault();

	width = $('#width').val();
	height = $('#height').val();

	area = width * height;
	console.error(area);

	$form.append('<p>' + area + '</p>');

});