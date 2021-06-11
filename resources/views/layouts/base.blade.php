<!doctype html>
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

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto justify-content-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Accueil </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../doctors">Chercher un médecin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>
    </header>

    <h1 style=""> @yield('title') </h1>

    <div class='container' style="height: auto; width:100%">
        @yield('contents')
    </div>


</body>

<footer class="navbar-dark bg-dark">
    <hr>
    <div class="container">
        <a href="">
            <img src="" alt="Logo" height="90" style="margin-left: 45%;">
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-center" style="color:white;">
            © Copyright 2021 Promo dev-web. Tous droits réservés.
        </div>
    </div>
    <hr>
    </div>
</footer>

</html>
