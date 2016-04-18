<?php 
	
	$number = 1;

	$otherNumber = 2;

	$thirdNumber = 2;

	if ($number !== $otherNumber) {

		echo "True!";
	 	
	 } else {

	 	echo "False!";

	 };

	 if (!($number == $otherNumber)) {

		echo "True!";
	 	
	 } else {

	 	echo "False!";

	 };

	 echo "<br /><br /> These two do the same thing. Note the \"!\" mark!<br /><br />";

	 if ($thirdNumber == $otherNumber AND $number == $otherNumber) {

	 	echo "True!";

	 } else {

	 	echo "False!";

	 };

	 echo "<br /><br /> AND statements and OR statements! <br /><br />";

	 if ($thirdNumber == $otherNumber OR $number == $otherNumber) {

	 	echo "True!";

	 } else {

	 	echo "False!";
	 	
	 }

?>