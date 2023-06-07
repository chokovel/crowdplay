@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">Users</div>
        @include('partials.errors')
        <div class="card-body">
            @if($users->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                        <tr>

                            <td>
                                <img src="{{ Avatar::create('email')->toGravatar() }}" alt=" {{$user->name}} " style="width:50px; border-radius:50%;">
                                {{-- <img src="{{Gravatar::src($user->email)}}" alt=" {{$user->name}} " style="width:50px; border-radius:50%;"> --}}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                    {{ $user->email }}
                            </td>
                            <td>
                                    {{ $user->role }}
                            </td>
                            <td>
                                <form action="{{ route('user.make-admin', $user->id) }}" method="post">
                                    @csrf
                                    @method('put')

                                    @if ($user->isAdmin())
                                        <input type="hidden" name="role" value="user">
                                        <button class="btn btn-danger btn-sm">Make User</button>
                                    @else
                                        <input type="hidden" name="role" value="admin">
                                        <button class="btn btn-success btn-sm">Make Admin</button>
                                    @endif
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            @else

            <h3 class="text-center">No User Yet</h3>
            @endif
        </div>
    </div>


@endsection
