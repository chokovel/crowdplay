@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
       {{-- <!-- <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a> --> --}}
    </div>

    <div class="card card-default">
        <div class="card-header">Welcome</div>

        <div class="card-body">
        {{ 'You are logged in!' }}
        </div>
    </div>
        

@endsection