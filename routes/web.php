<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello-message', function () {
    return 'Hello';
});


Route::get('hello', function () {
    $tasks = [
        'add task',
        'delete task',
        'upgrade task'
    ];

    return view('hello', compact('tasks'));
});

Route::get('tasks', function (){
    $tasks = DB::table('tasks')->get();
    return view('tasks',compact('tasks'));
});

Route::get('tasks/{task}', function ($id){
    $task = DB::table('tasks')->find($id);
    dd($task);
    return view('tasks',compact('task'));
});


