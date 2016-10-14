<?php 

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todo');

require 'index.view.php';