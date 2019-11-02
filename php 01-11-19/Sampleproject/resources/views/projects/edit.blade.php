@extends('layout')

@section('content')
<div class="title">
<h1>Edit Project</h1>
</div>
<form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom:lem;">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
<div class="field">
	<label class="label" for="title">Title</label>
	<div class="control">
		<input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
	</div>
		
	</div>
<div class="field">
	<label class="label" for="description">Description</label>
	<div class="control">
		<textarea name="description" class="textarea" >{{ $project->description }}</textarea>

	</div>
		
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Update</button>
</div></div>

	
</form>

<form method="POST" action="/projects/{{ $project->id }}">
@method('DELETE')
@csrf
		<div class="field">
		<div class="control">
			<button type="submit" class="button">Delete</button>
</div></div>
</form>



@endsection
