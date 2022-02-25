<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\User;

class TasksController extends Controller
{
    public function index(){

        $user = auth()->user();
        $tasks = $user->tasks;


        return view('welcome',['tasks'=>$tasks]);
    }

    public function store(Request $request){
        $task = new Tasks;

        $request->titleTask = ($request->titleTask == null) ? " " : $request->titleTask;
        $request->descriptionTask = ($request->descriptionTask == null) ? " " : $request->descriptionTask;

        $task->title = $request->titleTask;
        $task->description = $request->descriptionTask;

        $user = auth()->user();
        $task->user_id = $user->id;

        $task->save();

        return redirect('/')->with('msg','Nova tarefa adicionada a lista!');
    }

    public function destroy($id) {
        Tasks::findOrFail($id)->delete();

        return redirect('/')->with('msg','Tarefa excluida com sucesso!');
    }

    public function ajaxSearch($id) {        
        $task = Tasks::findOrFail($id);

        echo json_encode("$task");
    }

    public function update(Request $request){

        Tasks::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg','Tarefa editada com sucesso!');

    }

}
