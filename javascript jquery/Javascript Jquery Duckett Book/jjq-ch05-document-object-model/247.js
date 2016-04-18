// Add items to start and end of list
var list = document.getElementsByTagName('ul')[0];

// Add new item to end of list
var newItemLast = document.createElement('li'); // create element
var newTextLast = document.createTextNode('cream'); // create text node
newItemLast.appendChild(newTextLast); // add text node to element
list.appendChild(newItemLast); // add element to end of list

// Add new item to start of list
var newItemFirst = document.createElement('li'); // create element
var newTextFirst = document.createTextNode('kale'); // create text node
newItemFirst.appendChild(newTextFirst); // add text node to element
list.insertBefore(newItemFirst, list.firstChild); // insert before the first child of the list



var listItems = document.querySelectorAll('li'); // select all <li> elements

// Add a class of cool to all list items
var i;
for (i = 0; i < listItems.length; i++) {
	listItems[i].className = 'cool';
};

// Add number of items in the list to the heading
var heading = document.querySelector('h2');
var headingText = heading.firstChild.nodeValue;
var totalItems = listItems.length;
var newHeading = headingText + ' <span>(' + totalItems + ' items)</span>';
heading.innerHTML = newHeading;