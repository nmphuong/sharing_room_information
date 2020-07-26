@extends('layouts.masterpage')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate mb-0 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{asset('/')}}">Trang chủ <i
									class="fa fa-chevron-right"></i></a></span> <span>Liên hệ</span></p>
					<h1 class="mb-0 bread">Liên Hệ</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper px-md-4">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Địa chỉ:</span> 65 Huỳnh Thúc Kháng, Quận 1, Thành Phố Hồ Chí Minh</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Hotline:</span> <a href="tel://1234567920">+ 123 456 789</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Email:</span> <a href="mailto:info@yoursite.com">demo@gmail.com</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Website</span> <a href="#">shareroominfo.com</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Liên hệ với chúng tôi</h3>
									<form method="GET" action="{{asset('contact/sendcontact')}}" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											@if (session('success'))
												<div class="alert alert-primary text-center col-12">
													{{ session('success') }}
												</div>
											@endif
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Họ và tên</label>
													<input type="text" class="form-control" name="fullname" id="name"
														placeholder="Họ và tên" required value="Nguyễn Minh Phương">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Địa chỉ email</label>
													<input type="email" class="form-control" name="email" id="email"
														placeholder="Email" required value="nguyenminhphuong25111999@gmail.com">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Tiêu đề</label>
													<input type="text" class="form-control" name="subject" id="subject"
														placeholder="Tiêu đề" required value="Title contact test">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Nội dung</label>
													<textarea name="message" class="form-control" id="message" cols="30"
														rows="10" placeholder="Nội dung" required minlength="20" value="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum cumque eaque maiores necessitatibus, praesentium accusantium provident iusto, harum aut, repellendus libero inventore error consequatur natus omnis quaerat. Assumenda, sequi. Reiciendis!Consequatur repellat repellendus quae, eius eum voluptate esse, alias, quas accusantium explicabo mollitia! Veniam doloremque saepe libero, velit blanditiis temporibus. Laboriosam libero quam nisi labore ipsum fugiat sequi rerum mollitia.</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Gửi" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 order-md-first d-flex align-items-stretch">
								<div id="map" class="map">
									<iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.757128223904!2d106.70025589236005!3d10.771869313777652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCBDYW8gVGjhuq9uZw!5e0!3m2!1svi!2s!4v1591378466804!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop