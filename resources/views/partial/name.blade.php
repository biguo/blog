name.blade.php

@foreach($some as $key => $value)
    <div>{{$key}}</div>
    <div>{{$value}}</div>
@endforeach


@foreach($tasks as $key => $value)
    <div>{{$key}}</div>
    <div>{{print_r(json_decode($value, true))}}</div>
@endforeach

