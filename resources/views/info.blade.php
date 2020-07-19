@extends('layouts.masterpage')

@section('content')
<div class="container pt-2 pb-3">
    <div class="row">
        <h2 class="col-lg-12">Chi Tiết Bài Viết</h2>
    </div>
    <form class="row" id="form form-add-post" action="">
        <div class="title col-lg-12">
            
            <label for="">
                Tiêu đề bài viết 
            </label><br>
            <p>{{$data->title}}</p>
            
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Hình ảnh</label><br>
            <?php 
                        $image = str_replace("[","",$data->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
                    ?>
                <td>@for($i = 0; $i < 4; $i++)<img src="{{$dirs[$i]}}" class="w-50" alt="">@endfor</td> 
              
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Nội dung bài viết</label><br>
            <p>{{$data->content}}</p>
              
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                        <label for="">Người đăng</label>
                    <div class="phone d-flex">
                        <p>{{$data->content}}</p>
                    </div>
                </div>            
                <div class="col-lg-6">
                        <label for="">Số điện thoại</label>
                    <div class="fullname">
                       <p>{{$data->phone_number}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="gia col-lg-3">
                    <label for="">Giá</label><br>
                     <p>{{$data->price}}</p>
                </div>
                <div class="type col-lg-3">
                    <label for="">Thể loại</label><br>
                     <p>{{$data->type}}</p>
                </div>
                <div class="dtich col-lg-3">
                    <label for="">Diện tích (m<sup>2</sup>)</label><br>
                     <p>{{$data->acreage}}</p>
                </div>
                <div class="num-bed-room col-lg-3">
                    <label for="">Số phòng ngủ</label><br>
                     <p>{{$data->room_number}}</p>
                </div>
                <div class="tien-ich col-lg-12">
                    <label for="">Tiện ích</label><br>
                     <p>{{$data->utilities}}</p>
                </div>
                
                 <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select name="province" id="province" class="form-control drop">
                    <option value="-1">--Thành phố--</option>
                       
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select id="district" name="selValue" class="form-control">
                        <option value="-1">--Quận/Huyện--</option>              
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select id="ward" name="selValue" class="form-control">
                        <option value="ward">--Phường--</option>
                       
                    </select>
                </div>
                
            </div>
        </div>
        
    </form>
</div>
@stop

