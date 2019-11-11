@extends('layout')
@section('content')
	<h1>ProfileList</h1>
@foreach ($profiles as $profile)
<li>
<a href="/projects/{{ $profile->id }}">
	{{$profile->name }}
	</a>
	<input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $profile->averageRating }}" data-size="xs" disabled="">
	</li>
@endforeach
<script type="text/javascript">
    $("#input-id").rating();
</script>
@endsection