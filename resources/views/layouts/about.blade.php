<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- web icon logo -->
   <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/img/apple-touch-icon.png') }}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/img/favicon-32x32.png') }}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/img/favicon-16x16.png') }}">
   <link rel="manifest" href="{{ URL::asset('/img/site.webmanifest') }}">
   <!-- web icon logo -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,100&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Script -->
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    @yield('head')
</head>

<body style="background-color: rgba(250, 250, 250, 1);">
    @yield('up_body')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #47A2D6; font-size: 20px">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Difa Rooms') }} --}}
                    <img src="{{ URL::asset('/img/difarooms-logo.png') }}" alt="difarooms logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Center Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item pe-5">
                            <a class="nav-link {{ Route::currentRouteNamed('index') ? 'active' : '' }}"
                                href="{{ url('/') }}">{{ __('Beranda') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/destinasi/*') ? 'active' : '' }}"
                                href="{{ url('/destinasi') }}">{{ __('Destinasi') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/hotel') ? 'active' : '' }}"
                                href="{{ '/hotel' }}">{{ __('Hotel') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Forum') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item ps-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/aboutus') ? 'active' : '' }}"
                                href="{{ '/aboutus' }}">{{ __('Tentang Kami') }}</a>
                            <div class="underline"></div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary rounded-pill px-3 me-2 bg-transparent" type="button"
                                        href="{{ route('register') }}"
                                        style="font-size: 20px; font-weight: 500; border-color: white; color: white;">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary rounded-pill px-4 ms-2" type="button"
                                        href="{{ route('login') }}"
                                        style="color: #47A2D6; font-size: 20px; font-weight: 500; background: white; border-color: white; color: #47A2D6;">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-weight: 500; font-size: 20px; color: white;" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end mt-3 border-0 shadow"
                                    aria-labelledby="navbarDropdown" style="border-radius: 12px">
                                    <a class="dropdown-item px-4 py-3"
                                        href="{{ '/user/myfavourites' }}"style="font-weight: 400; font-size: 16px;"><i
                                            class="bi bi-heart-fill me-2"></i>
                                        {{ __('My Favourites Hotel') }}
                                    </a>
                                    <a class="dropdown-item px-4 py-3"
                                        href="{{ '/user/myforum' }}"style="font-weight: 400; font-size: 16px;"><i
                                            class="bi bi-chat-left-text-fill me-2"></i></i>
                                        {{ __('My Forum') }}
                                    </a>
                                    <a class="dropdown-item px-4 py-3" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"
                                        style="color: #BB5353;font-weight: 400; font-size: 16px;"><i
                                            class="bi bi-box-arrow-right me-2"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="min-vh-100">
            @yield('content')
        </main>
    </div>
    @yield('lower_body')

</body>

</html>
