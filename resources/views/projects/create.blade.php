@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($project) ? 'Edit Project' : 'Create Project'}}
        </div>
        <div class="card-body">

            @include('partials.errors')

            <form action="{{ isset($project) ? route('projects.update', $project->id) : route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($project))
                    @method('PUT')
                @endif

                <!-- Project Information -->
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" class="form-control" value="{{ isset($project) ? $project->name : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Project Description</label>
                    <textarea name="description" class="form-control">{{ isset($project) ? $project->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" name="cover_image" class="form-control">
                </div>

                <!-- Existing Portfolios -->
                @if(isset($project) && $project->portfolios && $project->portfolios->count() > 0)
                    <div class="form-group">
                        <label>Existing Portfolios</label>
                        <ul>
                            @foreach($project->portfolios as $portfolio)
                                <li>{{ $portfolio->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- New Portfolios -->
                <div class="form-group">
                    <label for="photos">New Portfolios</label>
                    <input type="file" name="photos[]" class="form-control" multiple>
                </div>

                <!-- Remove Portfolios -->
                @if(isset($project) && $project->portfolios && $project->portfolios->count() > 0)
                    <div class="form-group">
                        <label for="remove_photos">Remove Portfolio</label>
                        <select name="remove_photos[]" class="form-control" multiple>
                            @foreach($project->portfolios as $portfolio)
                                <option value="{{ $portfolio->id }}">{{ $portfolio->title }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Save Project</button>
            </form>



        </div>
    </div>

</div>
@endsection
