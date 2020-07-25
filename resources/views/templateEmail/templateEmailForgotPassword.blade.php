	<div class="container-fluid px-md-3  pt-2 pt-md-3">
		<div class="row justify-content-between text-center">
            <span>Nhấp vào liên kết để đặt lại mật khẩu</span>
            <br>
            <a class="nav-link" href={{asset('/forgotpass/auth?em='.base64_encode($emailto).'&acc='.base64_encode($emailto))}}>{{asset('/forgotpass/auth?account='.base64_encode($emailto).'&acc='.base64_encode($emailto))}}</a>
        </div>
    </div>