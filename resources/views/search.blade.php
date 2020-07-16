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


@include('menus.criterion')
<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <h3 style="font-family: 'Lobster', cursive!important;" class="text-danger f-arial">{{$amount}} kết quả tìm thấy</h3>
            </div>
        </div>
        <div class="row">
        @foreach ($result as $room)

            <div class=" col-6 col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                        $image = str_replace("[","",$room->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
                    ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}}); background-size: cover; background-position: center; background-repeat: no-repeat;"> </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($room->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="#">{{$room->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <!-- <span class="position">{{$room->fullname}}</span><span> - </span> -->
                            <span class="position">{{$room->_name}}</span><br>
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