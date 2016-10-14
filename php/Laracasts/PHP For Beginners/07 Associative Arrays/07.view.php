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
	<?php foreach ($person as $feature => $value) : ?>
		<li><?= $feature ?>:<?= $value ?></li>
	<?php endforeach; ?>
</ul>

</body>
</html>