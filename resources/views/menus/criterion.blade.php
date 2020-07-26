<div class="container-fluid px-md-3  pt-2 pt-md-3">
    <form action="" method="GET" class="row m-0 p-0 justify-content-center">
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <select name="province" id="province" class="form-control drop">
                <option value="-1">--Thành phố--</option>
            @foreach ( $province as $prov )
                <option value="{{$prov->id}}">{{$prov->_name}}</option>
            @endforeach
             </select>
        </div>
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <select id="district" name="district" class="form-control">
                <option value="-1">--Quận/Huyện--</option>
                @foreach ( $district as $dist )
                    <option value="{{$dist->id}}">{{$dist->_name}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <select id="ward" name="ward" class="form-control">
                <option value="-1">--Phường--</option>
                @foreach ( $ward as $war )
                    <option value="{{$war->id}}">{{$war->_name}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <select name="acreage" class="form-control">
                <option value="-1">--Diện tích--</option>
                <option value=">1000">Trên 1000m²</option>
                <option value="500 and 1000">Từ 500+ m² đến 1000m²</option>
                <option value="100 and 500">Từ 100+ m² đến 500m²</option>
                <option value="50 and 100">Từ 50m+ ² đến 100m²</option>
                <option value="30 and 50">Từ 30m+ ² đến 50 m²</option>
                <option value="<30">Dưới 30m²</option>
             </select>
        </div>
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <select name="price" class="form-control">
                <option value="-1">--Giá--</option>
                <option value=">1000000000">Trên 1 tỷ</option>
                <option value="500000000 and 1000000000">Từ 500+ triệu đến 1 tỷ</option>
                <option value="100000000 and 500000000">Từ 100+ triệu đến 500 triệu</option>
                <option value="50000000 and 100000000">Từ 50+ triệu đến 100 triệu</option>
                <option value="30000000 and 50000000">Từ 30+ triệu đến 50 triệu</option>
                <option value="20000000 and 30000000">Từ 20+ triệu đến 30 triệu</option>
                <option value="10000000 and 20000000">Từ 10+ triệu đến 20 triệu</option>
                <option value="5000000 and 10000000">Từ 5+ triệu đến 10 triệu</option>
                <option value="3000000 and 5000000">Từ 3+ triệu đến 5 triệu</option>
                <option value="<3000000">Dưới 3 triệu</option>
             </select>
        </div>
        <div class="form-group mt-1 mb-1 mr-0 ml-0 col-md-2">
            <button id="btnFilter" class="btn btn-warning form-control">Áp dụng</button>
        </div>
    </form>
</div>