<?php

use App\Model\Task;
use Illuminate\Http\Request;

Route::auth();
/**
 * Display All Tasks
 */

Route::get('/tasks', 'Common\TaskController@index');
Route::post('/task', 'Common\TaskController@store');
Route::delete('/task/{task}', 'Common\TaskController@destroy');

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('common.tasks', [
        'tasks' => $tasks
    ]);
});

/*Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:6',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create The Task...
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});*/

/*Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();
    return redirect('/');
});*/