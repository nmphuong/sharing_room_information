@extends('layouts.masterpage')

@section('content')
<style>
a.cls:after  {
    content: 'Xem thêm...';
}

a.cls:not(.collapsed):after {
    content: 'Ẩn bớt...';
}
</style>
<!-- END nav -->
<section class="hero-wrap" style="background-image: url('images/house.jpg'); height: 70vh; position: relative; overflow: hidden;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100" style="position: absolute">
                    <h1 class="mb-4 text-danger">Nâng cấp tài khoản</h1>
                    <h3 class="mb-4 text-danger">Nâng cấp tài khoản thành VIP, sử dụng các chức năng
                        VIP vĩnh viễn.</h3>
                    <p>
                        
                        <a href="#" class="btn btn-secondary py-3 px-4">Xem chi tiết</a>
                        <a href="#" class="btn btn-info py-3 px-4">Đăng ký ngay</a>
                        <!-- <a href="#" class="btn btn-white py-3 px-4">Explore Now</a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('menus.criterion')

<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                    @foreach ($numPhongTro as $npt)
                        <strong class="number" data-number="{{$npt->numPhongTro}}">0</strong>
                    @endforeach
                        <span>Phòng trọ</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        @foreach ($numCanHo as $nch)
                            <strong class="number" data-number="{{$nch->numCanHo}}">0</strong>
                        @endforeach
                        <span>Căn hộ</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        @foreach ($numHouse as $nh)
                            <strong class="number" data-number="{{$nh->numHouse}}">0</strong>
                        @endforeach
                        <span>Nhà nguyên căn</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        @foreach ($numOGhep as $nog)
                            <strong class="number" data-number="{{$nog->numOGhep}}">0</strong>
                        @endforeach
                        <span>Ở ghép</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Special --}}
<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 style="font-family: 'Lobster', cursive!important;" class="text-danger f-arial">Tin Nổi Bật</h3>
            </div>
        </div>
        <div class="row" id="new_special" name="new_special">
        
        @foreach ($roomOfUserVip as $roomVip)
            <div class=" col-6 col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="{{asset('detail?post='.$roomVip->id)}}">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                    //dd($roomOfUserVip);
                        $image = str_replace("[","",$roomVip->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($roomVip->image ,$dirs); 
                    ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}}); background-size: cover; background-position: center; background-repeat: no-repeat;"> </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($roomVip->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="{{asset('detail?post='.$roomVip->id)}}">{{$roomVip->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$roomVip->fullname}}</span><span> - </span>
                            <span class="position">{{$roomVip->_name}}</span><br>
                            <a href="{{asset('detail?post='.$roomVip->id)}}" class="btn btn-primary">Xem</a>
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
    </div>
</section>
{{-- New --}}
<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 style="font-family: 'Lobster', cursive!important;" class="text-danger f-arial">Tin Mới Nhất</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($roomOfNew as $roomnew)
                <div class="col-md-3 col-lg-2 ftco-animate">
                    <div class="staff"><a href="{{asset('detail?post='.$roomnew->id)}}">
                        <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <?php 
                            $imagenew = str_replace("[","",$roomnew->image);
                            $imagenew = str_replace("]","",$imagenew);
                            $imagenew = str_replace("`","",$imagenew);
                            $dirsnew = explode(',', $imagenew);
                            //dd($roomVip->image ,$dirs); 
                        ?>
                            <div class="img align-self-stretch" style="background-image: url({{asset('/uploads/'.$dirsnew[0])}}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            </div>
                        </div></a>
                        <div class="text pb-4 text-center">
                            <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($roomnew->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="{{asset('detail?post='.$roomnew->id)}}">{{$roomnew->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$roomnew->fullname}}</span><span> - </span>
                            <span class="position">{{$roomnew->_name}}</span><br>
                            <a href="{{asset('detail?post='.$roomnew->id)}}" class="btn btn-primary">Xem</a>
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
    </div>
</section>
{{-- Love --}}
<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 style="font-family: 'Lobster', cursive!important;" class="text-danger f-arial">Tin Yêu Thích Nhất</h3>
            </div>
        </div>
        <div class="row">
        @foreach ($roomOfFavorite as $roomfavorite)
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="{{asset('detail?post='.$roomfavorite->id)}}">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                            $imagefavorite = str_replace("[","",$roomfavorite->image);
                            $imagefavorite = str_replace("]","",$imagefavorite);
                            $imagefavorite = str_replace("`","",$imagefavorite);
                            $dirsfavorite = explode(',', $imagefavorite);
                            //dd($roomVip->image ,$dirs); 
                        ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirsfavorite[0]}}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($roomfavorite->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="{{asset('detail?post='.$roomfavorite->id)}}">{{$roomfavorite->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$roomfavorite->fullname}}</span><span> - </span>
                            <span class="position">{{$roomfavorite->_name}}</span><br>
                            <a href="{{asset('detail?post='.$roomfavorite->id)}}" class="btn btn-primary">Xem</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate m-0">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-heart"></span></a>
                                </li>
                                <li class="ftco-animate m-0 fadeInUp ftco-animated">
                                    <span class="text-info" style="font-weight: bold;">{{$roomfavorite->favorite}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section class="ftco-section testimony-section ftco-no-pb">
    <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <!-- <span class="subheading">Testimonial</span> -->
                <h2 class="mb-3">Ý KIẾN NGƯỜI DÙNG</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach ( $review as $rev )
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4" style="height: 153px; overflow: hidden;">{{$rev->content}}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{$rev->avatar}}); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
                                        <div class="pl-3">
                                            <p class="name">{{$rev->fullname}}</p>
                                            <span class="position">User</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@stop