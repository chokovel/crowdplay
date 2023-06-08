@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('artists.create') }}" class="btn btn-success">Create Artist</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Artists</div>

        <div class="card-body">
            @if($artists->count() > 0)
                <table class="table">
                    <thead>
                        <th>Image</th>
                        <th>Artist Name</th>
                        <th>Stage Name</th>
                        <th>Art Profession</th>
                         <th>Verified</th>
                        <th>Action</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($artists as $artist)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $artist->image) }}" alt="{{ $artist->stagename }}" style="width:75px; height:75px; object-fit:cover;">
                                </td>
                                <td>
                                    {{ $artist->firstname }} {{ $artist->lastname }}
                                </td>
                                <td>
                                    {{ $artist->stagename }}
                                </td>
                                <td>
                                    {{ $artist->artprofession }}
                                </td>
                                <td>
    <form action="{{ route('toggle-verification', $artist->id) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-primary btn-sm">
            {{ $artist->verified ? 'Verify' : 'Verified' }}
        </button>
    </form>
</td>


                                @if($artist->trashed())
                                    <td>
                                        <form action="{{ route('restore-artists', $artist->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                            <button type="submit" class="btn btn-info btn-sm"> restore </button>
                                        </form>
                                    </td>
                                    @else
                                    <td>
                                        <a href="{{  route('artists.edit', $artist->id) }}" class="btn btn-info btn-sm"> Edit </a>
                                    </td>


                                    @endif
                                    <td>
                                    <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            {{ $artist->trashed() ? 'Delete' : 'Trash' }}
                                        </button>
                                    </form>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No Artists Yet</h3>
            @endif
        </div>
    </div>
</div>
@endsection
