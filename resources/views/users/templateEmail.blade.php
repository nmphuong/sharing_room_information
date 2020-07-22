	<div class="container-fluid px-md-3  pt-2 pt-md-3">
		<div class="row justify-content-between text-center">
            <span>Vui xác thực email với liên kết bên dưới</span>
            <br>
            <a class="nav-link" href={{asset('/authenticate?em='.base64_encode($emailto).'&acc='.base64_encode($emailto))}}>{{asset('/authenticate?account='.base64_encode($emailto).'&acc='.base64_encode($emailto))}}</a>
        </div>
    </div>