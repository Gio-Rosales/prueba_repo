<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo','Default') | Panel de Admin</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('admin.template.nav')
<section>
	@yield('contenido')	
</section>
	<script type="text/javascript" src="{{ asset('plugins/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>