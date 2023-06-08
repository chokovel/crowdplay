@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('albums.create') }}" class="btn btn-success">Create Album</a>
</div>

<div class="card card-default">
<div class="card-header">Albums</div>

<div class="card-body">
@if($albums->count() > 0)
<table class="table">
    <thead>
        <th>Image</th>
        <th>Name</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($albums as $album)
            <tr>
                <td>
                    <img src=" {{ asset(str_replace('public', 'storage', $album->cover_image)) }}" alt=" {{$album->name}} " style="width:75px; height:75px; object-fit:cover;">
                </td>

                <td>
                    {{ $album->name }}
                </td>

                <td>
                    <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-info btn-sm"> Edit </a>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="handleDelete( {{$album->id}} )"> Delete </button>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>

<!-- <div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div> -->
@else

<h3 class="text-center">No Album Yet</h3>
@endif

        <form action="" method="POST" id="deleteAlbumForm">
                @csrf

                @method('DELETE')

                 <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModaLabel">Delete Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">
                            Are you sure you want to delete Album?
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

        <ul class="pagination-wrap text-center mt-30">
            {{ $albums->links()}}
        </ul>
</div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {

            var form = document.getElementById('deleteAlbumForm');

            form.action = '/albums/' + id

            $('#deleteModal').modal('show')
        }
    </script>
@endsection
