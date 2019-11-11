@extends('layout')

@section('content')
<h1 class="title">{{ $profile->name }}</h1>
<h2 class="">{{ $profile->description }}</h2>
 @auth
        <p>You are logged in as {{ Auth::user()->name }}!</p>
  
<p>
	<a href="/projects/{{ $profile->id }}/edit">Edit</a>
</p>
 @endauth
@if ($profile->tasks->count())

<div>
	@foreach  ($profile->tasks as $task)
	
	<div>
<form method="POST" action="/completed-tasks/{{ $task->id }}">
 @if ($task->completed)
 @method('DELETE')
 @endif

	@csrf
	<label class="checkbox" for="completed">
		<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked':'' }}>

		{{ $task ->description}}
	</label>
</form>
	</div>
	@endforeach
</div>

@endif



<form method="POST" action="/projects/{{ $profile->id }}/tasks" class="box">
	@csrf

	<div class="field">
		<label class="label" for="description">New Task</label>
		<div class="control">
			<input type="text" class="input" name="description" placeholder="New Task">
		</div>
	</div>
<div class="field">
	<div class="control">
		<button type="submit" class="button is-link">Add Task</button>
	</div>
</div>
@include('errors')
</form>
@endsection