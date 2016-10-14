<?php 

// paths are based from /index.php
$config = require 'config.php';

require 'core/router.php';
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';



return new QueryBuilder( 
	Connection::make($config['database']) 
);