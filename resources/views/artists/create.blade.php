@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($artist) ? 'Edit Artist' : 'Create Artist' }}
        </div>
        <div class="card-body">

            @include('partials.errors')

            <form action="{{ isset($artist) ? route('artists.update', $artist->id) : route('artists.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(isset($artist))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <input name="firstname" type="text" id="firstname" class="form-control" value="{{ isset($artist) ? $artist->firstname : '' }}" required>
                            <label for="firstname">First Name:</label>
                        </div>
                        <div class="md-form">
                            <input name="lastname" type="text" id="lastname" class="form-control" value="{{ isset($artist) ? $artist->lastname : '' }}" required>
                            <label for="lastname">Last Name:</label>
                        </div>
                        <div class="md-form">
                            <input name="stagename" type="text" id="stagename" class="form-control" value="{{ isset($artist) ? $artist->stagename : '' }}">
                            <label for="stagename">Stage Name:</label>
                        </div>
                        <div class="md-form">
                            <input name="phone" type="number" id="phone" class="form-control" value="{{ isset($artist) ? $artist->phone : '' }}" required>
                            <label for="phone">Phone:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form">
                            <input name="email" type="email" id="email" class="form-control" value="{{ isset($artist) ? $artist->email : '' }}" required>
                            <label for="email">Email:</label>
                        </div>
                        <div class="md-form">
                            <input name="address" type="text" id="address" class="form-control" value="{{ isset($artist) ? $artist->address : '' }}" required>
                            <label for="address">Address:</label>
                        </div>
                        <div class="md-form">
                            <input name="artprofession" type="text" id="artprofession" class="form-control" value="{{ isset($artist) ? $artist->artprofession : '' }}" required>
                            <label for="artprofession">Art Profession:</label>
                        </div>
                        <div class="md-form">
                            <input name="portfoliolink" type="text" id="portfoliolink" class="form-control" value="{{ isset($artist) ? $artist->portfoliolink : '' }}" required>
                            <label for="portfoliolink">Portfolio Link:</label>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2 mb-3">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose Image</span>
                                <input type="file" name="image" id="image">
                            </div>
                            {{-- <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select an image">
                            </div> --}}
                        </div>
                        @if(isset($artist) && $artist->image)
                            <div class="md-form mt-3">
                                <label for="current-image">Current Image:</label>
                                <img src="{{ asset('storage/'.$artist->image) }}" alt="Current Image" class="img-fluid">
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea name="bio" id="bio" class="form-control md-textarea" rows="4" required>{{ isset($artist) ? $artist->bio : '' }}</textarea>
                            <label for="bio">Brief professional biography:</label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" type="submit">{{ isset($artist) ? 'Update Artist' : 'Create Artist' }}</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
