<div class="container-fluid px-md-3  pt-2 pt-md-3">
    <form action="" name="" method="post" class="d-flex justify-content-center">
        <div class="form-group m-3 col-lg-2">
            <select name="province" id="province" class="form-control drop">
                <option value="-1">--Thành phố--</option>
            @foreach ( $province as $prov )
                <option value="{{$prov->id}}">{{$prov->_name}}</option>
            @endforeach
             </select>
        </div>
        <div class="form-group m-3 col-lg-2">
            <select id="district" name="selValue" class="form-control">
                <option value="-1">--Quận/Huyện--</option>
                @foreach ( $district as $dist )
                    <option value="{{$dist->id}}">{{$dist->_name}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group m-3 col-lg-2">
            <select id="ward" name="selValue" class="form-control">
                <option value="ward">--Phường--</option>
                @foreach ( $ward as $war )
                    <option value="{{$war->id}}">{{$war->_name}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group m-3 col-lg-2">
            <select name="selValue" class="form-control">
                <option value="1">--Diện Tích--</option>
             </select>
        </div>
        <div class="form-group m-3 col-lg-2">
            <select name="selValue" class="form-control">
                <option value="1">--Giá--</option>
             </select>
        </div>
    </form>
</div>