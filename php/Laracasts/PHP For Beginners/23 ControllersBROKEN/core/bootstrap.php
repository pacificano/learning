<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);



App::bind('config', require 'config.php');

App::bind('foo', 'bar');

// die(var_dump(App::get('foo')));

App::bind('database', new QueryBuilder( 
	Connection::make(App::get('config')['database']) 
));