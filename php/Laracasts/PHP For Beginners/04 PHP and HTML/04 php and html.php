<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>

<header>
	<h1>
		<?php 

			// grab value from url
			// ie index.php?name=Tristan

			$name = $_GET['name'];
			echo 'Hello ' . $name;

		?>

		<!-- this is a shorthand to echo out whatever is in here -->
		<?= ' from ' . $_GET['location']; ?>

		<!-- for security purposes you should wrap your get commands in the htmlspecialchars function -->
		<?= ', ' . htmlspecialchars($_GET['country']);  ?>
		<!-- called sanitising our inputs -->

	</h1>
</header>

</body>
</html>