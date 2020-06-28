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
                <div class="card-header">Details</div>
                <div class="card-body">
                    {{$task->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection