@extends('layouts.masterpage')

@section('content')
<div class="container-fluid" style="overflow: hidden;">
    <table border="1" class="w-100 col-12 table table-striped">
        <caption></caption>
        <thead class="thead-dark">
            <tr class="col-12">
                <th style=" width: 20%">Người đăng</th>
                <th style=" width: 40%">Tiêu đề</th>
                <th style=" width: 15%">SDT</th>
                <th style=" width: 15%" >Giá</th>
                <th style=" width: 10%" >Chi tiết</th>
            </tr>
        </thead>
        <tbody class="thead-light">
            @foreach($approval as $appro)
            <tr>
                <td>{{$appro->fullname}}</td>
                <td>{{$appro->title}}</td>
                <td>{{$appro->phone_number}}</td>
                <td>{{$appro->price}} đ</td>            
                <td class="text-center">
                    <a type="button" href="{{asset('approval/detail'.$appro->id)}}" class="btn btn-outline-success fa fa-eye"></a>                
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop