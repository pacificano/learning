<?php 

$config = require 'config.php';
require 'database/connection.php';
require 'database/queryBuilder.php';



return new QueryBuilder( 
	Connection::make($config['database']) 
);