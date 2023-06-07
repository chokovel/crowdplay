@extends('layouts.app')


@section('content')
<div class="container">

<div class="card card-default">
<div class="card-header">Photos</div>

<div class="card-body">
@if($album->photo->count() > 0)
<table class="table">
    <thead>
        <th>{{$photo->title}}</th>
    </thead>
    <a href="{{ route('photos.index') }}" class="btn btn-secondary mr-2">Go Back</a>
    <a href="/photos/create/{{$photo->id}}" class="btn btn-info"> Upload photo to photo</a>
    <tbody>
            <tr>
                <td>
                    <img src=" {{ asset($photo->cover_image) }}" alt=" {{$photo->name}} " style="width:75px">
                </td>
            </tr>
        
        
    </tbody>
</table>

<div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
@else

<h3 class="text-center">No Photo Yet</h3>
@endif
</div>
</div>


@endsection