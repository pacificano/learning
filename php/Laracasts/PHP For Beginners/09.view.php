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



<ul>
	
	<?php foreach ($task as $heading => $value) : ?>

		<li><?= ucwords($heading); ?>: <?= $value ?></li>

	<?php endforeach; ?>

</ul>



<p>This is going to check if something is true or false...</p>
<p>Completed: <?= $task['completed'] ? 'True' : 'False'; ?></p>
<p>Is he a good guy: 
	<?php 
		if ($task['good guy']) {
			echo 'True';
		} else {
			echo 'False';
		}
	 ?>
</p>



<?php if ($task['due'] === 'today') : ?>

	<p>this is due today</p>

<?php else : ?>

	<p>not today</p>

<?php endif; ?>



<?php if (! $task['completed']) {
	echo 'not completed';
} ?>

</body>
</html>