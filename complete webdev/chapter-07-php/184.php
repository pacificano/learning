<!DOCTYPE html>
<html>
<head>
	<title>My First Webpage</title>
</head>
<body>

	<div>

		<?php  

			if ($_GET["submit"]) {

				if ($_GET["name"]) {

					echo "Your name is ".$_GET["name"];

				} else {

					echo "Please enter your name";

				}

			}

		?>
		
		<form>
			
			<label for="name">Name</label>

				<input type="text" name="name" />

				<input type="submit" name="submit" value="Submit Your Name" />

		</form>
	</div>

</body>
</html>