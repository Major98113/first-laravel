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


//Route::get('hello', function () {
//    $tasks = [
//        'add task',
//        'delete task',
//        'upgrade task'
//    ];
//
//    return view('hello', compact('tasks'));
//});
//
//Route::get('tasks', function (){
//    //$tasks = App\Task::all();
//    $tasks = App\Task::incomplete();
//    return view('tasks.index',compact('tasks'));
//});
//
//Route::get('tasks/{task}', function ($id){
//    $task = App\Task::find($id);
//    return view('tasks.show',compact('task'));
//});


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');