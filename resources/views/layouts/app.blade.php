<!doctype html class="h-100">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-100">
    <div id="app" class="h-100">
        <b-navbar toggleable="lg" type="dark" variant="primary">
            <b-container>
                <b-navbar-brand href="#">Messenger</b-navbar-brand>
            
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            
                <b-collapse id="nav-collapse" is-nav>                
                    <b-navbar-nav class="ml-auto">
                        <div class="container">    
                            @guest
                                <b-nav-item href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>
                                @if (Route::has('register'))
                                    <b-nav-item href="{{ route('register') }}">{{ __('Register') }}</b-nav-item>
                                @endif
                            @else
                                <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>
                                    <b-dropdown-item href="#" @click="logout()">Cerrar sesion</b-dropdown-item>
                                </b-nav-item-dropdown>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </div> 
                    </b-navbar-nav>
                </b-collapse>
            </b-container>
        </b-navbar>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
