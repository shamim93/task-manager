@extends('layouts')
@section('title')
Single Task-{{$task->title}}
@endsection
@section('content')
<div class="container">
    <h3 class="text-center mt-5">{{$task->title}}</h3>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Details
                    <a href="{{route('edit',$task->id)}}" class="btn btn-warning btn-sm float-right">Edit</a>
                    <form action="{{route('delete',$task->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-danger btn-sm float-right" value="Delete">
                    </form>
                </div>
                <div class="card-body">
                    {{$task->description}}
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection