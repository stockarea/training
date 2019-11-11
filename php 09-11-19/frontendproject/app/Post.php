<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
class Post extends Model
{
	  protected $guarded = [];

    use Rateable;

    
    public function tasks()
    {
    	return $this->hasMany(Task::class);

    }

    public function addTask($task)
    {
    	$this->tasks()->create($task);
    	// return Task::create([
    	// 	'profile_id' => $this->id,
    	// 	'description' => $description

    	// ]);
    }
}
