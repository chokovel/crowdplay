@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($event) ? 'Edit Event' : 'Create Event'}}
        </div>
        <div class="card-body">
        
            @include('partials.errors')

            <form action="{{ isset($event) ? route('events.update', $event->id ) : route('events.store') }}" method="POST" enctype= multipart/form-data>
                @csrf

            @if(isset($event))
                @method('PUT')
            @endif

        
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" name="title" value=" {{ isset($event) ? $event->title : '' }} ">
                </div>
                <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" id="venue" class="form-control" name="venue" value=" {{ isset($event) ? $event->venue : '' }} ">
                </div>
                <div class="form-group">
                    <label for="url">Venue URL on Map</label>
                    <input type="text" id="map_url" class="form-control" name="map_url" value=" {{ isset($event) ? $event->map_url : '' }} ">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" id="description" col="3" class="form-control" name="description">{{ isset($event) ? $event->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="start">Start Date</label>
                    <input type="date" id="start" class="form-control" name="start" value=" {{ isset($event) ? $event->start : '' }} ">
                </div>
                <div class="form-group">
                    <label for="end">End Date</label>
                    <input type="date" id="end" class="form-control" name="end" value=" {{ isset($event) ? $event->end : '' }} ">
                </div>

                @if(isset($event))

                    <div class="form-group">
                       <img src="{{ asset($event->image)}}" alt="" style="width:75px">
                    </div>

                @endif

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image" value=" {{ isset($event) ? $event->image : '' }} "> 
                </div>

                <div class="form-group">
                    <button class="btn btn-success">{{ isset($event) ? 'Update event' : 'Create event'}}</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#start', {
            enableTime: true,
            enableSeconds: true
        })

        $(document).ready(function() {
            $('.tagSelector').select2();
        });
    </script>
    <script>
        flatpickr('#end', {
            enableTime: true,
            enableSeconds: true
        })

        $(document).ready(function() {
            $('.tagSelector').select2();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@endsection