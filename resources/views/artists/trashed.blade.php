@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('artists.create') }}" class="btn btn-success">Create Artist</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Artists</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Stage Name</th>
                    <th>Action</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                        <tr>
                            <td>
                                <img src="{{ asset($artist->image) }}" alt="{{ $artist->stagename }}" style="width:75px">
                            </td>
                            <td>
                                {{ $artist->stagename }}
                            </td>
                                <td>
                                    <button><a href="{{ route('artists.edit', $artist->slug) }}" class="btn btn-info btn-sm"> Edit </a><button>
                                </td>
                                <td>
                                <form action="{{ route('artists.destroy'. $artist->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-sm"> Trash </button>
                                </form>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="handleDelete( {{$artist->slug}} )"> Delete </button>
                                </td>

                            {{-- <td>
                                <a href="{{ route('pending-artists.index', $artist->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-sm">Trash</button>
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete('{{ $artist->id }}')">Delete</button>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="" method="POST" id="deleteArtistForm">
                @csrf
                @method('DELETE')

                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Artist</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-bold">
                                    Are you sure you want to delete the artist?
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
</div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteArtistForm');
            form.action = '/artists/' + id;
            $('#deleteModal').modal('show');
        }
    </script>
@endsection
