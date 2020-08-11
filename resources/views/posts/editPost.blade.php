@extends('layouts.masterpage')
@section('content')

<div class="container pt-2 pb-3">
@foreach ($post as $data)
    @if (session('success'))
            <div class="alert alert-primary text-center">
                {{ session('success') }}
            </div>
        @endif
    <div class="row">
        <h2 class="col-lg-12">Sửa tin</h2>
    </div>
    <form class="row" method="POST" action='{{asset('manager-post/update')}}' enctype="multipart/form-data" onsubmit="return confirm('Bạn chắc chắn muốn update bài viết!');">
        <div class="title col-lg-12">
        <?php 
                        $image = str_replace("[","",$data->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
            ?>
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
            <label for="">
                Tiêu đề bài viết
            </label>
            <textarea name="title" id="" class="col-lg-12" placeholder="Tiêu đề bài viết..." style="resize: none;">{{$data->title}}</textarea>
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Nội dung bài viết</label>
            <textarea required class="col-12" rows="10" name="content" minlength="20" id="edt-ct-pt" placeholder="Nội dung bài viết...">{{$data->content}}</textarea>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                        <label for="">Số điện thoại</label>
                    <div class="phone d-flex">
                        <select name="" id="" class="form-control col-2" style="border-radius: 0;">
                            <option value="">+84</option>
                        </select>
                        <input type="text" class="form-control" name="phonenumber" value="{{$data->phone_number}}" placeholder="380956358...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="gia col-lg-4">
                    <label for="">Giá</label>
                    <input type="text" name="price" placeholder="1.000.000đ..." class="form-control col-12" value="{{$data->price}}">
                </div>
                <div class="type col-lg-4">
                    <label for="">Thể loại</label>
                    <select name="type_post" id="" class="form-control">
                        @foreach ( $type_post as $tp )
                            <option value="{{$tp->typeId}}" @if ($tp->typeId == $data->type) selected="selected" @endif>{{$tp->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dtich col-lg-4">
                    <label for="">Diện tích (m<sup>2</sup>)</label>
                    <input type="text" placeholder="20.5..." class="form-control col-12" name='acreage' value="{{$data->acreage}}">
                </div>
                <div class="tien-ich col-lg-6">
                    <label for="">Tiện ích</label>
                    <input type="text" placeholder="Gần cao tốc..." class="form-control col-12" name="utilities" vlaue="{{$data->utilities}}">
                </div>
                <div class="num-bed-room col-lg-6">
                    <label for="">Số phòng ngủ</label>
                    <input type="text" placeholder="1..." class="form-control col-12" name="room_number" value='{{$data->room_number}}'>
                </div>
                <div class="city col-lg-4">
                    <label for="">Thành phố</label>
                    <select required name="province" id="province" class="form-control drop">
                        <option value="-1">--Thành phố--</option>
                    @foreach ( $province as $prov )
                        <option value="{{$prov->id}}" @if ($prov->id == $data->city) selected="selected" @endif>{{$prov->_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="quan-huyen col-lg-4">
                    <label for="">Quận/Huyện</label>
                    <select required id="district" name="district" class="form-control">
                        <option value="-1">--Quận/Huyện--</option>
                        <?php $dis = DB::select('select * from district where _province_id='.$data->city);?>
                        @if (count($district) == 0)
                            @foreach ( $dis as $d )
                                <option value="{{$d->id}}" @if ($d->id == $data->district) selected="selected" @endif>{{$d->_name}}</option>
                            @endforeach
                        @endif
                        @if (count($district) > 0)
                            @foreach ( $district as $dist )
                                <option value="{{$dist->id}}">{{$dist->_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <input style="display: none;" type="text" class="form-control" name="id" id="id" placeholder="id" required value="{{$data->id}}">
                <div class="phuong col-lg-4">
                    <label for="">Phường</label>
                    <select required id="ward" name="ward" class="form-control">
                        <option value="-1">--Phường--</option>
                        <?php $wa = DB::select('select * from ward where _district_id='.$data->district);?>
                        @if (count($ward) == 0)
                            @foreach ( $wa as $w )
                                <option value="{{$w->id}}" @if ($w->id == $data->ward) selected="selected" @endif>{{$w->_name}}</option>
                            @endforeach
                        @endif
                        @if (count($ward) > 0)
                            @foreach ( $ward as $war )
                                <option value="{{$war->id}}">{{$war->_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group mt-3 mb-3 mr-0 ml-0 col-lg-12">
                    <div id="add_img">
                        <input name="image_post[]" id='uploadFile' type="file" class="form-control-file" multiple  accept="image/*"/>
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
                    <button type='submit' class="btn btn-info">Tải lên</button>
                    <a href="{{asset('/manager-post')}}" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </div>
        {{csrf_field()}}
    </form>
@endforeach
</div>

{{-- <script>
       CKEDITOR.replace('ckeditor', { filebrowserBrowseUrl: "{{asset('editor/ckfinder/ckfinder.html')}}", filebrowserUploadUrl: "{{asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
</script> --}}
<script>
    CKEDITOR.replace( 'edt-ct-pt' ){
        extraPlugins: 'imageuploader'
    };
</script>
@stop