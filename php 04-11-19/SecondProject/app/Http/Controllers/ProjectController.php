<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

     public function index()
    {
        
       

    	$profiles = Profile::where('user_id', auth()->id())->get();


    	return view('projects.index',compact('profiles'));
    }
     public function create()
    {

    	return view('projects.create');
    }

     public function show(Profile $profile)
     {
     	// abort_unless(auth()->user()->owns($profile),403);
     	
        $this->authorize('view', $project);
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
    	Profile::create(request()->validate([
    		'name' => ['required', 'min:5'] ,
    		'description' => ['required', 'min:6']
    	]));
   
   Profile::create($attributes + ['user-id' => auth()->id()]);

    		return redirect('/projects');
    }

}
