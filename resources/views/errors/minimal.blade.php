<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!--Style-->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .button-beranda{
            background: #47A2D6; 
            border-radius: 12px; 
            border-color: #47A2D6; 
            font-weight: 600; 
            font-size: 20px; 
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="container mt-5" style="padding-inline: 300px">
        <div style="text-align: justify">
            @yield('code')
        </div>
        <div class="text-center mt-5">
            @yield('image')
        </div>
        <div class="text-center mt-5">
            <a type="button" href="{{ url('/') }}" class="btn btn-lg button-beranda" style="">Kembali Ke Beranda</a>
        </div>
    </div>
</body>

</html>
