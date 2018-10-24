@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->

        <div class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <input type="text" value="Here is content" class="form-control">
                </div>
            </div>

        </div>
        @foreach($data as $key => $value)
            <div>{{$key}}</div>
            <div>{{$value}}</div>
        @endforeach
        <?php $tasks = \App\Model\Task\Task::all() ?>
        @include('partial.name', ['some' => $data, 'tasks' => $tasks])
    </div>


@endsectionl

