<?php require('partials/head.php'); ?>

<ul>
	<?php foreach ($users as $user) : ?>

		<li><?= $user->name; ?></li>

	<?php endforeach; ?>
</ul>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">
	
	<input name="name">
	<button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>