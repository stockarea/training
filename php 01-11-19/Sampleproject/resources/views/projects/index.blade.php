<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<h1>Laraprojects</h1>
@foreach ($projects as $project)
<li>
<a href="/projects/{{ $project->id }}">
	{{$project->title }}</li>
	</a>
@endforeach
</body>
</html>