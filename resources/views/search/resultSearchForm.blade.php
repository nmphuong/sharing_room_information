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

@include('menus.criterion')

{{-- Special --}}
<section class="ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row pb-2 mb-0">
            <div class="col-md-7 heading-section text-left ftco-animate">
                <p style="font-family: 'Lobster', cursive!important;" class="h4 f-arial">{{$countResult}} kết quả tìm kiếm cho kết quả: {{$key}}</p>
            </div>
        </div>
        <div class="row" id="new_special" name="new_special">
        
        @foreach ($result as $res)
            <div class=" col-6 col-md-3 col-lg-2 ftco-animate">
                <div class="staff"><a href="detail.html">
                    <div class="img-wrap d-flex align-items-stretch" style="height: 150px;">
                    <?php 
                    //dd($roomOfUserVip);
                        $image = str_replace("[","",$res->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($roomVip->image ,$dirs); 
                    ?>
                        <div class="img align-self-stretch" style="background-image: url({{$dirs[0]}}); background-size: cover; background-position: center; background-repeat: no-repeat;"> </div>
                    </div></a>
                    <div class="text pb-4 text-center">
                        <div class="faded">
                            <p class="mb-2 price text-danger"><span class="price text-danger">{{number_format($res->price, 0, '', ',')}}</span><u>
                                    đ</u></p>
                            <div class="p-1" style="overflow: hidden; line-height: 1.5em; height: 3em;"><a href="#">{{$res->title}}</a></div>
                            <p style="line-height: 1em;" class="mb-0">...</p>
                            <span class="position">{{$res->fullname}}</span><span> - </span>
                            <span class="position">{{$res->_name}}</span><br>
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

@stop