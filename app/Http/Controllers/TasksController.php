<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\User;

class TasksController extends Controller
{
    public function index(){

        $tasks = Tasks::all();

        return view('welcome',['tasks'=>$tasks]);
    }

    public function store(Request $request){
        $task = new Tasks;

        $request->titleTask = ($request->titleTask == null) ? " " : $request->titleTask;
        $request->descriptionTask = ($request->descriptionTask == null) ? " " : $request->descriptionTask;

        $task->title = $request->titleTask;
        $task->description = $request->descriptionTask;

        $task->save();

        return redirect('/')->with('msg','Nova tarefa adicionada a lista!');
    }
}
