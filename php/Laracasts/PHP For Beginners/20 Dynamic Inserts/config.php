<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

	return [

		'database' => [

			'name' => 'myToDos',
			'username' => 'root',
			'password' => 'root',
			'connection' => 'mysql:host=localhost',
			'options' => [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]
		]

	];