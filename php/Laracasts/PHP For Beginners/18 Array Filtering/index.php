<?php 


class Post {


	public $title;
	public $author;
	public $published;

	public function __construct($title, $author, $published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}


$posts = [

	new Post('My first post', 'TN', true),
	new Post('My second post', 'SD', false),
	new Post('My third post', 'MM', true),
	new Post('My fourth post', 'JC', false)
];


# ARRAY FILTER = filter array based on true or false
// // show false
// $unpublishedPosts = array_filter($posts, function($post){

// 	return ! $post->published;

// });

// // show true
// $publishedPosts = array_filter($posts, function($post){

// 	return $post->published;

// });



# ARRAY MAP = transform an object
// $modified = array_map(function ($post){

// 	return ['title' => $post->title];

// }, $posts);



# ARRAY COLUMN = pull a value from each item in the array
// $titles = array_column($posts, 'title');



# EXAMPLE OF MAKING AN ARRAY FROM ANOTHER ARRAY AND THEN GIVING IT ITS OWN KEYS
$posts = array_map(function ($post){
	return (array) $post;
}, $posts);

// sort array, choose which value to get, give it a key
$authors = array_column($posts, 'author', 'title');


var_dump($authors);