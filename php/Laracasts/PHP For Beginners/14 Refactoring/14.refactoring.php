<?php 

require '14.task.php';

$query = require '14.bootstrap.php';

$tasks = $query->selectAll('todo', 'Task');
// die(var_dump($tasks));
require '14.view.php';