@extends('layouts.masterpage')

@section('content')
<div class="container-fluid pt-5 pb-3">
    <div class="text-center">
        <a href="{{asset('/approval')}}" class="btn btn-primary">Duyệt bài</a>
        <a href="{{asset('/set-vip')}}" class="btn btn-warning">Setting Vip</a>
        <a href="{{asset('/feedback')}}" class="btn btn-info">Phản hồi</a>
        <a href="{{asset('/statistical')}}" class="btn btn-success">Thống kê</a>
    </div>
    <div class='p-0 m-0 mt-5'>
      <form class='container-fluid row d-flex' method='GET'>
          <div class='col-lg-2 col-sm-12 col-md-3 p-0'>
            <select name="time" class="form-control">
              <option value="-1">--Tất cả--</option>
              <option value="7">7 ngày đến nay</option>
              <option value="30">1 tháng đến nay</option>
            </select>
          </div>
          <div class='pl-3 pr-3'>
            <button id='btnFilter' class="btn btn-warning form-control">Áp dụng</button>
          </div>
      </form>
    </div>
    <div><p class="h2">Bảng thống kê</p></div>
    <div><p class="h4">Kết quả cho: <?php if($result == -1 || $result == null ){ $dom = 'Tất cả'; } else if($result != -1){ $dom = $result . ' ngày'; } ?> {!! $dom !!}
    </p></div>
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
                    <th scope="col">Phòng trọ</th>
                    <th scope="col">Căn hộ</th>
                    <th scope="col">Nhà nguyên căn</th>
                    <th scope="col">Khác</th>
                </tr>
            </thead>
            <tbody>
            <tr class='h4'>
              <td>{{$users}}</td>
              <td>{{$motelRoom}}</td>
              <td>{{$apartment}}</td>
              <td>{{$house}}</td>
              <td>{{$other}}</td>
            </tr>
            <?php //dump($post); ?>
            {{-- @foreach ($post as $p)
                <tr>
                    <td>{{$p->fullname}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->title}}</td>
                    <td style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{$p->content}}</td>
                    <td></td>
                    <td>{{$p->created_at}}</td>
                    <td class='text-center'>
                        <a class="btn btn-info text-white" href="{{asset('feedback/reviewfb?post='.$p->id)}}"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach --}}
            </tbody>
        </table>
    </div>
    
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                {{-- <li><a href="apartment?page=1">&lt;&lt;</a></li>
                @for ($i = 0 ; $i < $postCount ; $i++)
                    <li><a href="{{asset('approval?page='. ($i+1))}}">{{$i + 1}}</a></li>
                @endfor --}}
                {{-- <li><a href="approval?page={{$postCount}}">&gt;&gt;</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
@stop