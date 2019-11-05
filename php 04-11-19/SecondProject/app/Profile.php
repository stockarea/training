<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

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
