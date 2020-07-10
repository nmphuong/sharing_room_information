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
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                    @foreach ($numPhongTro as $npt)
                        <strong class="number" data-number="{{$npt->numPhongTro}}">0</strong>
                    @endforeach
                        <span>Phòng trọ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        @foreach ($numCanHo as $nch)
                            <strong class="number" data-number="{{$nch->numCanHo}}">0</strong>
                        @endforeach
                        <span>Căn hộ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-4 mb-4">
                    <div class="text align-items-center">
                        @foreach ($numHouse as $nh)
                            <strong class="number" data-number="{{$nh->numHouse}}">0</strong>
                        @endforeach
                        <span>Nhà nguyên căn</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
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
        <div class="row">
        @foreach ($roomOfUserVip as $roomVip)
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                        $image = str_replace("[","",$roomVip->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($roomVip->image ,$dirs); 
                    ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}});"> </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($roomVip->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="#">{{$roomVip->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$roomVip->fullname}}</span><span> - </span>
                            <span class="position">{{$roomVip->_name}}</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-12 col-lg-12 ftco-animate">
                <div class="collapse" id="newsnews">
                    <div class="row">
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                    </div>
                </div>
                <a class="collapsed cls" data-toggle="collapse" href="#newsnews" style="float: right;" aria-expanded="false" aria-controls="collapseSummary"></a>
            </div>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                        <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                        </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                    đ</u></p>
                            <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                            <span class="position">Minh Phuong</span><span> - </span>
                            <span class="position">TP HCM</span><br>
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
            <div class="col-md-12 col-lg-12 ftco-animate">
                <div class="collapse" id="lovenews">
                    <div class="row">
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                        <div class="col-md-3 col-lg-2 ftco-animate">
                            <div class="staff"><a href="detail.html">
                                <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                                    <div class="img align-self-stretch" style="background-image: url(images/news_hot.jpg);">
                                    </div>
                                </div></a>
                                <div class="text pb-4 text-center">
                                    <div class="faded">
                                        <p class="mb-2 price text-danger"><span class="price text-danger">3.000.000</span><u>
                                                đ</u></p>
                                        <h5><a href="#">Nha tro cho thue quan 12</a></h5>
                                        <span class="position">Minh Phuong</span><span> - </span>
                                        <span class="position">TP HCM</span><br>
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
                    </div>
                </div>
                <a class="collapsed cls" data-toggle="collapse" href="#lovenews" style="float: right;" aria-expanded="false" aria-controls="collapseSummary"></a>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid px-md-5">
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
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 1</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 2</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 3</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 4</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4">Website rat huu ich, giup chung toi co the tim kiem nha tro nhanh
                                    chong, khi chung toi muon di chuyen den noi o moi.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/user_ninh.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Ninh Vo 5</p>
                                        <span class="position">User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop