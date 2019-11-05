@extends('layout')
@section('content')
	<h1>ProfileList</h1>
@foreach ($profiles as $profile)
<li>
<a href="/projects/{{ $profile->id }}">
	{{$profile->name }}</li>
	</a>
@endforeach
@endsection