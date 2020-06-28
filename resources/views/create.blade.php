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
                   <form action="{{route('store')}}" method="POST"></form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection