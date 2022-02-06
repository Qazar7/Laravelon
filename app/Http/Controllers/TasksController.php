<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
   public  function index()
   {
       $tasks = Task::latest()->get();

       return view('tasks.index', compact('tasks'));
   }
   public function show(Task $task)
   {
//       $task = Task::find($task);

       return view('tasks.show', compact('task'));
   }
    public function create()
    {

        return view('tasks.create');
    }
    public function store()
    {
        $this->validate(request(), [
             'title'=>'required',
             'body'=>'required',
        ]);
        $task = new Task();

        $task->title = request('title');
        $task->body = request('body');

        $task->save();

        return redirect('/tasks');

    }
    public function master()
    {

        return view('layout.master');
    }

}
