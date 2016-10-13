<?php 

class Task {

	public $description;

	public $completed = false;

	public function __construct($description){

		$this->description = $description;

	}

	public function isComplete(){
		return $this->completed;
	}

	public function complete(){
		$this->completed = true;
	}

}

$tasks = [
	new Task('Go to the store'),
	new Task('Finish the casts'),
	new Task('Clean my room')
];

$tasks[2]->complete();

require('12.view.php');

// dd($task->isComplete());

// dd($tasks);

// require '12.view.php'