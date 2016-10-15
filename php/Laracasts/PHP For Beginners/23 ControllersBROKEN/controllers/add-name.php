<?php 

// var_dump($_REQUEST['age']);
// var_dump('You typed ' . $_POST['name']);

App::get('database')->insert('users', ['name' => $_POST['name']]);


header('Location: /');