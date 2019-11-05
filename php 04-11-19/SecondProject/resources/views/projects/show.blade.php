@extends('layout')

@section('content')
<h1 class="title">{{ $profile->name }}</h1>
<h2 class="">{{ $profile->description }}</h2>
<div>
	@foreach  ($profile->cvs as $cv)
	<ul>
	<li>{{ $cv ->firstname}}</li>
	<li>{{ $cv ->lastname}}</li>
	<li>{{ $cv ->education}}</li>
	</ul>
	@endforeach
</div>

<p>
	<a href="/projects/{{ $profile->id }}/edit">Edit</a>
</p>
@endsection