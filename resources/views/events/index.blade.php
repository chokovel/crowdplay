@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('events.create') }}" class="btn btn-success">Create Event</a>
</div>

<div class="card card-default">
<div class="card-header">Events</div>

<div class="card-body">
@if($events->count() > 0)
<table class="table">
    <thead>
        <th>Image</th>
        <th>Title</th>
        <th>Venue</th>
        <th>Start</th>
        <th>End</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>
                    <img src=" {{ asset($event->image) }}" alt=" {{$event->title}} " style="width:75px">
                </td>
                <td>
                    {{ $event->title }}
                </td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}"> 
                        {{ $event->venue }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}"> 
                        {{ $event->start }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}"> 
                        {{ $event->end }}
                    </a>
                </td>     
                <td>
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info btn-sm"> Edit </a>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="handleDelete( {{$event->id}} )"> Delete </button>
                </td> 
            </tr>
        @endforeach
        
    </tbody>
</table>

<!-- <div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div> -->
@else

<h3 class="text-center">No Event Yet</h3>
@endif

<form action="" method="POST" id="deleteEventForm">
                @csrf
                 
                @method('DELETE')

                 <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModaLabel">Delete Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">
                            Are you sure you want to delete Event?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Go back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                    </div>
                </div>
                </div>
           </form>

</div>
</div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {

            var form = document.getElementById('deleteEventForm');

            form.action = '/events/' + id

            $('#deleteModal').modal('show')
        }
    </script>
@endsection