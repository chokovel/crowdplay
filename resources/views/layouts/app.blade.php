<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>CrowdPlay Studio</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.btn-info {
    color:#fff;
}
body {
    background-color: ;
}
.card-header {
    background-color: purple;
    color: #fff;
}
a{
    color: purple;
}
a:hover{
    color: plum;
    text-decoration: none;
    transition: 0.75s;
}
.btn-success {
    background-color: purple;
}
.btn-success:hover {
    background-color: purple;
}
</style>

@yield('css')

</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('user.edit-profile') }}">

                                {{ __('My Profile') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

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
                        <li class="list-group-item">
                            <a href=" {{route('artists.index')}}">Artists</a>
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
                        <li class="list-group-item">
                            <a href="{{ route('photos.index')}}">Photos</a>
                        </li>
                    </ul>

                    <ul class="list-group mb-5">
                    @if (auth()->user()->isAdmin())
                        <li class="list-group-item">
                            <a href=" {{route('pending-artists.index')}}">Pending Artists</a>
                        </li>
                    @endif
                        <li class="list-group-item">
                            <a href=" {{route('trashed-posts.index')}}">Trashed Posts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
    @else
                    @yield('content')
    @endauth
</main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

</body>
</html>
