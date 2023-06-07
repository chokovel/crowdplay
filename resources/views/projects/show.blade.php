@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('projects.create') }}" class="btn btn-success">Create Project</a>
</div>

<div class="card card-default">
<div class="card-header">Projects</div>

<div class="card-body">
@if($project->count() > 0)
<table class="table">
    <thead>
        <th>{{$project->name}}</th>
    </thead>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary mr-2">Go Back</a>
    <a href="/photos/create/{{$project->id}}" class="btn btn-info"> Upload photo to project</a>
    <tbody>
            <tr>
                <td>
                    <img src=" {{ asset($project->photos->photo) }}" alt=" {{$project->photos->title}} " style="width:75px">
                </td>
            </tr>
    </tbody>
</table>

<div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
@else

<h3 class="text-center">No Project Yet</h3>
@endif
</div>
</div>


@endsection
