<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
.btnRegister{
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
                        <input type="submit" id="cho-log" name="" value="Đăng nhập"/><br/>
                        <input type="submit" id="cho-re" name="" value="Đăng ký"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <form action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Đăng ký</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tên đầy đủ" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tên đăng nhập" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Mật khẩu *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Nhập lại mật khẩu" value="" />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="male" checked>
                                                        <span> Nam </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="female">
                                                        <span>Nữ </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control"  placeholder="Sinh nhật" value="" />
                                        </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Địa chỉ" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Số điện thoại" value="" />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Đăng ký"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9 login-right d-none">
                        <form action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Đăng hập</h3>
                                    <div class="row register-form">
                                        <div class="col-md-12 justify-content-center">
                                            <div class="form-group col-lg-6">
                                                <input type="text" class="form-control" placeholder="Tên đăng nhập" value="" />
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="password" class="form-control" placeholder="Mật khẩu *" value="" />
                                            </div>
                                        <div class="form-group col-lg-6">
                                            <input type="submit" class="btnRegister"  value="Đăng nhập"/>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
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
    });
</script> 
</body>
</html>