@extends('layouts.masterpage')
@section('content')

<div class="container pt-2 pb-3">
    <div class="row">
        <h2 class="col-lg-12">Đăng tin</h2>
    </div>
    <form class="row" id="form form-add-post" enctype="multipart/form-data" method="post" action="{{asset('post/create-post')}}">
        <div class="title col-lg-12">
            <label for="">
                Tiêu đề bài viết
            </label>
            <textarea value="" required name="a_tt_post" minlength="10" id="" class="col-lg-12" placeholder="Tiêu đề bài viết..." style="resize: none;">Value demo in test</textarea>
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Nội dung bài viết</label>
            <textarea required class="col-12" rows="10" name="a_ct_post" minlength="20" id="edt-ct-pt" placeholder="Nội dung bài viết...">Content demo in test sharing information room... thasnks!!! yup!</textarea>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                        <label for="">Số điện thoại</label>
                    <div class="phone d-flex">
                        <select name="" id="" class="form-control col-2" style="border-radius: 0;">
                            <option value="">+84</option>
                        </select>
                        <input required type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="9" name="a_p_post" class="form-control" placeholder="380956358..." value="389902073">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="gia col-lg-4">
                    <label for="">Giá</label>
                    <input required type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="a_price_post" placeholder="1.000.000đ..." value="3350000" class="form-control col-12">
                </div>
                <div class="type col-lg-4">
                    <label for="">Thể loại</label>
                    <select required name="a_type_post" id="" class="form-control">
                    @foreach ( $type_post as $tp )
                        <option value="{{$tp->typeId}}">{{$tp->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="dtich col-lg-4">
                    <label for="">Diện tích (m<sup>2</sup>)</label>
                    <input required type="number" step="0.01" name="a_dt_post" placeholder="20.5..." class="form-control col-12" value="30">
                </div>
                <div class="tien-ich col-lg-6">
                    <label for="">Tiện ích</label>
                    <input type="text" name="a_ti_post" placeholder="Gần cao tốc..." class="form-control col-12" value="Gan truong cao dang ky thuat Cao Thang">
                </div>
                <div class="num-bed-room col-lg-6">
                    <label for="">Số phòng ngủ</label>
                    <input required onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" name="a_pn_post" placeholder="1..." class="form-control col-12" value="1">
                </div>
                 <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select name="province" id="province" class="form-control drop" required>
                        <option value="">--Thành phố--</option>
                    @foreach ( $province as $prov )
                        <option value="{{$prov->id}}">{{$prov->_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select id="district" name="district" class="form-control" required>
                        <option value="">--Quận/Huyện--</option>
                        @foreach ( $district as $dist )
                            <option value="{{$dist->id}}">{{$dist->_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-4">
                    <select required id="ward" name="ward" class="form-control">
                        <option value="">--Phường--</option>
                        @foreach ( $ward as $war )
                            <option value="{{$war->id}}">{{$war->_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-12">
                    <div id="add_img">
                        <input required name="image_post[]" id='uploadFile' type="file" class="form-control-file col-lg-5 col-md-5" multiple  accept="image/*"/>
                        <div id="div_upload_image">
                        </div>
                    </div>
                   {{-- <button id="add_element_img" type="button" class="btn btn-primary">Thêm hình ảnh</button> --}}
                </div>
                <script>
                    document.getElementById('uploadFile').addEventListener('change', readURL, true);
                    function readURL(){
                        
                        var cc = document.getElementById('div_image_will_uploaded');
                        if(cc){
                            cc.remove();
                        }
                        var elementDIV = document.createElement("div");
                        elementDIV.setAttribute("id", "div_image_will_uploaded");
                        elementDIV.setAttribute("class", "d-flex");
                        var parent = document.getElementById('div_upload_image');
                        parent.appendChild(elementDIV);

                        var file = document.getElementById("uploadFile");
                        for(var i = 0; i < file.files.length; i++){
                            console.log(i);
                            console.log(file.files[i]);
                            var reader = new FileReader();
                            reader.readAsDataURL(file.files[i]);
                            reader.onload = function(e){
                                var div = document.getElementById('div_image_will_uploaded');
                                let element = document.createElement("IMG");
                                element.setAttribute("src", e.target.result);
                                element.setAttribute("width", "304");
                                div.appendChild(element);
                            }
                        }
                    }
                  </script>
            </div>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-info" name="post" type="submit">Tải lên</button>
                    <button type="submit" name="cancel" class="btn btn-danger">Hủy</button>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>
</div>
@stop
