@extends('layouts')
@section('title')
Taks | Home
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="col-md-8 offset-2 mt-3">

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </form>
        </div>

    </div>
</div>
@endsection