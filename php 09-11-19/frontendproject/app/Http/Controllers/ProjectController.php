<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

     public function index()
    {
        
     $posts = Post::all();
   return view('index',compact('posts'));

    }
     public function create()
    {

    	return view('projects.create');
    }

     public function show(Profile $profile)
     {
     	// abort_unless(auth()->user()->owns($profile),403);
    /*    if (\Gate::denies('update, $profile'))
        {
            abort(403);
        }*/ 

       $this->authorize('view', $profile);
     	return view('projects.show',compact('profile'));
     }
       public function edit(Profile $profile)
     {


     	return view('projects.edit',compact('profile'));
     }
       public function update(Profile $profile)
     {
      
       		$profile->update(request(['name','description']));
   
    	return redirect('/projects');
     }
       public function destroy(Profile $profile)
     {

     	$profile->delete();
     	return redirect('/projects');

     }
      
    public function store()
    { 
    	$attributes = (request()->validate([
    		'name' => ['required', 'min:5'] ,
    		'description' => ['required', 'min:6']
    	]));
    }
}
