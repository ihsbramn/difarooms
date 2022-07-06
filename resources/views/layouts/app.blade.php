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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script>
        (function($) {
            "use strict";
            $('.next').click(function() {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
                return false;
            });
        })
        (jQuery);
    </script>
    <script>
        $('.nav-link').on('click', function() {
            $('.active-link').removeClass('active-link');
            $(this).addClass('active-link');
        });
    </script>
    @yield('head')
</head>

<body style="background-color: #FFFFFF;">
    @yield('up_body')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #47A2D6; font-size: 20px">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Difa Rooms') }} --}}
                    <img src="{{ URL::asset('/img/difarooms-logo.png') }}" alt="">
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
                            <a class="nav-link {{ Route::currentRouteNamed('/destinasi') ? 'active' : '' }}"
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
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Tentang Kami') }}</a>
                            <div class="underline"></div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light rounded-pill px-4 me-2" type="button"
                                        href="{{ route('login') }}" style="font-size: 17px">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light rounded-pill px-3 ms-2" type="button"
                                        href="{{ route('register') }}"
                                        style="color: #47A2D6; font-size: 17px">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ '/user/myfavourites' }}">
                                        {{ __('My Favourites Hotel') }}
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

        <main>
            @yield('content')
        </main>
    </div>
    @yield('lower_body')
    <!-- Footer -->
    <footer>
        <div class="container-fluid" style="background-color: #244D64">
            <div class="row">
                <div class="col-4 m-5">
                    <img src="{{ URL::asset('/img/difarooms-logo.png') }}" alt="">
                    <p class="mt-2" style="font-weight: 300; font-size: 14px; color: #FFFFFF">Platform berbagi
                        informasi <br>
                        mengenai aksesibilitas bagi <br>
                        penyandang disabilitas</p>
                </div>
                <div class="col-4 d-flex mx-auto">
                    <div class="row my-auto" style="font-size: 16px; font-weight:300; color: #FFFFFF">
                        <p>Tujuan</p>
                        <p>Pusat Bantuan</p>
                        <p>Kontak</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
