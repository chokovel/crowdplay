@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">My Profile</div>

        <div class="card-body">

            @include('partials.errors')

            <form action="{{ route('user.update-profile') }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="about">About Me</label>
                    <textarea col="5" row="5" class="form-control" name="about" id="about" >
                        {{ $user->about }}
                    </textarea>
                </div>

                <button class="btn btn-success" type="submit">Update Profile</button>
            
            </form>

        </div>
    </div>
        

@endsection