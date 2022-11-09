@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Add Project</h1>
        <!-- <form> -->
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
            </div>
            <div class="form-group">
                <label for="input-file">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input-file" name="picture">
                        <lebel class="custom-file-label" for="input-file">Choose file</lebel>
                    </div>
                </div>
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