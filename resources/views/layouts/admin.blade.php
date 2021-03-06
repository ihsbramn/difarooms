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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        body main {
            font-family: 'Montserrat', sans-serif
        }
    </style>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script>
        // Get the container element
        var btnContainer = document.getElementById("side-btn");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("side-item");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");

                // If there's no active class
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }

                // Add the active class to the current/clicked button
                this.className += " active";
            });
        }
    </script>
    @yield('head')
</head>

<body style="background: #EDEDED">
    @yield('up_body')
    <div id="app">
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 bg-white shadow" style="border-radius: 0px 14px 14px 0px;">
                        <div class="d-flex flex-column min-vh-100">
                            <div class="row mx-auto mt-5">
                                <img src="{{ URL::asset('/img/dr-logo.png') }}" alt="">
                            </div>
                            <div class="row mt-5" id="side-btn">
                                <a type="button" class="btn btn-light side-item mx-auto mb-4" href="{{ route('hotel/admin') }}"
                                    style="font-weight: 400; font-size: 18px; border-radius:12px;"><span
                                        class="bi bi-building me-2"></span>Kelola
                                    Hotel</a>
                                <a type="button" class="btn btn-light side-item mx-auto" href="{{ route('forum/admin') }}"
                                    style="font-weight: 400; font-size: 18px; border-radius:12px;"><span
                                        class="bi bi-chat-right-text-fill me-2"></span>Kelola
                                    Forum</a>
                            </div>
                            <div class="row" style="margin-top: 440px">
                                <button type="button" class="btn btn-danger mx-auto" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                    style="font-weight: 400; font-size: 18px; max-width: 235px; border-radius:12px;"><span
                                        class="bi bi-box-arrow-right me-2"></span>Log
                                    Out</button>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @yield('lower_body')
    <!-- Footer -->
    <footer>

    </footer>
</body>

</html>
