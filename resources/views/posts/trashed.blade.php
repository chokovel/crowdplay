@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Posts</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                               <img src=" {{ asset($post->image) }}" alt=" {{$post->title}} " style="width:75px">
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)        
                            <td>
                                <button><a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-info btn-sm"> Edit </a><button>
                            </td>
                            <td>
                            <form action="{{ route('posts.destroy'. $post->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning btn-sm"> Trash </button>
                            </form>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete( {{$post->slug}} )"> Delete </button>
                            </td>
                        @endif      
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>

           <form action="" method="POST" id="deleteCategoryForm">
                @csrf
                 
                @method('DELETE')

                 <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModaLabel">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">
                            Are you sure you want to delete post?
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

            var form = document.getElementById('deleteCategoryForm');

            form.action = '/posts/' + slug

            $('#deleteModal').modal('show')
        }
    </script>
@endsection