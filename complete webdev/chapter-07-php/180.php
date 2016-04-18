<?php 

	$i = 0;

	$array = array("apple", "banana", "grape", "pear");

	while ($array[$i]) {

		echo "Key: $i Value: $array[$i] <br />";

		$i++;

	};

	while ($i < 20) {

		echo $i;

		$i++;

	};

?>