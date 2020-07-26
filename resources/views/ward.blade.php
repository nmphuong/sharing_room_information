
<option id="opt-ward" value="-1">--Phường--</option>
@foreach ( $ward as $item )
    <option value="{{$item->id}}">{{$item->_name}}</option>
@endforeach
