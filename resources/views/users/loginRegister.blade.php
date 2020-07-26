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
                        <input class="mt-0" type="submit" id="cho-log" name="" value="Đăng nhập"/><br/>
                        <input class="mt-0" type="submit" id="cho-re" name="" value="Đăng ký"/><br/>
                    </div>
                    <div class="col-md-9 login-right">
                        <form action="login" method="post" role="form">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Đăng nhập</h3>
                                    <div class="row register-form">
                                        <div class="col-md-12 justify-content-center">
                                        @if (session('invalidaccount'))
                                            <div class="alert alert-danger text-center">
                                                {{ session('invalidaccount') }}
                                            </div>
                                        @endif
                                        @if ($stringSuccessChangePass != null)
                                            <div class="alert alert-danger text-center">
                                                {{$stringSuccessChangePass}}
                                            </div>
                                        @endif
                                        @if (session('dupticateaccount'))
                                            <div class="alert alert-danger text-center col-12">
                                                {{ session('dupticateaccount') }}
                                            </div>
                                        @endif
                                        @if (session('dupticateemail'))
                                            <div class="alert alert-danger text-center col-12">
                                                {{ session('dupticateemail') }}
                                            </div>
                                        @endif
                                        @if (session('success_authenticate'))
                                            <div class="alert alert-primary text-center col-12">
                                                {{ session('success_authenticate') }}
                                            </div>
                                        @endif
                                        @if (session('popup_success_register'))
                                        <div id="popup_success_register" class="modal d-block" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Vui lòng xác thực email!</p>
                                                </div>
                                                    <button id="close_popup_success_register" type="button" class="btn btn-primary" style="border-radius: 0" data-dismiss="modal">OK</button>
                                                </div>
                                            </div>  
                                        </div>
                                        @endif
                                            <div class="form-group col-lg-6 m-auto pb-3">
                                            <input type="text" required name="username" class="form-control" placeholder="Tên đăng nhập" value="webmaster" />
                                            </div>
                                            <div class="form-group col-lg-6 m-auto">
                                                <input  required type="password" name="password" class="form-control" placeholder="Mật khẩu *" value="123@Ab_A123b@!." />
                                            </div>
                                            <div class="form-group col-lg-6 m-auto">
                                                <a class="nav-link" href="{{asset('/forgotpass')}}">Quên mật khẩu?</a>
                                            </div>
                                            <div class="form-group col-lg-6 m-auto">
                                                <input type="submit" class="btnLogin"  value="Đăng nhập"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                    <div class="col-md-9 register-right d-none">
                        <form id="register" action="register" role="form" method="POST">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Đăng ký</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" required name="fullname" class="form-control" placeholder="Tên đầy đủ" value="Nguyen Minh Phuong" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" title="Tên đăng nhập bao gồm 'A-Z a-z 0-9 _' và bắt đầu bằng ký tự chữ độ dài từ 6 - 31 ký tự" required id="username" name="username" class="form-control" placeholder="Tên đăng nhập" value="custormer" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" required name="password" class="form-control" placeholder="Mật khẩu *" value="123@Ab_A123b@!." />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" required name="re_password" class="form-control"  placeholder="Nhập lại mật khẩu" value="123@Ab_A123b@!." />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="male" value="male" checked>
                                                        <span> Nam </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="female" value="female">
                                                        <span>Nữ </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="birthday"  placeholder="Sinh nhật" value="<?php echo date('Y-m-d'); ?>" />
                                        </div>
                                            <div class="form-group">
                                                <input type="text" required name="address" class="form-control" placeholder="Địa chỉ" value="123 Huynh Thuc Khang" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Số điện thoại" value="0389902073" />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" required name="email" class="form-control" placeholder="Email" value="nguyenminhphuong25111999@gmail.com" />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Đăng ký"/>
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
<script>
    $(document).ready(function(){
        $("#cho-log").click(function(){
            $(".login-right").removeClass("d-none");
            $(".register-right").addClass("d-none");
        });
        $("#cho-re").click(function(){
            $(".login-right").addClass("d-none");
            $(".register-right").removeClass("d-none");
        });
        $("#close_popup_success_register").click(function(){
            $("#popup_success_register").addClass("fade-in");
            $("#popup_success_register").removeClass("d-block");
        });
    });
</script> 
<script>
    $(document).ready(function(){
        $("#username:not(pattern)").attr("pattern", "^[A-Za-z]([_]?)([A-Za-z0-9][_]?){5,30}");
        $(".btnRegister").click(function(){
            $("#username:not(pattern)").attr("pattern", "^[A-Za-z]([_]?)([A-Za-z0-9][_]?){5,30}");
        });
    });
</script>
</body>
</html>