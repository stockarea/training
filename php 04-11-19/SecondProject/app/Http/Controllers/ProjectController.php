<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\mail\ProfileCreated;

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
    /*    if (\Gate::denies('update, $profile'))
        {
            abort(403);
        }*/ 

      // $this->authorize('view', $profile);
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
   
   $attributes['user_id'] = auth()->id();
  $profile = Profile::create($attributes);
\Mail::to('karthick@stockarea')->send(
    new ProfileCreated($profile)
);

    		return redirect('/projects');
    }

    public function ratin(Request $request)
    {
     request()->validate(['rate' => 'required']);
     $profile = Profile::find($request->id);
     $rating = new \willvincent\Rateable\Rating;
     $rating->rating = $request->rate;
     $rating->user_id = auth()->user()->id;
     $profile->ratings()->save($rating);
     return redirect('/projects');
    }

}
