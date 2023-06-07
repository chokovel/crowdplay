@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{'Create Portfolio'}}
        </div>
        <div class="card-body">

            @include('partials.errors')

            <form action="{{ route('portfolios.store') }}" method="POST" enctype= multipart/form-data>
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
                    <input type="hidden" id="project_id" class="form-control" name="project_id" value="$project_id">
                </div>

                <div class="form-group">
                    <label for="portfolio">Image</label>
                    <input type="file" id="portfolio" class="form-control" name="portfolio" value="">
                </div>

                <div class="form-group">
                    <button class="btn btn-success">{{'Create portfolio'}}</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
