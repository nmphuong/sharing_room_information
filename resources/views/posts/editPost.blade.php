@extends('layouts.masterpage')
@section('content')

<div class="container pt-2 pb-3">
    <div class="row">
        <h2 class="col-lg-12">Sửa tin</h2>
    </div>
    <form class="row">
        <div class="title col-lg-12">
            <label for="">
                Tiêu đề bài viết
            </label>
            <textarea name="" id="" class="col-lg-12" placeholder="Tiêu đề bài viết..." style="resize: none;"></textarea>
        </div>
        <div class="content col-lg-12 mb-2">
            <label for="">Nội dung bài viết</label>
            <textarea class="ckeditor col-12" name="description" id="edt-ct-pt"></textarea>
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
                        <option value="">Phòng trọ</option>
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
                <div class="city col-lg-4">
                    <label for="">Thành phố</label>
                    <select name="" id="" class="form-control">
                        <option value="">TP Hồ Chí Minh</option>
                    </select>
                </div>
                <div class="quan-huyen col-lg-4">
                    <label for="">Quận/Huyện</label>
                    <select name="" id="" class="form-control">
                        <option value="">Quận 1</option>
                    </select>
                </div>
                <div class="phuong col-lg-4">
                    <label for="">Phường</label>
                    <select name="" id="" class="form-control">
                        <option value="">Phường 13</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12 pt-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="btn btn-info">Tải lên</div>
                    <div class="btn btn-danger">Hủy</div>
                </div>
            </div>
        </div>
    </form>
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