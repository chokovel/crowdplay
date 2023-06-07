@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('projects.create') }}" class="btn btn-success">Create Project</a>
</div>

<div class="card card-default">
<div class="card-header">Projects</div>

<div class="card-body">
@if($projects->count() > 0)
<table class="table">
    <thead>
        <th>Image</th>
        <th>Name</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>
                    <img src=" {{ asset(str_replace('public', 'storage', $project->cover_image)) }}" alt=" {{$project->name}} " style="width:75px">
                </td>

                <td>
                    {{ $project->name }}
                </td>

                <td>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info btn-sm"> Edit </a>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="handleDelete( {{$project->id}} )"> Delete </button>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>

<!-- <div class="col-md">
    <div style='border-radius:10px'><iframe src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div> -->
@else

<h3 class="text-center">No Project Yet</h3>
@endif

        <form action="" method="POST" id="deleteProjectForm">
                @csrf

                @method('DELETE')

                 <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModaLabel">Delete Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">
                            Are you sure you want to delete Project?
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
            {{ $projects->links()}}
        </ul>
</div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {

            var form = document.getElementById('deleteProjectForm');

            form.action = '/projects/' + id

            $('#deleteModal').modal('show')
        }
    </script>
@endsection
