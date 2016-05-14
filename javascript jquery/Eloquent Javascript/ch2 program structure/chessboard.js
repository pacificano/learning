// 1st row
	// hash then space
// 2nd row
	// space then hash

// make a loop
	// grab length
	// for each loop
		// add either # or space based on either odd or even
		// can do the same for number of rows



var checker = "";
var size = 8;

// row loop
for (var rowCounter = 0; rowCounter < size; rowCounter++) {
	if (rowCounter % 2 === 0) {

		// column loop
		for (var colCounter = 0; colCounter < size; colCounter++) {
			if (colCounter % 2 === 0) {
				checker += "X";
			} else {
				checker += " ";
			}
		}
		checker += "\n";

	} else {

		// column loop
		for (var colCounter = 0; colCounter < size; colCounter++) {
			if (colCounter % 2 === 0) {
				checker += " ";
			} else {
				checker += "X";
			}
		}
		checker += "\n";

	}
}

console.log(checker);


// theirs
// var size = 8;

// var board = "";

// for (var y = 0; y < size; y++) {
//   for (var x = 0; x < size; x++) {
//     if ((x + y) % 2 == 0)
//       board += " ";
//     else
//       board += "#";
//   }
//   board += "\n";
// }

// console.log(board);