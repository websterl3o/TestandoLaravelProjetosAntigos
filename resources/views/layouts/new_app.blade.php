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
	<nav class="navbar navbar-expand-lg navbar-light nav-container">
		<a class="navbar-brand a-logo" href="#">
			<img class="logo" src="https://www.shareicon.net/data/512x512/2015/08/10/83207_paris_512x512.png" >
		</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class=" menu">
			<div class="navbar-collapse collapse menu-content" id="navbarSupportedContent" style="">
				<ul class="navbar-nav bd-navbar-nav row-fluid">
					<li class="nav-item">
						<a href="#" title="">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" title="">Turismo</a>
					</li>
					<li class="nav-item li-logo">
						<img class="logo" src="https://www.shareicon.net/data/512x512/2015/08/10/83207_paris_512x512.png" >
					</li>
					<li class="nav-item">
						<a href="#" title="">Culinaria</a>
					</li>
					<li class="nav-item">
						<a href="#" title="">Contato</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="/img/4766ea9e813b8a97e83ff73c71d1c503.png" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="/img/The-Louvre-In-Paris-hd-wallpapers-for-mobile-55685728.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="/img/thumb-1920-467022.jpg" alt="Third slide">
			</div>
		</div>
		<div class="filtro-bolinha"></div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Voltar</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Proximo</span>
		</a>
	</div>





	<div class="container-fluid pt-5 pb-5">
		<div class="row flex-xl-nowrap justify-content-center">
			@yield('content')
		</div>
	</div>
</body>
<script src="/JQuery/jquery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function slidestart(){
		$(".carousel-item").removeClass('active');
		$(".carousel-item").addClass('active');

		var img = $('.carousel-inner img');
		var carrousel = $('.carousel-item');
		var a = "";

		for (var i = 0; i < img.length; i++) {
			if(a == ""){
				console.log("iniciou");
				a = img[i].height;
				console.log("'a' recebeu "+img[i].height);
				console.log(img[i]);
			}
			else if(a > img[i].height){
				console.log("mudou");
				a = img[i].height;
				console.log("'a' recebeu "+img[i].height);
				console.log(img[i]);
			}
			if(i + 1 == i < img.length){
				$(".carousel-item").removeClass('active');
				$(carrousel[0]).addClass('active');
			}
		}

		return a;
	}
	$(()=>{
		var nav = $('.nav-container');

		$(window).scroll(function () {
			if ($(this).scrollTop() > 136) {
				nav.addClass("f-nav");
			} else {
				nav.removeClass("f-nav");
			}
		});

		$("div#carouselExampleControls img").css("height", slidestart());
		$("div#carouselExampleControls .filtro-bolinha").css("height", $("#carouselExampleControls").height());
	});
		
	// $(window).load(function() {
	// 	var imagens = $('.carousel-inner img');
	// 	var aux = 0;
	// 	for (var i = 0; i < $('.carousel-inner img').length; i++) {
	// 		console.log($(imagens[i]).height());
	// 	}
	// });
	// $('.carousel').carousel('next', function() {
	// 		var imagens = $('.carousel-inner img');
	// 		for (var i = 0; i < imagens.length; i++) {
	// 			if(imagens[i].hasClass('active')){
	// 				console.log(imagens[i]);
	// 			}	
	// 		}
	// 	});
	
</script>
</html>