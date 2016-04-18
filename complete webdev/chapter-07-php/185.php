<!DOCTYPE html>
<html>
<head>
	<title>My First Webpage</title>
</head>
<body>

	<div>

		<?php  

			$names = array("Trey", "Billy", "Fred");

			if ($_POST["submit"]) {

				if ($_POST["name"]) {

					foreach ($names as $name) {

						if ($_POST["name"] == $name) {

							echo "I know you! Your name is ".$name;

							$knowYou = 1;

						}
						

					}

					if (!$knowYou) echo "I don't know you ".$_POST["name"];

				} else {

					echo "Please enter your name";

				}

			}

		?>

		<?php  

			echo "<br />";
			print_r($_POST);

		?>
		
		<form method="post">
			
			<label for="name">Name</label>

				<input type="text" name="name" />

				<input type="submit" name="submit" value="Submit Your Name" />

		</form>
	</div>

</body>
</html>