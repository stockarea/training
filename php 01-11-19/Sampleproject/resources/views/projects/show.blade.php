@extends('layout')

@section('content')
<h1 class="title">{{ $project->title }}</h1>
<p>
	<a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>
@endsection