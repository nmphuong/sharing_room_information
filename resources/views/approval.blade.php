@extends('layouts.masterpage')

@section('content')
<div class="container-fluid" style="overflow: hidden;">
    <table border="1" class="w-100 col-12 table table-striped">
        <caption></caption>
        <thead class="thead-dark">
            <tr class="col-12">
                <th style=" width: 10%">Tiêu đề</th>
                <th style=" width: 25%">Nội dung</th>
                <th style=" width: 15%">Người đăng</th>
                <th style=" width: 10%">SDT</th>
                <th style=" width: 10%" >Tiện ích</th>
                <th style=" width: 20%">Hình ảnh</th>
                <th style=" width: 10%">Thao tác</th>
            </tr>
        </thead>
        <tbody class="thead-light">
            @foreach($approval as $appro)
            <tr>
                <td>{{$appro->title}}</td>
                <td>{{$appro->content}}</td>
                <td>{{$appro->fullname}}</td>
                <td>{{$appro->phone_number}}</td>
                <td>{{$appro->utilities}}</td>
                <?php 
                        $image = str_replace("[","",$appro->image);
                        $image = str_replace("]","",$image);
                        $image = str_replace("`","",$image);
                        $dirs = explode(',', $image);
                        //dd($room->image ,$dirs); 
                    ?>
                <td>@for($i = 0; $i < count($dirs); $i++)<img src="{{$dirs[$i]}}" class="w-50" alt="">@endfor</td>
                <td class="text-center">
                    <button type="button" class="fa fa-check btn btn-outline-success"></button>
                    <button type="button" class="fa fa-comments btn btn-outline-warning"></button>
                   <button type="button" class="fa fa-times btn btn-outline-danger"></button>                
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop