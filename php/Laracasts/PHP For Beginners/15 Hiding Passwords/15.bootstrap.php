<?php 

$config = require '15.config.php';
require '15.connection.php';
require '15.queryBuilder.php';



return new QueryBuilder( 
	Connection::make($config['database']) 
);