<!DOCTYPE html>
<html lang="en">

<head>
	<title>SHARING ROOM INFORMATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
					<div class="col-md-2 d-md-flex mb-md-0 mb-3">
						<button class="justify-content-end form-control border-0">
							<span class="fa fa-user-circle" style="font-size: 2em"></span>
					</button>
					</div>
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
	

    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Connect</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Motel Room</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Apartment</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Living</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>House</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Legal</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">65 Huynh Thuc Khang Street, District 1</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+038 990 2073</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text">managersourcecode@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>



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