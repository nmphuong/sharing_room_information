@extends('layouts.masterpage')

@section('content')
<div class="container pt-2 pb-3">
    <div class="row">
        <h1 class="col-lg-12">Chi Tiết Bài Viết</h1>
    </div>
    <form class="row" id="form form-add-post" action="">
        <div class="title col-lg-12">
            
            
               <h3>Tiêu đề bài viết </h3> <br>
            
            <p>{{$data->title}}</p>
            
        </div>
        <div class="content col-lg-12 mb-2">
           <h3>Hình ảnh </h3> <br>
            <?php 
                        $image = str_replace("[","",$data->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
            ?>
                <td>@for($i = 0; $i < 4; $i++)<img src="{{$dirs[$i]}}" class="w-50 img-fluid img-thumbnail" alt="">@endfor</td> 
              
        </div>
        <div class="content col-lg-12 mb-2">
            <h3>Nội dung bài viết </h3> <br>
            <p>{{$data->content}}</p>
              
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                        <h3>Người đăng </h3> <br>
                    <div class="phone d-flex">
                        <p></p>
                    </div>
                </div>            
                <div class="col-lg-6">
                        <h3>Số điện thoại </h3> <br>
                    <div class="fullname">
                       <p>{{$data->phone_number}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="gia col-lg-3">
                    <h3>Giá:  </h3> <br>
                     <p>{{$data->price}} đ</p>
                </div>
                <div class="type col-lg-3">
                    <h3>Thể loại</h3> <br>
                     <p>{{$data->type}}</p>
                </div>
                <div class="dtich col-lg-3">
                    <h3>Diện tích (m<sup>2</sup>)</h3> <br>
                    
                     <p>{{$data->acreage}}</p>
                </div>
                <div class="num-bed-room col-lg-3">
                    <h3>Số phòng</h3> <br>
                     <p>{{$data->room_number}}</p>
                </div>
                <div class="tien-ich col-lg-12">
                    <h3>Tiện ích</h3> <br>
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
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                    <a class="btn btn-success  fa fa-check-square-o" href="{{asset('/approval')}}" type="submit"> Duyệt</a>
                    <!-- <a type="submit" class="btn btn-warning fa fa-comments"> </a> -->
                    <a type="submit" href="#" class="btn btn-danger fa fa-times"> Hủy</a>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
