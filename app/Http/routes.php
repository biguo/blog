<?php

use App\Model\Task;
use Illuminate\Http\Request;

Route::auth();
/**
 * Display All Tasks
 */

Route::get('/books', 'Common\BooksController@index');

Route::get('/tasks', 'Common\TaskController@index');
Route::post('/task', 'Common\TaskController@store');
Route::delete('/task/{task}', 'Common\TaskController@destroy');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
