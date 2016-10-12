<?php 

$person = [
	'age' => 31,
	'hair' => 'blonde',
	'job' => 'web developer'
];

$person['name'] = 'Tristan';

// to printout an array, you cant use echo as echo is only for strings
// use var_dump

var_dump($person);
unset($person['age']);

// you can style it with <pre>

echo "<pre>";
var_dump($person);
echo "</pre>";

// you can use die() to stop code in its place
die(var_dump($person));

require '07.view.php'; 

?>