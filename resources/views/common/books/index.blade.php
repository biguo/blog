@extends('layouts.app')

@section('content')
    @if(isset($lastName))
        <input value="{{$lastName}}">
    @endif
    @if(isset($haha))
        <input value="{{$haha}}">
    @endif
    <input value="Here is content">
@endsection