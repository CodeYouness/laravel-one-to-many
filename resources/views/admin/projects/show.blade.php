@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>{{$project->id}} : {{$project->author}}</h1>
            <h3>{{$project->title}}</h3>
            <h3>{{$project->date}}</h3>
            <div class="img">
                <img src="{{$project->image}}" alt="{{$project->author}}" class="img-fluid">
            </div>
            <p>{{$project->content}}</p>
            <div class="card-footer">
                <a href="{{route('admin.projects.index', $project )}}" class="btn btn-primary btn-sm">Return to list</a>
                <a href="{{route('admin.projects.edit', $project )}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{route('admin.projects.destroy', $project )}}" method="POST" class="d-inline-block form-destroyer" data-post-title="{{$project->title}}">
                    @method('delete')
                    @csrf
                    <input type="submit" class="btn btn-warning btn-sm" value="Delete">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
