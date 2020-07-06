@extends('layouts.masterpage')
@section('style')
<style>
#chg-avt{
    display: none;
}
#d-avt:hover #chg-avt{
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
            <p class="text-center display-4" style="font-family: 'Lobster', cursive!important;">Thông tin cá nhân</p>
        </div>
        <div class="col-lg-12 justify-content-center">
            <a href="#">
                <div id="d-avt" class="ml-auto mr-auto" style="border-radius: 50%;  background-image: url('{{Auth::user()->avatar}}'); background-size: cover;  background-position: center; background-repeat: no-repeat; width: 250px; height: 250px;">
                    <div class="circle" style="position: absolute;">
                        <span class="circle__content">VIP {{Auth::user()->vip}}</span>
                      </div>
                    <div class="w-100 h-100" id="chg-avt" style="background-color: rgba(24, 24, 24, 0.726); border-radius: 50%;">
                            <i class="fa fa-pencil text-white" style="font-size: 3rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" aria-hidden="true"></i>
                            <input type="file" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 50%; width: 250px; height: 250px; opacity: 0;" title="">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-12 text-center mt-2">
            <input id="edit-fn" style="font-size: 2em" class="text-center text-primary" style="font-family: 'Lobster', cursive!important; outline: none; border: 0;" disabled value="{{Auth::user()->fullname}}">
            <span class="fa fa-pencil display-4" id="e-fn-pen"></span>
        </div>
        <div class="col-lg-12 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->username}}">
                    </div>
                    <div class="col-lg-4 pt-2 pb-2">
                        <input id="input-disabled" type="text" class="form-control border-0 text-center" disabled value="{{Auth::user()->phone}}">
                    </div>
                    <div class="col-lg-4 pt-2 pb-2">
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
            <div class="modal-dialog"  role="document">
              <div class="modal-content row">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="needs-validation row" novalidate>
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="input-disabled" aria-describedby="emailHelp" placeholder="Username" value="{{Auth::user()->username}}" required disabled>
                    </div>
                    <div class="form-group col-lg-12">
                      <label for="exampleInputPassword1">Số điện thoại</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="So Dien Thoai" value="{{Auth::user()->phone}}" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="birthday" value="{{Auth::user()->birthday}}" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="city" value="{{Auth::user()->address}}" required>
                      </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </div>
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
          <button id="update-password" class="btn btn-danger border-0 m-2" data-toggle="modal" data-target="#update-password-modal">Cập nhật mật khẩu</button>
        <div class="modal fade" id="update-password-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog"  role="document">
            <div class="modal-content row">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cập nhật mật khẩu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="needs-validation row" novalidate>
                  <div class="form-group col-lg-12">
                    <label for="exampleInputEmail1">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="input-disabled" aria-describedby="emailHelp" placeholder="Mật khẩu cũ" value="" required>
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="exampleInputEmail1">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="input-disabled" aria-describedby="emailHelp" placeholder="Mật khẩu mới" value="" required>
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="exampleInputEmail1">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" id="input-disabled" aria-describedby="emailHelp" placeholder="Nhập lại mật khẩu mới" value="" required>
                  </div>
                  <div class="col-lg-12">
                      <button type="submit" class="btn btn-info">Cập nhật</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>
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
