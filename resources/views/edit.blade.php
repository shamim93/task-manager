@extends('layouts')
@section('title')
Add Task
@endsection
@section('content')
<div class="container">
    <h3 class="text-center mt-5">Add New Task</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Details</div>
                <div class="card-body">
                    <form action="{{route('update',$task->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$task->title}}">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{$task->description}}</textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                           <input type="submit" class="btn btn-primary btn-block" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection