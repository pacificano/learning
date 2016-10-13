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



try {

	$pdo = new PDO("mysql:host=localhost;dbname=myToDos", "root", "root");

} catch (PDOException $e) {

	die($e->getMessage());

}


$statement = $pdo->prepare('select * from todo');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($result[2]->description);

require '13.view.php';