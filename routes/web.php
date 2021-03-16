<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TasksController@index');
Route::get('/{task}', 'App\Http\Controllers\TasksController@show');

// Route::get('/', function () {
//     // $tasks = DB::table('tasks')->get();
//     // $tasks = App\Models\Task::all();
//     $tasks = App\Models\Task::incompleted();
//     return view('tasks.index', compact('tasks'));
// });
// Route::get('/tasks/{task}', function ($id) {
//     $task = DB::table('tasks')->find($id);
//     return view('tasks.show', compact('task'));
// });