@extends('layouts.app')
@section('head')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            color: #FFFFFF;
        }
    </style>
@endsection
@section('content')
    {{-- head of page --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-bedugul.jpg') }}" class="card-img" alt="background">
                </div>
            </div>
            <div class="col-12" style="background-color: #3B87B2">
                <h1 class="mt-5" style="font-weight: 700; font-size: 36px; color:#FFFFFF; padding-inline: 7rem">Bedugul
                </h1>
                <nav class="mb-5" style="--bs-breadcrumb-divider: '>'; color: #FFFFFF; padding-inline: 7rem"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}"
                                style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi' }}"
                                style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Destinasi</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi/bandung' }}"
                                style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Bandung</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"
                            style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Bedugul
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- main of page --}}
    <div class="container-fluid mt-5" style="padding-inline: 7rem">
        <div class="row mt-4">
            <h2 style="font-weight: 600; font-size: 24px; color: #3B87B2;">Galeri Foto</h2>
        </div>
        <div id='scrolly'>
            <a href="{{ URL::asset('/img/bgl-1.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-1.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/bgl-2.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-2.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/bgl-3.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-3.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/bgl-4.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-4.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/bgl-5.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-5.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/bgl-6.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/bgl-6.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-7">
                <p style="font-weight: 400; font-size: 16px; text-align:justify;">
                    Bedugul adalah sebuah kawasan wisata dengan danau dan gunung di Bali, Indonesia, terletak di bagian
                    tengah pulau di dekat Danau Bratan antara Denpasar dan Singaraja. Daerah ini mencakup desa Bedugul
                    sendiri, Candikuning, Pancasari, Pacung dan Wanagiri.
                    <br>
                    <br>
                    Bedugul terletak di Kabupaten Tabanan, 48 kilometer (30 mi) di sebelah utara kota Denpasar atau 20
                    kilometer (12 mi) sebelah selatan Singaraja. Di daerah ini terdapat tiga danau kawah yaitu Danau Bratan,
                    Danau Buyan, dan Danau Tamblingan.
                    <br>
                    <br>
                    Tempat wisata utama di Bedugul adalah Pura Ulun Danu Bratan dan Kebun Raya Bali. Kebun Raya Bali dibuka
                    pada tahun 1959. Kebun raya ini memiliki luas 1.575 hektare (3.890 ekar), menjadi salah satu kebun raya
                    terbesar di Indonesia.
                </p>
            </div>
            <div class="col-5 position-relative">
                {{-- map --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.208857755975!2d115.16076942848154!3d-8.282001066487478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd189733eb730a3%3A0xf9e3caa4b52d5d14!2sBedugul!5e0!3m2!1sen!2sid!4v1659206666450!5m2!1sen!2sid"
                    width="570" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="shadow position-absolute top-50 end-0 translate-middle-y" style="border-radius: 12px;" title="map asia afrika"></iframe>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                </script>
                <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                </script>
                {{-- map --}}
            </div>
        </div>
    </div>

    {{-- img footer --}}
    <div class="comtainer-fluid">
        <div class="card bg-dark text-white border-0 rounded-0" style="max-height: 379px; overflow: hidden;">
            <img src="{{ URL::asset('/img/foot-dest.png') }}" class="card-img" alt="footer image">
            <div class="card-img-overlay">
                <h5 class="card-title position-absolute top-50 start-20 translate-middle-y"
                    style="font-weight: 700;font-size: 36px;">Temukan pilihan <br>destinasi wisata lainnya</h5>
            </div>
        </div>
    </div>
@endsection
