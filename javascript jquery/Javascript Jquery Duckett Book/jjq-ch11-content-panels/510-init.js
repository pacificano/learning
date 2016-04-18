(function () {
	var $content = $('#share-options').detach(); // remove modal from page

	$('#share').on('click', function () {
		modal.open({
			content: $content, 
			width: 340, 
			height: 300
		});
	});

}()); // end IIFE immediately involved function expression