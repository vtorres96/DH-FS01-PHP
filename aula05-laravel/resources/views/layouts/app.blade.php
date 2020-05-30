<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @guest
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link pr-2">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link pr-2">Cátalogo de Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                                </li>
                            @endif
                        </ul>
                    @else
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link pr-2">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('filmes-listar') }}" class="nav-link pr-2">Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('filmes-adicionar') }}" class="nav-link pr-2">Cadastrar Filme</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('generos') }}" class="nav-link pr-2">Gêneros</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('generos-adicionar') }}" class="nav-link pr-2">Cadastrar Gêneros</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('atores') }}" class="nav-link pr-2">Atores</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('atores-adicionar') }}" class="nav-link pr-2">Cadastrar Atores</a>
                            </li> --}}
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu border-0 dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="pl-0 dropdown-item b-none text-white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="container py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>