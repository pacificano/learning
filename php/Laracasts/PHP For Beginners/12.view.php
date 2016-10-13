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
	
	<?php foreach ($tasks as $task) : ?>

		<?php if ($task->completed) : ?>

			<strike>

		<?php endif; ?>

		<li><?= $task->description; ?></li>

		<?php if ($task->completed) : ?>

			</strike>

		<?php endif; ?>

	<?php endforeach; ?>

</ul>



</body>
</html>