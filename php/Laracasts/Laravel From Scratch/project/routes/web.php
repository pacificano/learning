<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {

// 	$people = ['Dre', 'Ice Cube', 'Snoop'];

//     return view('welcome', compact('people'));

// });



Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');


// Route::get('about', function(){
// 	return view('pages.about');
// });