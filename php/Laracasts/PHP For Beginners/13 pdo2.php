<?php 

// try {

// 	$pdo = new PDO('mysql:localhost;port=8889;dbname=myToDos', 'root', 'root');	

// } catch (PDOException $e) {

// 	die('Could not connect.');

// }

// require '13.view.php';

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "myToDos";

// // Create connection
// // $conn = new mysqli($servername, $username, $password, $dbname);

// // // Check connection
// // if ($conn->connect_error) {
// //     die("Connection failed: " . $conn->connect_error);
// // }


// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// }
// catch(PDOException $e)
//     {
//     echo "Error: " . $e->getMessage();
//     }

require '13.task.php';
require '13.functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);




// var_dump($result[2]->description);

require '13.view.php';