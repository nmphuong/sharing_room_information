@extends('layouts.masterpage')

@section('content')
<div class="container-fluid pt-5 pb-3">
    <div class="text-center">
        <a href="{{asset('/approval')}}" class="btn btn-primary">Duyệt bài</a>
        <a href="{{asset('/set-vip')}}" class="btn btn-warning">Setting Vip</a>
        <a href="{{asset('/feedback')}}" class="btn btn-info">Phản hồi</a>
        <a href="{{asset('/statistical')}}" class="btn btn-success">Thống kê</a>
    </div>
    <div><p class="h2">Danh sách bài viết chờ duyệt</p></div>
    <div class="table-responsive">
        @if (session('success'))
            <div class="alert alert-primary text-center">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="bg-dark">
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">VIP</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php //dump($post); ?>
            @foreach ($user as $u)
                <tr>
                    <td>{{$u->username}}</td>
                    <td>{{$u->fullname}}</td>
                    {{-- //dd($roomOfUserVip);
                        $image = str_replace("[","",$p->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($roomVip->image ,$dirs); 
                    <td class=""><div class="w-100 text-center"><img class="img align-self-stretch" style="width: 5vw;" src="{{asset('uploads/'.$dirs[0])}}" /></div></td> --}}
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>{{$u->vip}}</td>
                    {{-- <td>{{$p->VIP}}</td>
                    <td> if($p->type == 1){
                            $type = "Phòng trọ";
                        } else if($p->type == 2){
                            $type = "Căn hộ";
                        } else if($p->type == 3){
                            $type = "Nhà nguyên căn";
                        } else {
                            $type = "Khác";
                        } ?>
                        {!! $type !!}</td> --}}
                    <td class='text-center'>
                        <div class="d-flex justify-content-start">
                          <form style="margin: 0px 2px;" action="{{asset('set-vip/uptovip?id=')}}" onsubmit="return confirm('Bạn chắc chắn muốn nâng cấp vip cho user này!');" method='POST' class=''><input style="display: none;" type="text" class="form-control" name="id" id="id" placeholder="id" required value="{{$u->id}}"><button class="btn btn-warning text-white"><i class="far fa-eye"></i></button>{{csrf_field()}}</form>
                          <form style="margin: 0px 2px;" action="{{asset('set-vip/destroyvip?id=')}}" onsubmit="return confirm('Bạn chắc chắn muốn hủy vip của user này!');" method='POST' class=''><input style="display: none;" type="text" class="form-control" name="id" id="id" placeholder="id" required value="{{$u->id}}"><button class="btn btn-danger text-white"><i class="far fa-eye"></i></button>{{csrf_field()}}</form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                <li><a href="set-vip?page=1">&lt;&lt;</a></li>
                @for ($i = 0 ; $i < $userCount ; $i++)
                    <li><a href="{{asset('set-vip?page='. ($i+1))}}">{{$i + 1}}</a></li>
                @endfor
                <li><a href="set-vip?page={{$userCount}}">&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop