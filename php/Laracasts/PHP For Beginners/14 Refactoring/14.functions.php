<?php 

// function connectToDb(){
// 	try {
// 		return new PDO("mysql:host=localhost;dbname=myToDos", "root", "root");
// 	} catch (PDOException $e) {
// 		die($e->getMessage());
// 	}
// }




// function fetchAllTasks($pdo){
// 	$statement = $pdo->prepare('select * from todo');
// 	$statement->execute();

// 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }