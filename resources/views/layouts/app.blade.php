<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

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
    <script src="{{ asset('js/maps.css') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    @yield('head')
</head>

<body class="min-vh-100" style="background-color: #FFFFFF;">
    @yield('up_body')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #47A2D6; font-size: 20px">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                                href="{{ url('/') }}" style="font-weight: 500; font-size: 20px;">{{ __('Beranda') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/destinasi', '/destinasi/*') ? 'active' : '' }}"
                                href="{{ url('/destinasi') }}" style="font-weight: 500; font-size: 20px;">{{ __('Destinasi') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/hotel', '/hotel/*') ? 'active' : '' }}"
                                href="{{ '/hotel' }}" style="font-weight: 500; font-size: 20px;">{{ __('Hotel') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item px-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/forum', '/forum/*') ? 'active' : '' }}"
                                href="{{ '/forum' }}" style="font-weight: 500; font-size: 20px;">{{ __('Forum') }}</a>
                            <div class="underline"></div>
                        </li>

                        <li class="nav-item ps-5">
                            <a class="nav-link {{ Route::currentRouteNamed('/aboutus') ? 'active' : '' }}"
                                href="{{ '/aboutus' }}" style="font-weight: 500; font-size: 20px;">{{ __('Tentang Kami') }}</a>
                            <div class="underline"></div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary rounded-pill px-4 me-2 bg-transparent" type="button"
                                        href="{{ route('login') }}" style="font-size: 20px; font-weight: 500; border-color: white;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary rounded-pill px-3 ms-2" type="button" href=""
                                        data-bs-toggle="modal" data-bs-target="#register"
                                        style="color: #47A2D6; font-size: 20px; font-weight: 500; background: white; border-color: white; color: #47A2D6;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 500; font-size: 20px; color: white;"
                                    v-pre>
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

        <main class="min-vh-100" style="display:flex; flex-direction:column;">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
            <!-- Footer -->
            <footer class="container-fluid mt-auto" style="background: #47A2D6; margin-top:auto; ">
                <div class="row text-center d-flex my-5">
                    <div class="col-sm-3">
                        <a href="{{ url('/') }}">
                            <img src="{{ URL::asset('/img/difarooms-logo.png') }}" alt="Difarooms Logo">
                        </a>
                    </div>
                    <div class="col-sm-6 my-auto">
                        <div class="hstack gap-3 d-flex text-white">
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 18px;">Tujuan
                            </div>
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 18px;">Pusat
                                Bantuan</div>
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 18px;">Kontak
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </footer>
            <!-- Modal for Register-->
            <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg rounded" style="border-radius: 12px">
                    <div class="modal-content border-0 mx-auto" style="border-radius: 12px; max-width: 548px;">
                        <div class="modal-header" style="border-bottom: 0 none;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body mx-3 mb-3">
                            <h5 class="modal-title" style="font-weight: 700; font-size: 24px;">Daftar Akun</h5>
                            <p style="font-weight: 400; font-size: 20px;">Buat akunmu untuk dapat berjejaring</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Nama" style="font-weight: 500">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email" style="font-weight: 500">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="Kata sandi" style="font-weight: 500">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Konfirmasi kata sandi" style="font-weight: 500">
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary"
                                        style="background: rgba(36, 77, 100, 1); border-radius: 12px;">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @yield('lower_body')

    {{-- script for lightbox --}}
    <script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
</body>

</html>
