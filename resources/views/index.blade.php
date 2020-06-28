@extends('layouts')
@section('title')
Taks | Home
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="card card-default">
                <div class="card-header">
                    Daily Tasks
                    <a href="{{route('create')}}" class="btn btn-info sm float-right">Add Task</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tasks as $task)
                        <li class="list-group-item">
                            {{$task->title}}
                        <a href="{{route('show',$task->id)}}" class="btn btn-primary sm float-right">View</a>
                        <!-- <a href="#" class="btn btn-warning sm float-right">Edit</a>
                        <a href="#" class="btn btn-danger sm float-right">Delete</a> -->
                        </li>
                        
                        
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection