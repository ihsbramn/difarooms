@extends('layouts.app')

@section('head')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(71, 162, 214, 1);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- header --}}
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-bandung.png') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Bandung <br> dengan Bandros
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-10 mt-5">
            {{-- breadcrumb navigation --}}
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}"
                                style="text-decoration: none;font-weight: 500; font-size: 14px; color: #47A2D6;">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi' }}"
                                style="text-decoration: none; font-weight: 500; font-size: 14px; color: #47A2D6;">Destinasi</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Bandung</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Bandung</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px;">Berkunjung ke Kota Kembang akan kurang
                    lengkap apabila Anda tidak singgah di tempat wisata Bandung yang
                    sedang hits akhir-akhir ini. Bandung sendiri memiliki berbagai atraksi alam yang menarik, destinasi
                    wisata kota-kota yang sarat akan pengetahuan, dan beragam wisata kuliner. <br> <br>
                    Selain menarik minat wisatawan dari luar kota atau bahkan mancanegara, Anda yang warga Bandung mungkin
                    belum tahu ada beberapa destinasi baru yang bisa Anda kunjungi bersama keluarga akhir pekan ini.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl1.png') }}" class="card-img-top" alt="foto kota bandung">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl2.png') }}" class="card-img-top" alt="foto kota bandung 2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl3.png') }}" class="card-img-top" alt="foto kota bandung 3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p style="font-weight: 400; font-size: 24px;"><br> Kota Bandung sebagai salah satu kota
                    besar yang ada di Indonesia sudah mulai menerapkan teknologi untuk
                    meningkatkan kualitas layanan publik dan juga berupaya untuk mewujudkan konsep smart city. Destinasi
                    wisata yang aksesibel juga menjadi salah satu tujuan utama oleh pemerintah kota Bandung. Oleh karena
                    itu, Difa Rooms menyajikan beberapa destinasi wisata yang dapat diakses oleh penyandang disabilitas
                    dengan kondisi apapun. Dengan begitu, Anda tidak perlu khawatir terkait mobilitas Anda pada tempat
                    wisata yang Anda kunjungi</p>
            </div>
            <div class="col-12 mt-5">
                {{-- card destinasi --}}
                <h2 class="mb-3">Wajib dikunjungi</h2>
                <div class="row row-cols-1 row-cols-md-4 g-5">
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/asia-afrika' }}">
                            <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="asia afrika">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/kiara-arta-park' }}">
                            <img src="{{ URL::asset('/img/bd-kap.png') }}" class="dest-card" alt="kiara artha park">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Kiara Artha Park</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/bandung-zoo' }}">
                            <img src="{{ URL::asset('/img/bd-bz.png') }}" class="dest-card" alt="Bandung Zoo">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bandung Zoo</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/museum-geologi' }}">
                            <img src="{{ URL::asset('/img/bd-mg.png') }}" class="dest-card" alt="Museum Geologi">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Museum Geologi</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/taman-lalu-lintas' }}">
                            <img src="{{ URL::asset('/img/bd-tll.png') }}" class="dest-card" alt="Taman Lalu Lintas">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Taman Lalu Lintas</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/trans-studio-mall' }}">
                            <img src="{{ URL::asset('/img/bd-tsm.png') }}" class="dest-card" alt="Trans Studio Mall">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Trans Studio Mall</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/museum-sri-baduga' }}">
                            <img src="{{ URL::asset('/img/bd-msb.png') }}" class="dest-card" alt="Museum Sri Baduga"
                                style="width: 100%; height: 100%; overflow:hidden;">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Museum Sri Baduga</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung/braga-city-walk' }}">
                            <img src="{{ URL::asset('/img/bd-bcw.jpg') }}" class="dest-card" alt="Braga City Walk"
                                style="width: 100%; height: 100%; overflow:hidden;">
                            <div class="card-img-overlay grad dest-card">
                                <h3 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Braga City Walk</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Butuh Tempat Menginap --}}
    <div class="container-fluid mt-5 pb-5 px-5" style="background-color: #DDF3FF;">
        <div class="row">
            <div class="col-6 text-start">
                <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #3B87B2;">Butuh tempat
                    menginap?</h2>
            </div>
            <div class="col-6 text-end mt-3">
                <button id="slideLeft" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="border-color: rgba(71, 162, 214, 1); color: rgba(71, 162, 214, 1);" title="button slide left"><i
                        class="bi bi-chevron-left"></i></button>
                <button id="slideRight" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="background: rgba(71, 162, 214, 1); border-color: rgba(71, 162, 214, 1); color: white;" title="button slide right"><i
                        class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="d-flex overflow-auto mt-3" id="hotelslider">
            @foreach ($hotel as $index => $htl)
                <div class="card border-0 pb-3 shadow-sm"
                    style="border-radius: 20px; min-width: 370px; margin-right: 35px;">
                    <img src="/storage/uploads/{{ $htl->ht_thumbnail }}" class="card-img-top p-3"
                        alt="foto thumbnail hotel" style="height: 300px; overflow:hidden;border-radius: 20px;">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text" style="font-weight: 600; font-size: 18px;">
                                    {{ $htl->ht_name }}</p>
                            </div>
                            <div class="col-6 text-end">
                                @if ($htl->ht_accesible == 'Ya')
                                    <p style="font-weight: 600; font-size: 18px; color: #004973;">
                                        <span class="iconify" data-icon="map:wheelchair"></span>Aksesibel
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #47A2D6;">
                                    @money($idr_rates[$index]['rate'])</p>
                            </div>
                            <div class="col-6 text-end">
                                @if ($idr_rates[$index]['name'] == 'Booking.com')
                                    <img src="{{ URL::asset('/img/bookingcom-logo.png') }}" alt="logo booking.com">
                                @elseif ($idr_rates[$index]['name'] == 'Agoda.com')
                                    <img src="{{ URL::asset('/img/agoda-logo.png') }}" alt="logo agoda.com"
                                        style="max-height: 22px; overflow:hidden">
                                @elseif ($idr_rates[$index]['name'] == 'FindHotel')
                                    <img src="{{ URL::asset('/img/findhotel-logo.svg') }}" alt="logo findhtotel.com"
                                        style="max-height: 22px; overflow:hidden">
                                @elseif ($idr_rates[$index]['name'] == 'Expedia')
                                    <img src="{{ URL::asset('/img/expedia-logo.png') }}" alt="logo expedia.com"
                                        style="max-height: 22px; overflow:hidden">
                                @elseif ($idr_rates[$index]['name'] == 'Hotels.com')
                                    <img src="{{ URL::asset('/img/hotelcom-logo.png') }}" alt="logo hotel.com"
                                        style="max-height: 22px; overflow:hidden">
                                @elseif ($idr_rates[$index]['name'] == 'Trip.com')
                                    <img src="{{ URL::asset('/img/tripcom-logo.png') }}" alt="logo trip.com"
                                        style="max-height: 22px; overflow:hidden">
                                @else
                                    <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                        {{ $idr_rates[$index]['name'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="row px-5">
                            <a href="{{ route('/hotel/show', $htl->id) }}" class="btn btn-primary border-0 px-3 py-2"
                                type="button"
                                style="border-radius: 12px; background-color: #244D64; font-weight: 600; font-size: 20px;">Lihat
                                detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script>
            const buttonRight = document.getElementById('slideRight');
            const buttonLeft = document.getElementById('slideLeft');

            buttonRight.onclick = function() {
                var container = document.getElementById('hotelslider');
                scrollAmount = 0;
                var slideTimer = setInterval(function() {
                    container.scrollLeft += 100;
                    scrollAmount += 100;
                    if (scrollAmount >= 200) {
                        window.clearInterval(slideTimer);
                    }
                }, 50);
            };
            buttonLeft.onclick = function() {
                var container = document.getElementById('hotelslider');
                scrollAmount = 0;
                var slideTimer = setInterval(function() {
                    container.scrollLeft -= 100;
                    scrollAmount += 100;
                    if (scrollAmount >= 200) {
                        window.clearInterval(slideTimer);
                    }
                }, 50);
            };
        </script>
    </div>
    {{-- Butuh Tempat Menginap --}}

    {{-- wisata aksesibel --}}
    <div class="container-fluid mt-5 pb-5 px-5">
        <div class="row">
            <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #2F6C8F;">Wisata Aksesibel</h2>
        </div>
        <div class="row">
            <div class="col-6 text-start my-auto">
                <p class="m-0" style="font-weight: 500; font-size: 20px; color: #2F6C8F;">Liburan terasa mudah dan
                    inklusif bagi siapapun</p>
            </div>
            <div class="col-6 text-end mt-3">
                <button id="slideLeftw" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="border-color: rgba(71, 162, 214, 1); color: rgba(71, 162, 214, 1);" title="button slide left"><i
                        class="bi bi-chevron-left"></i></button>
                <button id="slideRightw" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="background: rgba(71, 162, 214, 1); border-color: rgba(71, 162, 214, 1); color: white;" title="button slide right"><i
                        class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="d-flex overflow-auto mt-3" id="wisataslider">
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/bandung/asia-afrika' }}">
                    <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img" alt="photo-wisata"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Asia Afirka</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Bandung</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/bandung/kiara-arta-park' }}">
                    <img src="{{ URL::asset('/img/dest-pop2.png') }}" class="card-img" alt="photo-wisata 2"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Ranca Upas</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Bandung</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/bedugul' }}">
                    <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img" alt="photo-wisata 3"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Bedugul</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Bali</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/borobudur' }}">
                    <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img" alt="photo-wisata 4"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Borobudur</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Magelang</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/bandung/floatingmarket' }}">
                    <img src="{{ URL::asset('/img/dest-pop5.jpg') }}" class="card-img" alt="photo-wisata 5"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Floating Market</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Lembang</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/pulaukomodo' }}">
                    <img src="{{ URL::asset('/img/dest-popkm.png') }}" class="card-img" alt="photo-wisata 6"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Pulau Komodo</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Nusa Tenggara Timur</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/bunaken' }}">
                    <img src="{{ URL::asset('/img/dest-popbn.png') }}" class="card-img" alt="photo-wisata 7"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Bunaken</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Sulawesi Utara</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col me-4">
                <a class="card text-white"
                    style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                    href="{{ '/destinasi/gilitrawangan' }}">
                    <img src="{{ URL::asset('/img/dest-popgt.jpg') }}" class="card-img" alt="photo-wisata 8"
                        style="border-radius: 12px">
                    <div class="card-img-overlay grad" style="border-radius: 12px">
                        <div class="row position-absolute bottom-0 start-20 mb-2">
                            <h3 class="card-title" style="font-weight: 700; font-size: 24px;">Gili Trawangan</h3>
                            <p class="card-text" style="font-weight: 400; font-size: 20px;">Lombok</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <script>
            const buttonRight = document.getElementById('slideRightw');
            const buttonLeft = document.getElementById('slideLeftw');

            buttonRight.onclick = function() {
                var container = document.getElementById('wisataslider');
                scrollAmount = 0;
                var slideTimer = setInterval(function() {
                    container.scrollLeft += 100;
                    scrollAmount += 100;
                    if (scrollAmount >= 200) {
                        window.clearInterval(slideTimer);
                    }
                }, 50);
            };
            buttonLeft.onclick = function() {
                var container = document.getElementById('wisataslider');
                scrollAmount = 0;
                var slideTimer = setInterval(function() {
                    container.scrollLeft -= 100;
                    scrollAmount += 100;
                    if (scrollAmount >= 200) {
                        window.clearInterval(slideTimer);
                    }
                }, 50);
            };
        </script>
    </div>
    {{-- wisata aksesibel --}}

    {{-- banner --}}
    <div class="container-fluid">
        <div class="row">
            <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 379px; overflow:hidden">
                <img src="{{ URL::asset('/img/ft-bdg.png') }}" class="card-img" alt="background">
                <div class="card-img-overlay d-flex">
                    <div class="container my-auto">
                        <h2 style="font-weight: 700; font-size: 36px; color: white;">Penginapan nyaman dan <br> aksesibel ada disini
                        </h2>
                        <a class="btn btn-primary px-5 btn-lg bg-white border-white mt-4 shadow"
                                href="{{ '/hotel' }}" type="button"
                                style="border-radius: 12px; color: rgba(71, 162, 214, 1);">Cek hotel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- banner --}}
@endsection
