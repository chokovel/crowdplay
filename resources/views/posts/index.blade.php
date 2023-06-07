@extends('layouts.app')


@section('content')
<div class="container">
<div class="d-flex justify-content-end mb-2">
<a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
</div>

<div class="card card-default">
<div class="card-header">Posts</div>

<div class="card-body">
@if($posts->count() > 0)
<table class="table">
    <thead>
        <th>Image</th>
        <th>Title</th>
        <th>Category</th>
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
                <td>
                    <a href="{{ route('categories.edit', $post->category->id) }}"> 
                        {{ $post->category->name }}
                    </a>
                </td>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)        
                @if($post->trashed())
                <td>
                    <form action="{{ route('restore-posts', $post->slug) }}" method="post">
                    @csrf
                    @method('PUT')
                        <button type="submit" class="btn btn-info btn-sm"> restore </button>
                    </form>
                </td>
                @else
                <td>
                    <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-info btn-sm"> Edit </a>
                </td>


                @endif
                <td>
                <form action="{{ route('posts.destroy', $post->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"> 
                        {{ $post->trashed() ? 'Delete' : 'Trash' }}
                    </button>
                </form>
                </td>
            @endif      
            </tr>
        @endforeach
        
    </tbody>
</table>
@else

<h3 class="text-center">No Post Yet</h3>
@endif
</div>
</div>


@endsection