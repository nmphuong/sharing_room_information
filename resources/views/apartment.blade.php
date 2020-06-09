@extends('layouts.masterpage')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{url('images/bg_5.jpg')}});"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate mb-0 text-center">
				<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
								class="fa fa-chevron-right"></i></a></span> <span>APARTMENT <i
							class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-0 bread">APARTMENT</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
<div class="container-fluid">
	<form class="d-flex justify-content-center">
		<div class="form-group m-3">
			<select class="form-control" id="location_opt">
				<option value="-1" selected>Toàn quốc</option>
				<option value="0">TP Ho Chi Minh</option>
				<option value="1">Ha Noi</option>
				<option value="2">Da Nang</option>
				<option value="3">Vung Tau</option>
				<option value="4">Can Tho</option>
			</select>
		</div>
		<div class="form-group m-3">
			<select class="form-control" id="location_opt">
				<option value="-1" selected>Chọn khoảng giá</option>
			</select>
		</div>
		<div class="form-group m-3">
			<select class="form-control" id="location_opt">
				<option value="-1" selected>Diện tích tổng</option>
			</select>
		</div>
		<div class="form-group m-3">
			<select class="form-control" id="location_opt">
				<option value="-1" selected>Lọc nâng cao</option>
			</select>
		</div>
	</form>
</div>
	<div class="container-fluid px-md-5">
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
						</div>
					</div>
					<div class="text pt-3 px-3 pb-4 text-center">
						<div class="faded">
							<p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
									đ</u></p>
							<h2><a href="#">Nha tro cho thue quan 12</a></h2>
							<span class="position">Minh Phuong</span><span>|</span>
							<span class="position">Tin Uu tien</span><span>|</span>
							<span class="position">TP HCM</span>
							<a href="#" class="btn btn-primary">View</a>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-facebook"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
						</div>
					</div>
					<div class="text pt-3 px-3 pb-4 text-center">
						<div class="faded">
							<p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
									đ</u></p>
							<h2><a href="#">Nha tro cho thue quan 12</a></h2>
							<span class="position">Minh Phuong</span><span>|</span>
							<span class="position">Tin Uu tien</span><span>|</span>
							<span class="position">TP HCM</span>
							<a href="#" class="btn btn-primary">View</a>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-facebook"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
						</div>
					</div>
					<div class="text pt-3 px-3 pb-4 text-center">
						<div class="faded">
							<p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
									đ</u></p>
							<h2><a href="#">Nha tro cho thue quan 12</a></h2>
							<span class="position">Minh Phuong</span><span>|</span>
							<span class="position">Tin Uu tien</span><span>|</span>
							<span class="position">TP HCM</span>
							<a href="#" class="btn btn-primary">View</a>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-facebook"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
						</div>
					</div>
					<div class="text pt-3 px-3 pb-4 text-center">
						<div class="faded">
							<p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
									đ</u></p>
							<h2><a href="#">Nha tro cho thue quan 12</a></h2>
							<span class="position">Minh Phuong</span><span>|</span>
							<span class="position">Tin Uu tien</span><span>|</span>
							<span class="position">TP HCM</span>
							<a href="#" class="btn btn-primary">View</a>
							<ul class="ftco-social text-center">
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"
										class="d-flex align-items-center justify-content-center"><span
											class="fa fa-facebook"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@stop