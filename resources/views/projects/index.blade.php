@extends('layouts.app')

@section('content')
<div class="container-fluid text-center bg-grey">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success')!!}
      </div>
    @endif

    <h1 class="display-4">Check this out my past projects!</h1><br>
    <div class="row text-center">
        @if(count($projects)>0)
            @foreach ($projects as $project)
            <div class="col-sm-4">
            <div class="thumbnail">
                <img src="https://cdn.dribbble.com/users/398488/screenshots/8141696/project-management_4x.png" width="400" height="300">
                <p><strong><a href="/projects/{{$project->id}}">
                {{$project->title}}</a></strong></p>
                <small>{{$project->created_at}}</small>
                </div>
            </div>
            @endforeach
        @else
        <p>No project added yet.</p>
        @endif
            </div>
            
        <button class="btn btn-dark"><a href="{{ route('projects.create') }}" style="color: #FFFFFF">Add Project</a></button>
    </div>

    <!-- pagination -->
    Halaman : {{ $projects->currentPage() }} <br />
    Jumlah Data : {{ $projects->total() }} <br />
    Data Per Halaman : {{ $projects->perPage() }} <br />
    <div class="d-flex"> {{ $projects->links() }} </div>
    
@endsection