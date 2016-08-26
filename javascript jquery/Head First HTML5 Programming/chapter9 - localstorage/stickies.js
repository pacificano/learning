localStorage.setItem("stcky_0", "hey dude");
localStorage.setItem("stcky_1", "byee dude");

window.onload = init;

function init() {

	var clearButton = document.getElementById("clear_button");
	clearButton.onclick = clearStorage;

	var button = document.getElementById("add_button"); 
	button.onclick = createSticky;

	for (var i = 0; i < localStorage.length; i++) {
		var key = localStorage.key(i);
		if (key.substring(0, 6) == "sticky") {
			var value = localStorage.getItem(key);
			addStickyToDOM(value); 
		}
	} 
}



function addStickyToDOM(value) {
	var stickies = document.getElementById("stickies"); 
	var sticky = document.createElement("li");
	var span = document.createElement("span"); 
	// span.setattribute("class", "sticky"); 
	span.innerHTML = value;
	sticky.appendChild(span); 
	stickies.appendChild(sticky);
}



function createSticky() {
	var value = document.getElementById("note_text").value; 
	var key = "sticky_" + localStorage.length; 
	localStorage.setItem(key, value);
	addStickyToDOM(value); 
}



function clearStorage() { 
	localStorage.clear();
} 



function getStickiesarray() {
	var stickiesarray = localStorage.getItem("stickiesarray"); 
	
	if (!stickiesarray) {
		stickiesarray = [];
		localStorage.setItem("stickiesarray", JSON.stringify(stickiesarray)); 
	} else {
	stickiesarray = JSON.parse(stickiesarray); 
	}
	
	return stickiesarray; 
}