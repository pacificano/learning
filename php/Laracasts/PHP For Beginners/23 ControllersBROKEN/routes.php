<?php 

$router->get('', 'pagesController@home');
$router->get('about', 'pagesController@about');
$router->get('contact', 'pagesController@contact');

// $router->post('names', 'controllers/add-name.php');



// var_dump($router->routes);