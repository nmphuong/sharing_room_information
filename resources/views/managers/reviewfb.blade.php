@extends('layouts.masterpage')

@section('content')
@foreach ($post as $data)
    <div class="container pt-2 pb-3">
    <div class="row" id="form form-add-post">
        <div class="title col-lg-12">
          <p class="mb-2">{{$data->fullname}}</p>
        </div>
        <div class="content col-lg-12 mb-2">
          <p class="mb-2">{{$data->email}}</p>
        </div>
        <div class="content col-lg-12 mb-2">
          <p class="mb-2">{{$data->title}}</p>
        </div>
        <div class="col-lg-12">
          <p class="mb-2">{{$data->content}}</p>
        </div>
        <div class="content col-lg-12 mb-2">
          <p class="mb-2">
            <?php 
              if($data->status == 0){
                $type = "Chưa trả lời";
              } else {
                $type = "Đã phản hồi";
              } 
            ?>
            {!! $type !!}
          </p>
        </div>
        <div class="col-lg-12">
          <p class="mb-2">{{$data->created_at}}</p>
        </div>
        <div class="col-lg-12 pt-3">
          <form class="row" id="form form-add-post" action="" method="post">
            <div class="col-md-12">
              <div class="form-group">
                <label class="label text-dark" for="#">Nội dung trả lời</label>
                <input style="display: none;" type="text" class="form-control" name="id" id="id" placeholder="id" required value="{{$post[0]->id}}">
                <input style="display: none;" type="email" class="form-control" name="email" id="email" placeholder="Email" required value="{{$post[0]->email}}">
                <textarea name="message" class="form-control" id="message" cols="30"
                  rows="10" placeholder="Nội dung" required minlength="20" value="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum cumque eaque maiores necessitatibus, praesentium accusantium provident iusto, harum aut, repellendus libero inventore error consequatur natus omnis quaerat. Assumenda, sequi. Reiciendis!Consequatur repellat repellendus quae, eius eum voluptate esse, alias, quas accusantium explicabo mollitia! Veniam doloremque saepe libero, velit blanditiis temporibus. Laboriosam libero quam nisi labore ipsum fugiat sequi rerum mollitia.</textarea>
              </div>
            </div>
            
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Gửi</button>
              <a href="{{asset('feedback')}}" class="btn btn-danger">Trở về</a>
            </div>
            {{csrf_field()}}
          </form>
        </div>
    </div>
</div>
@endforeach
@stop