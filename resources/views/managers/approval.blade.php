@extends('layouts.masterpage')

@section('content')
<div class="container-fluid">
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
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Người đăng</th>
                    <th scope="col">Ngày đăng</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php dump($post); ?>
            @foreach ($post as $p)
                <tr>
                    <td>{{$p->title}}</td>
                    <?php 
                    //dd($roomOfUserVip);
                        $image = str_replace("[","",$p->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($roomVip->image ,$dirs); 
                    ?>
                    <td class=""><div class="w-100 text-center"><img class="img align-self-stretch" style="width: 5vw;" src="{{asset('uploads/'.$dirs[0])}}" /></div></td>
                    <td>{{$p->fullname}}</td>
                    <td>{{$p->created_at}}</td>
                    <td><?php if($p->type == 1){
                            $type = "Phòng trọ";
                        } else if($p->type == 2){
                            $type = "Căn hộ";
                        } else if($p->type == 3){
                            $type = "Nhà nguyên căn";
                        } else {
                            $type = "Khác";
                        } ?>
                        {!! $type !!}</td>
                    <td class='text-center'>
                        <a class="btn btn-info text-white" href="{{asset('approval/review?post='.$p->id)}}"><i class="far fa-eye"></i></a>
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
                <li><a href="apartment?page=1">&lt;&lt;</a></li>
                @for ($i = 0 ; $i < $postCount ; $i++)
                    <li><a href="{{asset('approval?page='. ($i+1))}}">{{$i + 1}}</a></li>
                @endfor
                <li><a href="approval?page={{$postCount}}">&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop