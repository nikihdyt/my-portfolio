@extends('layouts.app')

@section('content')

<div class="container">
  <div class="column">
    <div class="row">
      <div class="col-sm">
          <div class="pro-img-details">
              <img src="https://cdn.dribbble.com/users/398488/screenshots/8141696/project-management_4x.png" alt="" width="400" height="300">
          </div>
      </div>
      <div class="col-sm">
          <h4 class="pro-d-title">{{$projects->title}}</h4>
          <p>{{$projects->description}}</p>
          <button class="btn btn-round btn-primary" type="button">Live Demo</button>
      </div>
    </div>

    @if(Auth::user())
    <div class="row">
        <div class="col-sm">
            <a href="/projects/{{$projects->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="{{ route('projects.destroy', $projects->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $projects->id }}"> <br />
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endif

  </div>
</div>

@endsection