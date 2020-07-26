@extends('layouts.masterpage')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg'); height: 200px!important;" data-stellar-background-ratio="0.5">
<div class="overlay" style="height: 200px!important;"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" style=" height: 200px!important;">
    <div class="col-md-9 ftco-animate mb-0 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{asset('/')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Phòng trọ</span></p>
        <h1 class="mb-0 bread">Phòng trọ</h1>
    </div>
    </div>
</div>
</section>
@include('menus.criterion')
<section class="ftco-section pt-2">
	<div class="container-fluid">
		<div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3 col-lg-2 ftco-animate">
                    <div class="staff"><a href="detail.html">
                        <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <?php 
                            $image = str_replace("[","",$post->image);
                            $image = str_replace("]","",$image);
                            $image = str_replace("`","",$image);
                            $dirs = explode(',', $image);
                            //dd($roomVip->image ,$dirs); 
                        ?>
                            <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}});">
                            </div>
                        </div></a>
                        <div class="text pb-4 text-center">
                            <div class="faded">
                                <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($post->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                                <h5><a href="#">{{$post->title}}</a></h5>
                                <span class="position">{{$post->fullname}}</span><span> - </span>
                                <span class="position">{{$post->_name}}</span><br>
                                <a href="#" class="btn btn-primary">Xem</a>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate m-0"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-heart"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
		<div class="row mt-5">
			<div class="col text-center">
                <div class="block-27">
                    <ul>
                    <li><a href="motel-room?page=1">&lt;&lt;</a></li>
                    @for ($i = 0 ; $i < $postCount ; $i++)
                        <li><a href="{{asset('motel-room?page='. ($i+1))}}">{{$i + 1}}</a></li>
                    @endfor
                    <li><a href="motel-room?page={{$postCount}}">&gt;&gt;</a></li>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>
@stop