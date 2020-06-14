@extends('layouts.masterpage')

@section('content')
<section class="container-fluid px-md-3  pt-2 pt-md-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center" style="font-family: 'Lobster', cursive!important;">Thông tin cá nhân</h2>
        </div>
        <div class="col-lg-12 justify-content-center">
            <a href="">
                <div id="d-avt" class="w-25 ml-auto mr-auto" style="border-radius: 50%;  background-image: url('images/house.jpg'); background-size: cover;">
                </div>
            </a>
        </div>
    </div>
</div>
</section>
<script>
    const le = document.getElementById('d-avt');
    le.style.height = le.clientWidth + 'px';
</script>
@stop
