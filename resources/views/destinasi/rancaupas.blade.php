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
                    <img src="{{ URL::asset('/img/bg-rancaupas.jpg') }}" class="card-img" alt="background">
                </div>
            </div>
            <div class="col-12" style="background-color: #3B87B2">
                <h1 class="mt-5" style="font-weight: 700; font-size: 36px; color:#FFFFFF; padding-inline: 7rem">Ranca Upas</h1>
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
                            style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Ranca Upas
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
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-1.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-2.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-3.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-4.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-1.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-2.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-3.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-4.png') }}'>
            <img id='img-scroll' src='{{ URL::asset('/img/asaf-2.png') }}'>
        </div>
        <div class="row mt-5">
            <div class="col-7">
                <p style="font-weight: 400; font-size: 16px; text-align:justify;">
                    Jalan Asia Afrika ini sangatlah bersejarah mulai dari banyak-nya bangunan yang di bangun dari Jaman
                    penjajahan Belanda, maka banyak masyarakat yang berdatangan ke Jalan Asia Afrika ini hanya untuk berburu
                    Foto, bahkan tidak warga Bandung saja, sampai luar pulau bahkan banyak Turis dari luar negeri datang ke
                    Kota Bandung untuk Foto dan ingin tau sejarah yang ada.
                    <br>
                    <br>
                    Banyak bangunan bersejarah yang ada di Asia Afrika bangunan tersebut yaitu adalah Gedung Merdeka. Bukan
                    hanya gedung Merdeka saja di sekitaran sebelum Gedung Merdeka pun ada gedung yang cukup ikonik yaitu
                    Gedung De Vries.
                    <br>
                    <br>
                    <span style="font-weight: 700; font-size: 16px;">Sejarah</span>
                    <br>
                    <br>
                    Gedung Merdeka di Jalan Asia-Afrika ini merupakan gedung bersejarah yang menjadi saksi sejarah pertemuan
                    Konferensi Tingkat Tinggi Asia-Afrika pada Tanggal 18-24 April Tahun 1955. Sebanyak 29 negara pada saat
                    KTT mengirimkan perwakilan-nya dari masing – masing Negara. Tidak hanya itu, sekarang Gedung Merdeka ini
                    juga di gunakan menjadi Museum yang menjadi tempat benda dan koleksi foto pada saat Konferensi Asia
                    Afrika.
                </p>
            </div>
            <div class="col-5 position-relative">
                {{-- map --}}
                <div class="shadow position-absolute top-50 end-0 translate-middle-y" id="map"
                    style="height: 300px; width: 570px; border-radius:12px;">INI MAP
                </div>

                <script src="{{ asset('js/maps.js') }}"></script>
                <script src="{{ asset('js/markercluster.js') }}"></script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                </script>
                <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                </script>
                {{-- map --}}
            </div>
        </div>

        <div class="row mt-5">
            <h2>Rekomendasi lainnya</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-5 mb-5">
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/asia-afrika' }}">
                    <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="asia afrika">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/rancaupas' }}">
                    <img src="{{ URL::asset('/img/bd-rcupas.png') }}" class="dest-card" alt="ranca upas">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Ranca Upas</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/floatingmarket' }}">
                    <img src="{{ URL::asset('/img/bd-flmarket.png') }}" class="dest-card" alt="floating market">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Floating Market</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/gedungsate' }}">
                    <img src="{{ URL::asset('/img/bd-gdsate.png') }}" class="dest-card" alt="gedung sate">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Gedung Sate</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/tangkubanprahu' }}">
                    <img src="{{ URL::asset('/img/bd-tkperahu.png') }}" class="dest-card" alt="tangkuban perahu">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Tangkuban Perahu</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/farmhouse' }}">
                    <img src="{{ URL::asset('/img/bd-fhlembang.png') }}" class="dest-card" alt="farmhouse lembang">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Farmhouse Lembang</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/cartil' }}">
                    <img src="{{ URL::asset('/img/cartil.jpg') }}" class="dest-card" alt="tangkuban perahu">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Caringin Tilu</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="{{ '/destinasi/bandung/braga' }}">
                    <img src="{{ URL::asset('/img/braga.jpg') }}" class="dest-card" alt="farmhouse lembang">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Braga</h5>
                    </div>
                </a>
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
