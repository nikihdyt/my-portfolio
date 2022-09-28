@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <h1>Edit Project</h1>
        <!-- <form> -->
        <form action="{{ route('projects.update', $projects->id) }}" method="POST">
        @method('PUT')
        {{ csrf_field() }}
            <div class="form-group">
                    <label for="title"></label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$projects->title}}">
                    @error('title')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                    <label for="image"></label>
                    <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class = "form-control" id="description" rows="5" name="description" >{{$projects->description}}</textarea>
                @error('description')
                <div class="text-danger">* {{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{ $projects->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection