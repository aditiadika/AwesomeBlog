<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>H A K A</title>

    <!-- Styles -->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
            @if(Auth::check())
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>

                        <h4 class="text-center">Main Area</h4>
                        <li class="list-group-item">
                            <a href="{{ route('posts') }}">All Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}">Create New Post</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('category') }}">All Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('category.create') }}">Create New Category</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tags') }}">All Tags</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tags.create') }}">Create New Tag</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('get.subscribe') }}">Subscriber</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('posts.trashed') }}">All Trashed Post</a>
                        </li>

                        <h4 class="text-center">Import Excel Area</h4>
                        <li class="list-group-item">
                            <a href="{{ route('index.rangking-volume') }}">Ranking Volume</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('index.trend-reversal') }}">Bandarmology</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('index.boom') }}">Breakout</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('index.foreign-accumulation') }}">Foreign Accumulation</a>
                        </li>

                        <h4 class="text-center">Setting Area</h4>
                        <li class="list-group-item">
                            <a href="{{ route('users.profile') }}">My Profile</a>
                        </li>
                        @if(Auth::user()->admin)
                            <li class="list-group-item">
                                <a href="{{ route('users') }}">All Users</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('users.create') }}">Create New User</a>
                            </li>
                        @endif
                        @if(Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{ route('setting') }}">Blog Setting</a>
                        </li>
                        @endif
                    </ul>
                </div>
            @endif
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
{{--    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>--}}
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

         @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>

    @yield('scripts')
</body>
</html>
