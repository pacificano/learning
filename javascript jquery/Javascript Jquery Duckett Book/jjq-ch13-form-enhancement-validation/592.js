(function () {

	var type = document.getElementById('equipmentType');
	var model = document.getElementById('model');
	var cameras = {
		bolex: 'Bolex Paillard H8',
		yashica: 'Yashica 30',
		pathescape: 'Pathescape Super-8 Relax',
		canon: 'Canon 512'
	};
	var projectors = {
		kodak: 'Kodak Instamatic M55',
		bolex: 'Bolex Sound 715',
		eumig: 'Eumig Mark S',
		sankyo: 'Sankyo Dualux'
	};

	addEvent(type, 'change', function () {
		if (this.value === 'choose') {
			model.innerHTML = '<option>Please choose a type first</option>';
			return;
		};
		
		var models = getModels(this.value);

		var options = '<option>Please choose a model</option>';
		for (var key in models) {
			options += '<option value="' + key + '">' + models[key] + '</option>';
		};

		model.innerHTML = options;
	}); // end addEvent type

	function getModels (equipmentType) {
		if (equipmentType === 'cameras') {
			return cameras;
		} else if (equipmentType === 'projectors') {
			return projectors;
		};
	}

}());