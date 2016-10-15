<?php 

// var_dump($_REQUEST['age']);
// var_dump('You typed ' . $_POST['name']);

$app['database']->insert('users', ['name' => $_POST['name']]);


header('Location: /');