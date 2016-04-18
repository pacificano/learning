<?php 

	$lineBreaker = "<br /><br />";

	$myArray = array("pizza", "chocolate", "coffee"); 

	print_r($myArray);

	echo $lineBreaker;

	echo $myArray[1];

	$anotherArray[0] = "pizza";
	$anotherArray[1] = "yoghurt";

	echo $lineBreaker;

	print_r($anotherArray);

	echo $lineBreaker;

	$thirdArray = array (

		"France" => "French",
		"USA" => "English",
		"Germany" => "German"

		);

	print_r($thirdArray);

	$anotherArray[] = "salad";

	echo $lineBreaker;

	print_r($anotherArray);

	echo $lineBreaker;

	unset($thirdArray["Germany"]);

	print_r($thirdArray);

	echo $lineBreaker;

	$name = "tris";

	echo $name;

	unset($name);

	echo $lineBreaker;

	echo $name;

?>