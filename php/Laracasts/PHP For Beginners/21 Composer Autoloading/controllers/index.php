<?php 

// $tasks = $app['database']->selectAll('todo');
$users = $app['database']->selectAll('users');

require 'views/index.view.php';