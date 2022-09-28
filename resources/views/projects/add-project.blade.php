@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Add Project</h1>
        <!-- <form> -->
        <form action="{{ route('projects.store') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                    <label for="title"></label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>
            <div class="form-group">
                    <label for="image"></label>
                    <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class = "form-control" id="description" rows="5" name="description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection