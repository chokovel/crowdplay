@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($album) ? 'Edit Album' : 'Create Album'}}
        </div>
        <div class="card-body">

            @include('partials.errors')

            <form action="{{ isset($album) ? route('albums.update', $album->id) : route('albums.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($album))
                    @method('PUT')
                @endif

                <!-- Album Information -->
                <div class="form-group">
                    <label for="name">Album Name</label>
                    <input type="text" name="name" class="form-control" value="{{ isset($album) ? $album->name : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Album Description</label>
                    <textarea name="description" class="form-control">{{ isset($album) ? $album->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" name="cover_image" class="form-control">
                </div>

                <!-- Existing Photos -->
                @if(isset($album) && $album->photos->count() > 0)
                    <div class="form-group">
                        <label>Existing Photos</label>
                        <ul>
                            @foreach($album->photos as $photo)
                                <li>{{ $photo->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- New Photos -->
                <div class="form-group">
                    <label for="photos">New Photos</label>
                    <input type="file" name="photos[]" class="form-control" multiple>
                </div>

                <!-- Remove Photos -->
                @if(isset($album) && $album->photos->count() > 0)
                    <div class="form-group">
                        <label for="remove_photos">Remove Photos</label>
                        <select name="remove_photos[]" class="form-control" multiple>
                            @foreach($album->photos as $photo)
                                <option value="{{ $photo->id }}">{{ $photo->title }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Save Album</button>
            </form>



        </div>
    </div>

</div>
@endsection
