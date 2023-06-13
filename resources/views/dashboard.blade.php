<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="py-4">
    @auth
        <div class="container">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>

        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>

        @endif

            <div class="row">
                <div class="col-md-4 mb-5">
                    <ul class="list-group mb-5">
                        @if (auth()->user()->isAdmin())
                        <li class="list-group-item">
                            <a href=" {{route('users.index')}}">Users</a>
                        </li>
                        @endif
                        <li class="list-group-item">
                            <a href=" {{route('posts.index')}}">Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('categories.index')}}">Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tags.index')}}">Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('events.index')}}">Events</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('albums.index')}}">Album</a>
                        </li>
                    </ul>

                    <ul class="list-group mb-5">
                        <li class="list-group-item">
                            <a href=" {{route('trashed-posts.index')}}">Trashed Posts</a>
                        </li>
                    </ul>
                </div>
                <div>
                    Welcome
                </div>
                <div class="col-md-8">
                       {{ __('Welcome!') }}
                       {{ __('You are logged in!') }}
                </div>
            </div>
             @else
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                        {{ 'You are logged in!' }}
                        </div>
        </div>

    @endauth
</main>
</x-app-layout>
