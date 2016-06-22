<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/algo.css') }}">
</head>
<body>
<h1>{{ $art->titulo }}</h1>
<hr>
<h3>{{ $art->user->name }} | {{ $art->categoria->nombre }} | 
@foreach($art->tags as $tag)
	{{ $tag->nombre }}
@endforeach
</h3>
</body>
</html>
