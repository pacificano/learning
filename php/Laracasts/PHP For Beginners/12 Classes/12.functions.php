<?php 

function dd($value) {
	echo '<pre>';
	die(var_dump($value));
	echo '</pre>';
}

// you dont need to close the php if its a stand alone php file