<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
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
            <a href="{{asset('/login')}}"><input class="mt-0" type="submit" id="cho-log" name="" value="Đăng nhập"/></a><br/>
            {{-- <input class="mt-0" type="submit" id="cho-re" name="" value="Đăng ký"/><br/> --}}
        </div>
        <div class="col-md-9 login-right">
            <form action="resetpassword" method="post" role="form">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Đặt lại mật khẩu</h3>
                        <div class="row register-form">
                            <div class="col-md-12 justify-content-center">
                            {{-- @if (session('success'))
                                <div class="alert alert-primary text-center">
                                    {{ session('success') }}
                                </div>
                            @endif --}}
                            @if (session('comparepass'))
                                <div class="alert alert-danger text-center">
                                    {{ session('comparepass') }}
                                </div>
                            @endif
                                <div class="form-group col-lg-6 m-auto pb-3">
                                    <p>Xin chào <b>{{$fullname}}</b>!</p>
                                </div>
                                <div class="form-group col-lg-6 m-auto pb-3">
                                    <input  required type="password" name="password" class="form-control" placeholder="Nhập mật khẩu mới" value="" minlength="8"  title="Mật khẩu phải ít nhất 8 kí tự" />
                                </div>
                                <div class="form-group col-lg-6 m-auto">
                                    <input  required type="password" name="repassword" class="form-control" placeholder="Xác nhận lại mật khẩu"  minlength="8" title="Mật khẩu phải ít nhất 8 kí tự" value="" />
                                </div>
                                <div class="form-group col-lg-6 m-auto">
                                    <input type="submit" class="btnLogin" value="Đặt lại mật khẩu"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>

            </div>
            
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>