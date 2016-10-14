<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<style type="text/css">
		header, nav {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>

<nav>
	
	<ul>
		
		<ul><a href="about.php">About</a></ul>
		<ul><a href="contact.php">Contact</a></ul>
		<ul><a href="about-culture.php">Our Culture</a></ul>

	</ul>
</nav>



<ul>
	
	<?php foreach ($tasks as $task) : ?>

		<li>

			<?php if ($task->completed) : ?>

				<strike><?= $task->description; ?></strike>

			<?php else : ?>

				<?= $task->description; ?>

			<?php endif; ?>

		</li>

	<?php endforeach; ?>

</ul>



</body>
</html>