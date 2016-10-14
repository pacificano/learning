<?php 

require '15.task.php';

$query = require '15.bootstrap.php';

$tasks = $query->selectAll('todo', 'Task');

require '15.view.php';