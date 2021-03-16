<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App;
class TasksController extends Controller
{
    public function index(){
        $tasks = Task::incompleted();
        return view('tasks.index', [
            'tasks' => Task::all(),
        ]);
    }

    public function show($id){
        $task = Task::find($id);
        return view('tasks.show', [
            'task' => Task::find($id),
        ]);
    }
}
