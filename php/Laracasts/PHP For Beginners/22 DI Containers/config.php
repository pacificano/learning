<?php 

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