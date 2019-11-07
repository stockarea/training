@extends('layout')

@section('content')
<div class="title">
<h1>Edit Profile</h1>
</div>
<form method="POST" action="/projects/{{ $profile->id }}" style="margin-bottom:lem;">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
<div class="field">
	<label class="label" for="title">Name</label>
	<div class="control">
		<input type="text" class="input" name="name" placeholder="Title" value="{{ $profile->name }}">
	</div>
		
	</div>
<div class="field">
	<label class="label" for="description">Description</label>
	<div class="control">
		<textarea name="description" class="textarea" >{{ $profile->description }}</textarea>

	</div>
		
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Update</button>
</div></div>

	include('errors')

</form>

<form method="POST" action="/projects/{{ $profile->id }}">
@method('DELETE')
@csrf
		<div class="field">
		<div class="control">
			<button type="submit" class="button">Delete</button>
</div></div>

</form>


@endsection
