@extends('layouts.app')

@section('lower_body')
    <script src="{{ asset('js/maps.js') }}"></script>
    <script src="{{ asset('js/markercluster.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-beranda.png') }}" class="card-img" alt="background" height="567px">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:700">Kekuranganmu bukan<br>batasanmu
                            </h1>
                            <p style="font-size: 20px; font-weight:600">Wisata inklusif bagi siapapun dengan kondisi apapun
                                karena<br>kebahagiaan adalah pilihanmu.</p>
                        </div>
                    </div>
                </div>

                {{-- destinasi kota (card) --}}
                <div class="container-xxl">
                    <div class="row mt-5 mb-5">
                        <div class="col-sm-12 text-center mt-3" style="color:#00A3FF">
                            <h2 class="mt-3" style="font-weight: 700; font-size: 32px; color: #00A3FF;">Mau kemana hari
                                ini?</h2>
                            <p class="mt-3" style="font-weight: 400; font-size: 24px;">Jangan khawatir dengan
                                kekuranganmu, banyak tempat
                                untukmu</p>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="row row-cols-1 row-cols-md-3 g-5">
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 zoom"
                                        href="{{ '/destinasi/bandung' }}">
                                        <img src="{{ URL::asset('/img/bandung-icon.png') }}" class="card-img-top"
                                            alt="icon kota bandung" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bandung</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded zoom"
                                        href="{{ '/destinasi/yogya' }}">
                                        <img src="{{ URL::asset('/img/yogya-icon.png') }}" class="card-img-top"
                                            alt="icon kota yogyakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Yogyakarta</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded zoom"
                                        href="{{ '/destinasi/malang' }}">
                                        <img src="{{ URL::asset('/img/malang-icon.png') }}" class="card-img-top"
                                            alt="icon kota malang" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Malang</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded zoom"
                                        href="{{ '/destinasi/jakarta' }}">
                                        <img src="{{ URL::asset('/img/jakarta-icon.png') }}" class="card-img-top"
                                            alt="icon kota jakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Jakarta</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded zoom"
                                        href="{{ '/destinasi/bali' }}">
                                        <img src="{{ URL::asset('/img/bali-icon.png') }}" class="card-img-top"
                                            alt="icon kota bali" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bali</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded zoom"
                                        href="{{ '/destinasi/lombok' }}">
                                        <img src="{{ URL::asset('/img/lombok-icon.png') }}" class="card-img-top"
                                            alt="icon kota lombok" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h3 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Lombok</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- destinasi kota (card) --}}

                {{-- tentang kami --}}
                <div class="container" style="margin-bottom: 370px">
                    <div class="row mt-5 mb-5">
                        <div class="col" style="z-index: 0;">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Tentang kami</h2>
                            <p class="mt-4" style="font-weight: 500; font-size: 24px; color: #00A3FF;">DifaRooms
                                menyajikan pilihan wisata yang menarik bagi penyandang disabilitas di Indonesia</p>
                            <p class="mt-4" style="font-weight: 400; font-size: 16px;">Difa Rooms dibangun
                                dari keresahan dari penyandang disabilitas dimana banyak tempat-tempat yang susah diakses.
                                Hal tersebut merupakan salah satu bentuk dari diskriminasi. Bagi kami, aksesibilitas
                                merupakan kunci untuk mencapai kebahagiaan tanpa batas. Kami percaya bahwa wisata adalah hak
                                bagi siapapun tanpa terkecuali. Menciptakan wisata yang inklusif adalah tujuan utama Difa
                                Rooms.</p>
                            <a type="button" class="btn btn-primary px-5 py-1 mt-4" href="{{ '/aboutus' }}"
                                style="border-radius: 16px; font-weight: 600; font-size: 20px;background: rgba(0, 73, 115, 1); border-color: rgba(0, 73, 115, 1);">Baca
                                Lagi</a>
                        </div>
                        <div class="col-6 position-relative" style="z-index: 1;">
                            <div class="position-absolute top-0 end-0">
                                <img src="{{ URL::asset('/img/home-dot.png') }}" alt="assets dot" style="z-index: 0">
                            </div>
                            <div class="" style="top: 310px; left: -60px; position: absolute;">
                                <img src="{{ URL::asset('/img/home-tk2.png') }}" alt="assets pict 1" style="z-index: 1">
                            </div>
                            <div class="" style="top: 40px; left: 130px; position: absolute;">
                                <img src="{{ URL::asset('/img/home-tk1.png') }}" alt="assets pict 2" style="z-index: 2">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- tentang kami --}}

                {{-- wisata aksesibel --}}
                <div class="container-fluid mt-5 pb-5 px-5" style="background-color: #DDF3FF;">
                    <div class="row">
                        <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #2F6C8F;">Wisata Aksesibel</h2>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start my-auto">
                            <p class="m-0" style="font-weight: 500; font-size: 20px; color: #2F6C8F;">Liburan terasa mudah dan inklusif bagi siapapun</p>
                        </div>
                        <div class="col-6 text-end mt-3">
                            <button id="slideLeft" type="button" class="btn btn-lg rounded-circle shadow-sm"
                                style="border-color: rgba(71, 162, 214, 1); color: rgba(71, 162, 214, 1);" title="slide-left" aria-label="slide-left"><i
                                    class="bi bi-chevron-left"></i></button>
                            <button id="slideRight" type="button" class="btn btn-lg rounded-circle shadow-sm"
                                style="background: rgba(71, 162, 214, 1); border-color: rgba(71, 162, 214, 1); color: white;" title="slide-right" aria-label="slide-right"><i
                                    class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="d-flex overflow-auto mt-3" id="wisataslider">
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/bandung/asia-afrika' }}">
                                <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                    alt="asia afrika" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Asia Afirka</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Bandung</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/bandung/kiara-arta-park' }}">
                                <img src="{{ URL::asset('/img/dest-pop2.png') }}" class="card-img"
                                    alt="kiara artha park" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Kiara Artha Park</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Bandung</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/bedugul' }}">
                                <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                    alt="bedugul" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Bedugul</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Bali</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/borobudur' }}">
                                <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img"
                                    alt="borobudur" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Borobudur</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Magelang</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/bandung/museumgeo' }}">
                                <img src="{{ URL::asset('/img/dest-pop5.jpg') }}" class="card-img"
                                    alt="museum geologi" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Museum Geologi</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Bandung</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/pulaukomodo' }}">
                                <img src="{{ URL::asset('/img/dest-popkm.png') }}" class="card-img"
                                    alt="pulau komodo" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Pulau Komodo</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Nusa Tenggara Timur</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/bunaken' }}">
                                <img src="{{ URL::asset('/img/dest-popbn.png') }}" class="card-img"
                                    alt="bunaken" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Bunaken</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Sulawesi Utara</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col me-4">
                            <a class="card text-white"
                                style="border-radius: 12px; max-width: 20rem; min-width:259px; overlay: hidden;"
                                href="{{ '/destinasi/gilitrawangan' }}">
                                <img src="{{ URL::asset('/img/dest-popgt.jpg') }}" class="card-img"
                                    alt="gilitrawangan" style="border-radius: 12px">
                                <div class="card-img-overlay grad" style="border-radius: 12px">
                                    <div class="row position-absolute bottom-0 start-20 mb-2">
                                        <h3 class="card-title"
                                            style="font-weight: 700; font-size: 24px;">Gili Trawangan</h3>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 20px;">Lombok</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <script>
                        const buttonRight = document.getElementById('slideRight');
                        const buttonLeft = document.getElementById('slideLeft');

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

                {{-- map --}}
                <div class="container">
                    <div class="row mt-5" style="margin-bottom: 90px">
                        <div class="col-8">

                            {{-- map --}}
                            <div id="map2"
                                style="height: 568px; border-radius:12px; filter: drop-shadow(0px 0px 4px #00A3FF);">INI
                                MAP
                            </div>
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}"></script>
                            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                            </script>

                        </div>
                        <div class="col-4">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Temukan destinasi aksesibel
                                disekitarmu</h2>
                            <p class="mt-4"
                                style="font-weight: 500; font-size: 24px; color: #00A3FF;">Tempat
                                menarik untuk Anda kunjungi akan terlihat disini</p>
                            <div class="d-grid">
                                {{-- <a href="" class="btn py-2" type="button"
                                    style="background: #004973; border-radius: 20px; font-size: 20px; color: white;">Lihat
                                    Peta</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- map --}}

                {{-- diskusi --}}
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-diskusi.png') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h2 style="font-weight: 700; font-size: 36px; color:white;">Temukan ragam disabilitas<br>
                                diantara pengguna lainnya</h2>
                            <a class="btn btn-primary px-5 btn-lg bg-white border-white mt-4 shadow"
                                href="{{ '/forum' }}" type="button"
                                style="border-radius: 12px; color: rgba(71, 162, 214, 1);">Mari diskusi</a>
                        </div>
                    </div>
                </div>
                {{-- diskusi --}}

            </div>
        </div>
    </div>
@endsection
