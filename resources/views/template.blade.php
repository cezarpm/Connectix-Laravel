<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/webfonts/all.css">
    <link rel="stylesheet" href="/css/style.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="image-responsive" src="/img/logo.png" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--                    <div class="search-nav">--}}
{{--                        <form class="form-inline">--}}
{{--                            <i class="fas fa-search mr-2"></i>--}}
{{--                            <input class="form-control" type="search" placeholder="Pesquise">--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item active">
                                <a class="btn btn-nav" href="{{ url('/login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-nav" href="{{ url('/register') }}">Registre-se</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer text-center">
        <span>Connex, Inc.&copy;{{date('Y')}}</span>
    </footer>

    <script src="/lib/jquery/dist/jquery.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="/js/site.js"></script>
</body>

</html>
