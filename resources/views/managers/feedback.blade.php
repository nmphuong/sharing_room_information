@extends('layouts.masterpage')

@section('content')
<div class="container-fluid pt-5 pb-3">
    <div class="text-center">
        <a href="{{asset('/approval')}}" class="btn btn-primary">Duyệt bài</a>
        <a href="{{asset('/feedback')}}" class="btn btn-info">Phản hồi</a>
        <a href="{{asset('/statistical')}}" class="btn btn-success">Thống kê</a>
    </div>
    <div><p class="h2">Danh sách phản hồi</p></div>
    <div class="table-responsive">
        @if (session('success'))
            <div class="alert alert-primary text-center">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="bg-dark">
                <tr>
                    <th scope="col">Người dùng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Trang thái</th>
                    <th scope="col">Ngày đăng</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php //dump($post); ?>
            @foreach ($post as $p)
                <tr>
                    <td>{{$p->fullname}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->title}}</td>
                    <td style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{$p->content}}</td>
                    <td><?php if($p->status == 0){
                            $dom = "Chưa phản hồi";
                        } else {
                            $dom = "Đã phản hồi";
                        } ?>
                        {!! $dom !!}</td>
                    <td>{{$p->created_at}}</td>
                    <td class='text-center'>
                        <a class="btn btn-info text-white" href="{{asset('feedback/reviewfb?post='.$p->id)}}"><i class="far fa-eye"></i></a>
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