<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Hamcrest\Description;
use Illuminate\Http\Request;

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
        $data['user_id'] = $request->user->id; 
        Task::create($data);
        return redirect()->route('index')->with('success', "Task Added");
    }
}
