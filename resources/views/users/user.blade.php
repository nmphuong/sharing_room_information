@extends('layouts.masterpage')
@section('style')
<style>
#chg-avt{
    display: none;
}
#d-avt:hover #chg-avt, #d-change-avt:hover #chg-avt{
    display: block!important;
}
.circle {
    box-shadow: 3px 5px #000000cb;
    display: inline-table;
    vertical-align: middle;
    width: 60px;
    height: 60px;
    background-image: linear-gradient(to right, rgb(229, 255, 0) , rgb(219, 219, 0) , rgb(229, 255, 0));
    border-radius: 50%;
}

.circle__content {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}
#input-disabled{
    background-color: #fafafa!important;
}
</style>
@stop
@section('content')
<section class="container-fluid px-md-3  pt-2 pt-md-3 pb-3">
    <div class="row">
        <div class="col-lg-12">
         @if (session('success'))
            <div class="alert alert-primary text-center">
                {{ session('success') }}
            </div>
        @endif
            <p class="text-center display-4" style="font-family: 'Lobster', cursive!important;">Thông tin cá nhân</p>
        </div>
        <div class="col-lg-12 justify-content-center">
            <a href="#">
            <?php 
								if(Auth::user() == null || Auth::user()->avatar == null){
									$avatar = "https://www.thehumanenterprise.com.au/wp-content/uploads/2017/06/Empty-Profile-Testimonials-300x300.jpg";
								}
								else {
									$avatar = Auth::user()->avatar;
								}
							?>
                <div id="d-avt" class="ml-auto mr-auto" style="border-radius: 50%;  background-image: url('{{asset('/avatars/')}}{{"/".$avatar}}'); background-size: cover;  background-position: center; background-repeat: no-repeat; width: 250px; height: 250px;">
                    <div class="circle" style="position: absolute;">
                        <span class="circle__content">VIP {{Auth::user()->vip}}</span>
                      </div>
                    {{-- <div class="w-100 h-100" id="chg-avt" style="background-color: rgba(24, 24, 24, 0.726); border-radius: 50%;">
                            <i class="fa fa-pencil text-white" style="font-size: 3rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" aria-hidden="true"></i>
                            <input type="file" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 50%; width: 250px; height: 250px; opacity: 0;" title="" id='imgInp'>
                    </div> --}}
                </div>
            </a>
        </div>
        <div class="col-lg-12 text-center mt-2">
            <input id="edit-fn" style="font-size: 2em" class="text-center text-primary" style="font-family: 'Lobster', cursive!important; outline: none; border: 0;" disabled value="{{Auth::user()->fullname}}">
        </div>
        <div class="col-lg-12 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->username}}">
                    </div>
                    <div class="col-lg-6 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->phone}}">
                    </div>
                    <div class="col-lg-6 pt-2 pb-2">
                    <?php
											if(Auth::user()->email == ""){
												$dom = "Chưa có thông tin email";
											}
											else {
												$dom = Auth::user()->email;
											}
										?>
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{!! $dom !!}">
                    </div>
                    <div class="col-lg-6 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->birthday}}">
                    </div>
                    <div class="col-lg-12 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->address}}">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="manager-post">
      <button class="btn btn-info m-2"><a href="{{asset('/post')}}" class="text-white">Quản lý tin</a></button>
      </div>
        <div class="update-profile">
            <button id="update-profile" class="btn btn-info border-0 m-2" data-toggle="modal" data-target="#update-profile-modal">Cập nhật thông tin</button>
        <div class="modal fade" id="update-profile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"  role="document">
              <div class="modal-content row">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="needs-validation row" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Bạn chắc chắn muốn cập nhật thông tin cá nhân!');">

                    <?php 
                      if(Auth::user() == null || Auth::user()->avatar == null){
                        $avatar = "https://www.thehumanenterprise.com.au/wp-content/uploads/2017/06/Empty-Profile-Testimonials-300x300.jpg";
                      }
                      else {
                        $avatar = Auth::user()->avatar;
                      }
                    ?>
                    <div class="col-lg-12">
                      <div id="d-change-avt" class="ml-auto mr-auto" style="border-radius: 50%;  background-image: url('{{asset('/avatars/')}}{{"/".$avatar}}'); background-size: cover;  background-position: center; background-repeat: no-repeat; width: 80px; height: 80px;">
                        <div class="w-100 h-100" id="chg-avt" style="background-color: rgba(24, 24, 24, 0.726); border-radius: 50%;">
                          <input id='change-avt' type="file" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 50%; width: 250px; height: 250px; opacity: 0;" title="" class="form-control-file" name="image_post[]" accept="image/*">
                        </div>
                      </div>
                    </div>
                    
                  <script>
                    document.getElementById('change-avt').addEventListener('change', readURL, true);
                    function readURL(){
                    var file = document.getElementById("change-avt").files[0];
                    var reader = new FileReader();
                    reader.onloadend = function(){
                    document.getElementById('d-change-avt').style.backgroundImage = "url(" + reader.result + ")";        
                    }
                    if(file){
                    reader.readAsDataURL(file);
                    }else{
                    }
                    }
                  </script>



                    <div class="form-group col-lg-4">
                      <label for="exampleInputEmail1">Tên đăng nhập</label>
                      <input type="text" name='username' class="form-control" id="input-disabled" aria-describedby="emailHelp" placeholder="Username" value="{{Auth::user()->username}}" required readonly>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" name="birthday" class="form-control" aria-describedby="emailHelp" placeholder="birthday" value="{{Auth::user()->birthday}}" required>
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="exampleInputPassword1">Số điện thoại</label>
                      <input type="text" name='phone' class="form-control" id="exampleInputPassword1" placeholder="So Dien Thoai" value="{{Auth::user()->phone}}" required>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="exampleInputEmail1">Tên đầy đủ</label>
                      <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Username" value="{{Auth::user()->fullname}}" required>
                    </div>
                    <?php
											if(Auth::user()->email == ""){
												$dom = "Chưa có thông tin email";
                        $value = "";
                        $readonly = '';
											}
											else {
												$dom = Auth::user()->email;
                        $value = Auth::user()->email;
                        $readonly = 'readonly';
											}
										?>
                    <div class="form-group col-lg-6">
                      <label for="exampleInputPassword1">Email</label>
                      <input {!! $readonly !!} id="input-disabled" type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="{{$dom}}" value="{!! $value !!}" required>
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="city" value="{{Auth::user()->address}}" required>
                      </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </div>
                    {{csrf_field()}}
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="update-password">
          <a href="{{asset('/changepwd')}}"><input class="btn btn-danger border-0 m-2" type="submit" id="cho-log" name="" value="Đổi mật khẩu"/></a>
    </div>
</div>
</section>
<script>
    const fn = document.getElementById('edit-fn');
    const pen = document.getElementById('e-fn-pen');
    pen.addEventListener('click', function(){
        fn.disabled = false;
    })
    fn.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        fn.disabled = true;
        fn.style.border = "none!important";
    }
    (function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();
});

</script>
@stop
