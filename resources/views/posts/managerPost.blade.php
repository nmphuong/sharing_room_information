@extends('layouts.masterpage')

@section('content')
<div class="container-fluid pt-5 pb-3">
    <div><p class="h2">Danh sách bài viết</p></div>
    <div class="table-responsive">
        @if (session('success'))
            <div class="alert alert-primary text-center">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        <table class="table table-hover table-light">
            <thead class="bg-dark">
                <tr>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Ngày đăng</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php //dump($post); ?>
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
                    <td><?php if($p->status == 0){
                            $status = "Đang chờ duyệt";
                        } else if($p->status == 1){
                            $status = "Đang hiển thị";
                        } else if($p->status == 2){
                            $status = "Bài VIP";
                        } else if($p->status == 3){
                            $status = "Đã xóa";
                        }?>
                        {!! $status !!}</td>
                    <td class='text-center' style="vertical-align: middle;">
                    <?php 
                            $hidden = '';
                            if($p->status == 3){
                            $hidden = "disabled";
                        }?>
                        <div class='d-flex justify-content-start'>
                          <form style="margin: 0px 2px;" class=''><a class="btn btn-info text-white" href="{{asset('manager-post/review?post='.$p->id)}}"><i class="far fa-eye"></i></a></form>
                          <form style="margin: 0px 2px;" class=''><a class="btn btn-warning text-white {!! $hidden !!}" href="{{asset('manager-post/edit?post='.$p->id)}}"><i class="far fa-edit"></i></a></form>
                          <form style="margin: 0px 2px;" method="GET" action="{{asset('manager-post/delete')}}" onsubmit="return confirm('Bạn chắc chắn muốn xóa bài viết!');"><button {!! $hidden !!} class="btn btn-danger text-white"><i class="fas fa-trash"></i></button><input style="display: none;" name='post' value='{{$p->id}}'></form>
                          <?php 
                          $vip = '';
                          $href = '';
                          $cancelvip = '';
                          $message = '';
                          if(Session::get('session_logged_in')->vip == 1){
                            if ($amount_vip < 2 && $p->vip == 0) {
                                $vip = "<a class='btn btn-success text-white' href=".asset('manager-post/vip?post='.$p->id)."><i class='far fa-eye'></i></a>";
                                $href = asset('manager-post/vip?post='.$p->id);
                                $message = 'Bạn chắc chắc muốn nâng cấp bài viết này lên VIP?';
                            }
                            if($p->vip == 1){
                                $cancelvip = "<a class='btn btn-secondary text-white' href=".asset('manager-post/cancelvip?post='.$p->id)."><i class='far fa-eye'></i></a>";
                                $href = asset('manager-post/cancelvip?post='.$p->id); 
                                $message = 'Bạn chắc chắc muốn xóa bài viết khỏi VIP?';
                            }
                          }
                           ?>
                           <form style="margin: 0px 2px;" class='' method='GET' action="{!!$href!!}" onclick="return confirm('{!!$message!!}');">
                          {!! $vip !!}
                          {!! $cancelvip !!}
                          </form>
                        <div>
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
                <li><a href="manager-post?page=1">&lt;&lt;</a></li>
                @for ($i = 0 ; $i < $postCount ; $i++)
                    <li><a href="{{asset('manager-post?page='. ($i+1))}}">{{$i + 1}}</a></li>
                @endfor
                <li><a href="manager-post?page={{$postCount}}">&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop