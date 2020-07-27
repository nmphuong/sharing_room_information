<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right, .login-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister, .btnLogin{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
    </style>
</head>
<body>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Chào mừng</h3>
            <p>Đến với trang chia sẻ thông tin nhà trọ!</p>
            <a href="{{asset('/')}}"><input class="mt-0" type="submit" id="cho-log" name="" value="Trang chủ"/></a><br/>
            <?php
                if(Session::get('session_logged_in')){
                    $dom = "";
                }
                else {
                    $dom = "<a href='login'><input class='mt-0' type='submit' id='cho-log' name=''' value='Đăng nhập'/></a><br/>";
                }
            ?>
            {!! $dom !!}
            {{-- <input class="mt-0" type="submit" id="cho-re" name="" value="Đăng ký"/><br/> --}}
        </div>
        <div class="col-md-9 login-right">
            <form action="" method="post" role="form">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Đổi mật khẩu</h3>
                        <div class="row register-form">
                            <div class="col-md-12 justify-content-center">
                            @if (session('noaccount'))
                                <div class="alert alert-primary text-center">
                                    {{ session('noaccount') }}
                                </div>
                            @endif
                            @if (session('not_right_pass'))
                                <div class="alert alert-danger text-center">
                                    {{ session('not_right_pass') }}
                                </div>
                            @endif
                            @if (session('new_pass_not_same'))
                                <div class="alert alert-danger text-center">
                                    {{ session('new_pass_not_same') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-primary text-center">
                                    {{ session('success') }}
                                </div>
                            @endif
                                <div class="form-group col-lg-6 m-auto pb-3">
                                    <input type="text" required name="username" class="form-control" placeholder="Tên đăng nhập" value="webmaster" />
                                </div>
                                <div class="form-group col-lg-6 m-auto pb-3">
                                    <input type="password" required name="pwd" class="form-control" placeholder="Mật khẩu cũ" value="123@Ab_A123b@!." />
                                </div>
                                <div class="form-group col-lg-6 m-auto pb-3">
                                    <input type="password" required name="new_pwd" class="form-control" placeholder="Mật khẩu mới" value="123456789" />
                                </div>
                                <div class="form-group col-lg-6 m-auto">
                                    <input  required type="password" name="cf_new_pwd" class="form-control" placeholder="Xác nhận mật khẩu mới" value="123456789" />
                                </div>
                                <div class="form-group col-lg-6 m-auto">
                                    <button type="button" class="btnLogin" data-toggle="modal" data-target="#update-profile-modal">Gửi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="update-profile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        <div class="modal-content row">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xác nhận đổi mật khẩu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-info">Cập nhật</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
            
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</body>
</html>