@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('albums.create') }}" class="btn btn-success">Create Album</a>
</div>

<div class="card card-default">
<div class="card-header">Albums</div>

<div class="card-body">
@if($album->count() > 0)
<table class="table">
    <thead>
        <th>{{$album->name}}</th>
    </thead>
    <a href="{{ route('albums.index') }}" class="btn btn-secondary mr-2">Go Back</a>
    <a href="/photos/create/{{$album->id}}" class="btn btn-info"> Upload photo to album</a>            
    <tbody>
            <tr>
                <td>
                    <img src=" {{ asset($album->photos->photo) }}" alt=" {{$album->photos->title}} " style="width:75px">  
                </td>
            </tr>   
    </tbody>
</table>

<div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
@else

<h3 class="text-center">No Album Yet</h3>
@endif
</div>
</div>


@endsection