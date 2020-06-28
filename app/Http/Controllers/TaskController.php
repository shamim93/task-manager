<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Hamcrest\Description;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->latest()->get();
        //$this->authorize('create-task',$tasks);
        return view('index',['tasks' =>$tasks]);
    }

    public function show($taskId)
    {
        
        $task = Task::findOrFail($taskId);
        $this->authorize('show-task',$task);
        return view('show',['task'=>$task]);

    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' =>'required|max:255',
                'description' =>'required',
            ]
        );
        $data['user_id'] = $request->user()->id; 
        Task::create($data);
        return redirect()->route('index')->with('success', "Task Added");
    }
    public function edit($taskId)
    {
        $task = Task::findOrFail($taskId);
        $this->authorize('edit-task',$task);
        return view('edit',['task'=>$task]);
    }
    public function update(Request $request, $taskId)
    {
        $task = Task::findOrFail($taskId);
        $data = $request->validate(
            [
                'title' =>'required|max:255',
                'description' =>'required',
            ]
        );
        $task->fill($data);
        $task->save();
        return redirect()->route('index')->with('success', "Task Added");
        return redirect()->route('index')->with('success','Task has been updated');
    }
    public function destroy($taskId)
    {
        $task = Task::findOrFail($taskId);
        $this->authorize('delete-task',$task);
        $task->delete();
        return redirect()->route('index')->with('success','Task has been deleted');
    }
}
