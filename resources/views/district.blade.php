<option value="-1">--Quận/Huyện--</option>
@foreach ( $district as $item )
    <option value="{{$item->id}}">{{$item->_name}}</option>
@endforeach
