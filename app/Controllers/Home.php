<?php

namespace App\Controllers;

class Home extends BaseController
{

	// main page
	public function index()
	{
		// create model instance
		$taskModel = model('App\Models\taskModel');

		// pull data from database through model
		$tasks = $taskModel->findAll();
		$data['tasks'] = $tasks;

		// parse data to view
		return view('welcome_message', $data );
	}

	// permanently delete existing task from database
	public function deleteTask($id){
		// create model instance
		$taskModel = model('App\Models\taskModel');

		// delete task in database, no error checking is currently implemented
		$taskModel->delete($id);

		// redirect to homepage
		return redirect()->to(base_url().'/public'); 
	}

	// change status of task
	public function statusTask($id, $status){
		// create model instance
		$taskModel = model('App\Models\taskModel');

		// change status
		if ($status == '0') {
			$status = '1';
		} else{
			$status = '0';
		}

		// delete task in database, no error checking is currently implemented
		$data = [
		    'task_progress' => $status
		];
		$taskModel->update($id, $data);

		// redirect to homepage
		return redirect()->to(base_url().'/public'); 
	}

	// create new task
	public function newTask(){
		// get form data
		$data = $this->request->getVar();

		// get task description
		$description = $data['Task'];

		// create model instance
		$taskModel = model('App\Models\taskModel');

		// delete task in database, no error checking is currently implemented
		$data = [
		    'task_description' => $description
		];
		$taskModel->insert($data);

		// redirect to homepage
		return redirect()->to(base_url().'/public'); 
	}
}
