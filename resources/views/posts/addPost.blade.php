@extends('layouts.masterpage')
@section('content')

<div class="container pt-2 pb-3">
    <div class="row">
        <h2 class="col-lg-12">Đăng tin</h2>
    </div>
    <form class="row" id="form form-add-post">
        <div class="title col-lg-12">
            <label for="">
                Tiêu đề bài viết
            </label>
            <textarea name="" id="" class="col-lg-12" placeholder="Tiêu đề bài viết..." style="resize: none;"></textarea>
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Nội dung bài viết</label>
            <textarea class="col-12" name="description" id="edt-ct-pt" placeholder="Nội dung bài viết..."></textarea>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                        <label for="">Số điện thoại</label>
                    <div class="phone d-flex">
                        <select name="" id="" class="form-control col-2" style="border-radius: 0;">
                            <option value="">+84</option>
                        </select>
                        <input type="text" class="form-control" placeholder="380956358...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="gia col-lg-4">
                    <label for="">Giá</label>
                    <input type="text" placeholder="1.000.000đ..." class="form-control col-12">
                </div>
                <div class="type col-lg-4">
                    <label for="">Thể loại</label>
                    <select name="" id="" class="form-control">
                    @foreach ( $type_post as $tp )
                        <option value="{{$tp->typeId}}">{{$tp->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="dtich col-lg-4">
                    <label for="">Diện tích (m<sup>2</sup>)</label>
                    <input type="text" placeholder="20.5..." class="form-control col-12">
                </div>
                <div class="tien-ich col-lg-6">
                    <label for="">Tiện ích</label>
                    <input type="text" placeholder="Gần cao tốc..." class="form-control col-12">
                </div>
                <div class="num-bed-room col-lg-6">
                    <label for="">Số phòng ngủ</label>
                    <input type="text" placeholder="1..." class="form-control col-12">
                </div>
                 <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select name="province" id="province" class="form-control drop">
                        <option value="-1">--Thành phố--</option>
                    @foreach ( $province as $prov )
                        <option value="{{$prov->id}}">{{$prov->_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select id="district" name="selValue" class="form-control">
                        <option value="-1">--Quận/Huyện--</option>
                        @foreach ( $district as $dist )
                            <option value="{{$dist->id}}">{{$dist->_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select id="ward" name="selValue" class="form-control">
                        <option value="ward">--Phường--</option>
                        @foreach ( $ward as $war )
                            <option value="{{$war->id}}">{{$war->_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <div id="add_img">
                        <input name="image_post" type="file" class="form-control-file"  accept="image/*"/>
                    </div>
                   <button id="add_element_img" type="button" class="btn btn-primary">Thêm hình ảnh</button>
                </div>
            </div>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-info" type="submit">Tải lên</button>
                    <button type="submit" class="btn btn-danger">Hủy</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
