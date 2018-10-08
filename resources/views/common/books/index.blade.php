@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->

        <div class="form-horizontal">
            @if(isset($lastName))
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">lastName</label>
                    <div class="col-sm-6">
                        <input type="text" name="lastName" value="{{$lastName}}" class="form-control">
                    </div>
                </div>
            @endif
            @if(isset($haha))
                <div class="form-group">
                    <label for="haha" class="col-sm-3 control-label">haha</label>
                    <div class="col-sm-6">
                        <input type="text" name="haha" value="{{$haha}}" class="form-control">
                    </div>
                </div>
            @endif
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <input type="text" value="Here is content" class="form-control">
                </div>
            </div>

        </div>
    </div>

@endsection