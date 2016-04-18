var noteInput, noteName, textEntered, target; // declare variables

noteName = document.getElementById('noteName'); // the element that holds note
noteInput = document.getElementById('noteInput'); // input for writing the note

function writeLabel (e) { // declare the function
	
	if (!e) { // if event object not present

		e = window.event; // use ie5-8 fallback

	}

	target = event.target || event.srcElement; // get target of event
	textEntered = e.target.value; // value of that element
	noteName.textContent = textEntered; // update note text

}



function recorderControls (e) { // declare recorderControls()
	
	if (!e) { // if no event object

		e = window.event; // use ie5-8 fallback

	} 

	target = e.target || e.srcElement; // get target element

	if (e.preventDefault) { // if preventdefault supported

		e.preventDefault(); // stop default action

	} else {

		event.returnValue = false; // IE fallback stop default action

	}

	switch (target.getAttribute('data-state')) { // get data-state attribute
		case 'record': // if value is record
			record(target); // call record()
			break; // exit function

		case 'stop': // if value is stop
			stop(target); // call stop()
			break; // exit function
	}

}



function record (target) { // declare function
	
	target.setAttribute('data-state', 'stop'); // set data-state attribute to stop
	target.textContent = 'stop'; // set the text to stop

}



function stop (target) { // declare function
	
	target.setAttribute('data-state', 'record'); // set data-state attribute to record
	target.textContent = 'record'; // set text to 'record'

}



if (document.addEventListener) { // if event listener supported

	document.addEventListener('click', function (e) { // for any click
		recorderControls(e); // call recorderControls
	}, false); // during bubble phase

	noteInput.addEventListener('input', writeLabel, false); // if input event fires on noteInput input, call writeLabel

} else {

	document.attachEvent('onclick', function (e) { // IE fallback
		recorderControls(e);
	});

	noteInput.attachEvent('onkeyup', writeLabel, false);

}