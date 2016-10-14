<?php 

function dd($value) {
	echo '<pre>';
	die(var_dump($value));
	echo '</pre>';
}

function checkAge($age){

	if ($age >= 18) {
		echo 'old enough';
	} else {
		echo 'too young';
	}
	
}