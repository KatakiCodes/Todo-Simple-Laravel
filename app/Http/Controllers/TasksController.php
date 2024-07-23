<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //index
    public function index(){
        $tasks = Task::all();
        return view('task.tasks',['tasks'=>$tasks]);
    }

    //strore
    public function store(Request $request){
        Task::create($request->all());
        return redirect()->route('tasks-index');
    }

    //edit
    public function edit($id){
        $task = Task::where('id',$id)->first();
        return view('task.edit',['task'=>$task]);
    }

    //update
    public function update(Request $request, $id){
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        Task::where('id',$id)->update($data);
        return redirect()->route('tasks-index');
    }

    //destroy
    public function destroy($id){
        Task::where('id',$id)->delete();
        return redirect()->route('tasks-index');
    }
}
