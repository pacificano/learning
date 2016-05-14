// make loop that adds 1 to a number until 100
	// check if divided by 3
		// print fizz
	// check if divided by 5
		// check not divided by 3
			// print buzz

for (var counter = 0; counter <= 20; counter++) {
	if (counter % 3 === 0) {
		console.log('fizz');
	} else if (counter % 5 === 0) {
		console.log('buzz');
	} else {
		console.log(counter);
	}
}



// theirs
// for (var n = 1; n <= 100; n++) {
//   var output = "";
//   if (n % 3 == 0)
//     output += "Fizz";
//   if (n % 5 == 0)
//     output += "Buzz";
//   console.log(output || n);
// }