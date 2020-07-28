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
            <div class="row m-0 p-0">
                @for($i = 0; $i < count($dirs); $i++)
                    <div class="col-lg-3 p-0">
                        <?php 
                            if($dirs[$i] == ""){
                                $dom = "";
                            }
                            else {
                                $dom = "<img src=".asset('uploads/'.$dirs[$i])." class='w-100 img-fluid img-thumbnail' alt=''>";
                            }
                        ?>
                        {!! $dom !!}
                    </div>
                @endfor
            </div>
              
        </div>
        <div class="content col-lg-12 mb-2">
        
            <p class="mb-2 price text-danger h4"><span>{{number_format($data->price, 0, '', ',')}}</span><u>đ</u>&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-secondary">{{$data->acreage}}m<sup>2</sup></small></p>
            <p>{{$data->content}}</p>
              
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
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
                        <p>Địa chỉ: <span>{{$data->province_name}}<span><span>, {{$data->_prefix}}&nbsp;{{$data->_name}}<span><span>, {{$data->ward_prefix}}&nbsp;{{$data->ward_name}}<span></p>
                    </div>
                </div>     
            </div>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                    <a class="btn btn-success  fa fa-check-square-o" href="{{asset('/approval/accept?post='.$data->id)}}" type="submit">Duyệt</a>
                    <!-- <a type="submit" class="btn btn-warning fa fa-comments"> </a> -->
                    <a type="submit" href="{{asset('approval')}}" class="btn btn-danger fa fa-times"> Hủy</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
@stop