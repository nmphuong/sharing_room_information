@extends('layouts.masterpage')

@section('content')
@foreach ($post as $data)
    <div class="container pt-2 pb-3">
    <form class="row" id="form form-add-post" action="" method="post">
        <div class="title col-lg-12">
            <p class="h3">{{$data->title}}</p>
        </div>
        <div class="content col-lg-12 mb-2">
            <?php 
                        $image = str_replace("[","",$data->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
            ?>
            {{-- <div class="row m-0 p-0">
                @for($i = 0; $i < count($dirs); $i++)
                    <div class="col-lg-3 p-0">
                        
                            if($dirs[$i] == ""){
                                $dom = "";
                            }
                            else {
                                $dom = "<img src=".asset('uploads/'.$dirs[$i])." class='w-100 img-fluid img-thumbnail' alt=''>";
                            }
                        {!! $dom !!}
                    </div>
                @endfor
            </div> --}}
              

<div id="carousel" class="carousel">
  <div class="slides">
    @for($i = 0; $i < count($dirs); $i++)
        <div class="slide" data-state="active">
            {{-- <img src="https://i.ytimg.com/vi/-zETIJWCw64/maxresdefault.jpg" width="100%" class="image_slide"> --}}
            <?php 
                if($dirs[$i] == ""){
                    $dom = "";
                }
                else {
                    $data_state = "";
                    if($i == 0){
                        $data_state = $data_state."data-state='active'";
                    }
                    $dom = "<img src=".asset('uploads/'.$dirs[$i])." ".$data_state." class='w-100 img-fluid img-thumbnail image_slide' alt='' style='width: 100%; height: 400px;border: 0; padding: 0; margin: 0;'>";
                }
            ?>
            {!! $dom !!}
        </div>
    @endfor
  </div>
  <div class="indicators">
    <?php 
        $image = str_replace("[","",$data->image);
        $image = str_replace("]","",$image);
        $image = str_replace("`","",$image);
        $dirs = explode(',', $image);
        //dd($room->image ,$dirs); 
    ?>
   @for($i = 0; $i < count($dirs); $i++)
    {{-- <input class="indicator" name="indicator" data-slide="1" data-state="active" checked type="radio" />
    <input class="indicator" name="indicator" data-slide="2" type="radio" /> --}}
    <?php 
        if($dirs[$i] == ""){
            $dom = "";
        }
        else {
            $data_state = "";
            if($i == 0){
                $data_state = $data_state."data-state='active' checked";
            }
            $dom = "<input class='indicator' name='indicator' data-slide='".$i."' ".$data_state." type='radio' />";
        }
    ?>
    {!! $dom !!}
    @endfor
  </div>
</div>
<script>
    var carousel = document.getElementById('carousel');
    var slide = document.getElementsByClassName('image_slide').length;
    var slides = slide;
    var speed = 5000; // 5 seconds
    function carouselHide(num) {
        indicators[num].setAttribute('data-state', '');
        slides[num].setAttribute('data-state', '');
        slides[num].style.opacity=0;
    }
    function carouselShow(num) {
        indicators[num].checked = true;
        indicators[num].setAttribute('data-state', 'active');
        slides[num].setAttribute('data-state', 'active');
        slides[num].style.opacity=1;
    }
    function setSlide(slide) {
        return function() {
            for (var i = 0; i < indicators.length; i++) {
                indicators[i].setAttribute('data-state', '');
                slides[i].setAttribute('data-state', '');
                carouselHide(i);
            }
            indicators[slide].setAttribute('data-state', 'active');
            slides[slide].setAttribute('data-state', 'active');
            carouselShow(slide);
            clearInterval(switcher);
        };
    }
    function switchSlide() {
        var nextSlide = 0;
        for (var i = 0; i < indicators.length; i++) {
            if ((indicators[i].getAttribute('data-state') == 'active') && (i !== (indicators.length-1))) {
                nextSlide = i + 1;
            }
            carouselHide(i);
        }
        carouselShow(nextSlide);
    }
    if (carousel) {
        var slides = carousel.querySelectorAll('.slide');
        var indicators = carousel.querySelectorAll('.indicator');

        var switcher = setInterval(function() {
            switchSlide();
        }, speed);

        for (var i = 0; i < indicators.length; i++) {
            indicators[i].addEventListener("click", setSlide(i));
        }
    }
</script>
</div>
        <div class="content col-lg-12 mb-2">
        
            <p class="mb-2 price text-danger h4"><span>{{number_format($data->price, 0, '', ',')}}</span><u>đ</u>&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-secondary">{{$data->acreage}}m<sup>2</sup></small></p>
            <p>{{$data->content}}</p>
              
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="phone">
                        <p>{{$data->fullname}}</p>
                        <p>Số điện thoại: <a href="tel:{{"0" . $data->phone_number}}">{{"0" . $data->phone_number}}</a></p>
                         <?php if($data->type == 1){
                            $type = "Loại hình: Phòng trọ";
                        } else if($data->type == 2){
                            $type = "Loại hình: Căn hộ";
                        } else if($data->type == 3){
                            $type = "Loại hình: Nhà nguyên căn";
                        } else {
                            $type = "Loại hình: Khác";
                        } ?>
                        <p>
                        {!! $type !!}
                        </p>
                        <p>Diện tích: {{$data->acreage}}m<sup>2</sup></p>
                        <p>Số phòng: {{$data->room_number}}</p>
                        <?php if($data->utilities == null){
                                $utilities = "";
                            }
                            else {
                                $utilities = $data->utilities;
                            }
                            ?>
                        <p>{!! $utilities !!}</p>
                        <?php if($data->ward < 1) {
                                $ward_prefix = "";
                                $ward_name = "";
                            } else {
                                $ward_prefix = $data->ward_prefix;
                                $ward_name = $data->ward_name;
                            } ?>
                        <p>Địa chỉ: <span>{{$data->province_name}}</span><span>, {{$data->_prefix}}&nbsp;{{$data->_name}}</span><span>, {!!$ward_prefix!!}&nbsp;{!!$ward_name!!}</span></p>
                    </div>
                </div>     
            </div>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                 <?php 
                            $hidden = '';
                            if($data->status == 3){
                            $hidden = "disabled";
                        }?>
                    <a class="btn btn-success fa fa-check-square-o {!! $hidden !!}" href="{{asset('manager-post/edit?post='.$data->id)}}" type="submit">Sửa</a>
                    <!-- <a type="submit" class="btn btn-warning fa fa-comments"> </a> -->
                   <a onclick="return confirm('Bạn chắc chắn muốn xóa bài viết!');" href='{{asset('manager-post/delete?post='.$data->id)}}' class="btn btn-danger text-white {!! $hidden !!}"><i class="fa fa-trash-o"></i> Xóa</a><input style="display: none;" name='post' value='{{$data->id}}'>
                    <a class="btn btn-success fa fa-arrow-left" href="{{asset('manager-post')}}" type="submit"> Trở về</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
@stop