<!DOCTYPE html>
<html lang="en">

<head>
	<title>SHARING ROOM INFORMATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>

	<div class="container-fluid px-md-3  pt-2 pt-md-3">
		<div class="row justify-content-between">
			<div class="col-md-8 order-md-last">
				<div class="row">
					<div class="col-md-6 text-center">
						<a class="navbar-brand" href="index.html">
							<div class="w-50 m-auto">
								<img class="w-25" src="{{asset('images/logo.png')}}" alt="">
							</div>
							Sharing Room <span>Information</span>
						</a>
					</div>
					<div class="col-md-4 d-md-flex mb-md-0 mb-3">
						<form action="#" class="searchform order-lg-last">
							<div class="form-group d-flex">
								<input type="text" class="form-control pl-3" placeholder="Tiềm kiếm...">
								<button type="submit" placeholder="" class="form-control search"><span
										class="fa fa-search"></span></button>
							</div>
						</form>
					</div>
				<a href="{{asset('/user')}}" class="col-md-2 d-md-flex mb-md-0 mb-3 justify-content-center">
					<div class="ml-auto mr-auto" style="width: 50px; height: 50px; border-radius: 50%; background-image: url('images/house.jpg'); background-size: cover;">
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="social-media">
					<p class="mb-0 d-flex">
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
				<li class="nav-item active"><a href="{{asset('/')}}" class="nav-link">Trang chủ</a></li>
					<li class="nav-item"><a href="{{asset('/motel-room')}}" class="nav-link">Phòng trọ</a></li>
					<li class="nav-item"><a href="{{asset('/apartment')}}" class="nav-link">Căn hộ</a></li>
					<li class="nav-item"><a href="{{asset('/house')}}" class="nav-link">Nhà nguyên căn</a></li>
					<li class="nav-item"><a href="{{asset('/graft')}}" class="nav-link">Ở ghép</a></li>
					<li class="nav-item"><a href="{{asset('/about')}}" class="nav-link">Giới thiệu</a></li>
					<li class="nav-item"><a href="{{asset('/contact')}}" class="nav-link">Liên hệ</a></li>
					<li class="nav-item"><a href="{{asset('/forum')}}" class="nav-link">Forum</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
    
    @yield('content')
	

    @include('menus.footer')



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}" defer></script>
	<script src="{{ asset('js/popper.min.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}" defer></script>
	<script src="{{ asset('js/scrollax.min.js') }}" defer></script>
	{{-- <script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
	{{-- <script src="{{asset('js/google-map.js')}}" defer></script> --}}
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js') }}" defer></script> --}}
	<script src="{{asset('js/main.js')}}" defer></script>

</body>

</html>