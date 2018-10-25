<?php

use App\Model\Task;
use Illuminate\Http\Request;

Route::auth();

Route::resource('photo', 'Common\PhotoController');
Route::get('/books', 'Common\BooksController@index');

Route::get('/tasks', 'Common\TaskController@index');
Route::post('/task', 'Common\TaskController@store');
Route::delete('/task/{task}', 'Common\TaskController@destroy');


Route::any('{module}/{dir}/{controller}/{action}', function (\Illuminate\Http\Request $request, $module, $dir, $controller, $action) {
    $classname = 'App\Http\Controllers\\' . ucfirst($module) . "\\" . ucfirst($dir) . "\\" . ucfirst($controller) . "Controller";
    return (new $classname())->$action($request);
});

Route::any('{dir}/{controller}/{action}', function (\Illuminate\Http\Request $request, $dir, $controller, $action) {
    $classname = 'App\Http\Controllers\\' . ucfirst($dir) . "\\" . ucfirst($controller) . "Controller";
    return (new $classname())->$action($request);
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
