<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand a-logo" href="#">
			<img class="logo" src="https://www.shareicon.net/data/512x512/2015/08/10/83207_paris_512x512.png" >
		</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse collapse menu" id="navbarSupportedContent" style="">
			<ul class="navbar-nav bd-navbar-nav row-fluid">
				<li class="nav-item">
					<a href="" title="">Home</a>
				</li>
				<li class="nav-item">
					<a href="" title="">Turismo</a>
				</li>
				<li class="nav-item li-logo">
					<img class="logo" src="https://www.shareicon.net/data/512x512/2015/08/10/83207_paris_512x512.png" >
				</li>
				<li class="nav-item">
					<a href="" title="">Culinaria</a>
				</li>
				<li class="nav-item">
					<a href="" title="">Contato</a>
				</li>
			</ul>
		</div>
	</nav>






	<div class="container mt-5">
		@yield('content')
	</div>
</body>
<script src="/JQuery/jquery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(()=>{
		
		

	});
</script>
</html>