
<option id="opt-ward" value="ward">--Phường--</option>
@foreach ( $ward as $item )
    <option value="{{$item->id}}">{{$item->_name}}</option>
@endforeach