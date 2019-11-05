@extends('layout')

@section('content')
<h1>Create New Projects</h1>

<form method="POST" action="/projects">
	{{ csrf_field() }}
	<div class="field">
		<label class="label" for="name">User Name</label>
	<div class="control">
		<input type="text" class="input {{ $errors->has('name')? 'is-danger' :''}}" name="name" placeholder="User title"  value="{{ old('name') }}">
	</div>
</div>
	<div class="field">
			<label class="label" for="description">Profile Description</label>
			<div class="control">
		<textarea name="description" class="textarea" placeholder=" description" >{{ old('description')}}</textarea>
	</div>
</div>
	<div>

		<button typr="submit">Create Profile</button>
	</div>

	@if ($errors->any())
	<div class="notification is-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
</form>
@endsection