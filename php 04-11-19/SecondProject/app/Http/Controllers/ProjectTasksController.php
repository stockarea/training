<?php

namespace App\Http\Controllers;

use App\Task;
use App\Profile;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{


public function store(Profile $profile)
{
$attributes = request()->validate(['description' => 'required']);
$profile->addTask($attributes);
	return back();
}

  public function update(Task $task)
  {
  // $task->update ([
  // 	'completed' => request()->has('completed')
  // ]);
$method = request()->has('completed')? 'complete' : 'incomplete';
$task->$method();
  return back(); 
  }
}
