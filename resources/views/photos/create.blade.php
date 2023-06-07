@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{'Create Photo'}}
        </div>
        <div class="card-body">
        
            @include('partials.errors')

            <form action="{{ route('photos.store') }}" method="POST" enctype= multipart/form-data>
                @csrf
        
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" id="description" col="3" class="form-control" name="description"></textarea>
                </div>
                
                <div class="form-group">
                    <input type="hidden" id="album_id" class="form-control" name="album_id" value="$album_id">
                </div>
               
                <div class="form-group">
                    <label for="photo">Image</label>7
                    <input type="file" id="photo" class="form-control" name="photo" value=""> 
                </div>

                <div class="form-group">
                    <button class="btn btn-success">{{'Create photo'}}</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection
