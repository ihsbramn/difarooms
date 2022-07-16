@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-beranda.png') }}" class="card-img" alt="background" height="567px">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:700">Jelajahi Hidupmu, <br> Pergi Kemanapun Anda Mau
                            </h1>
                            <p style="font-size: 20px; font-weight:600">Kami menyediakan berbagai informasi hotel dengan
                                segala aksesibilitasnya <br> yang akan memudahkan Anda</p>
                            <form class="row g-2">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="search" placeholder="Mau kemana?"
                                        style="background-color: #D6D6D6">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary mb-3"
                                        style="background-color: #244D64; border-color:#244D64">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
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
                                    <a class="card bg-transparent text-white border-0" href="{{ '/destinasi/bandung' }}">
                                        <img src="{{ URL::asset('/img/bandung-icon.png') }}" class="card-img-top"
                                            alt="icon kota bandung" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bandung</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded" href="{{ '/destinasi/yogya' }}">
                                        <img src="{{ URL::asset('/img/yogya-icon.png') }}" class="card-img-top"
                                            alt="icon kota yogyakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Yogyakarta</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded" href="{{ '/destinasi/malang' }}">
                                        <img src="{{ URL::asset('/img/malang-icon.png') }}" class="card-img-top"
                                            alt="icon kota malang" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Malang</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded" href="{{ '/destinasi/jakarta' }}">
                                        <img src="{{ URL::asset('/img/jakarta-icon.png') }}" class="card-img-top"
                                            alt="icon kota jakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Jakarta</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded" href="{{ '/destinasi/bali' }}">
                                        <img src="{{ URL::asset('/img/bali-icon.png') }}" class="card-img-top"
                                            alt="icon kota bali" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bali</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0 rounded" href="{{ '/destinasi/lombok' }}">
                                        <img src="{{ URL::asset('/img/lombok-icon.png') }}" class="card-img-top"
                                            alt="icon kota lombok" style="border-radius: 12px">
                                        <div class="card-img-overlay grad" style="border-radius: 12px">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Lombok</h5>
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
                                menyajikan pilihan
                                wisata yang menarik di Indonesia</p>
                            <p class="mt-4" style="font-weight: 400; font-size: 16px; color: #00A3FF;">Kami telah
                                memilih
                                destinasi
                                wisata yang menarik untuk Anda kunjungi bersama keluarga, kerabat, dan rekan kerja Anda.
                                Liburan akan terasa lebih mudah dan aksesibel. Wisata inklusif bagi siapapun dan kondisi
                                apapun yang dapat memuaskan Anda.</p>
                            <a type="button" class="btn btn-primary px-5 py-1 mt-4" href="{{ '/aboutus' }}"
                                style="border-radius: 16px; font-weight: 600; font-size: 20px;background: rgba(0, 73, 115, 1); border-color: rgba(0, 73, 115, 1);">Baca
                                Lagi</a>
                        </div>
                        <div class="col-6 position-relative" style="z-index: 1;">
                            <div class="position-absolute top-0 end-0">
                                <img src="{{ URL::asset('/img/home-dot.png') }}" alt="assets dot" style="z-index: 0">
                            </div>
                            <div class="" style="top: 310px; left: -60px; position: absolute;">
                                <img src="{{ URL::asset('/img/home-tk2.png') }}" alt="assets dot" style="z-index: 1">
                            </div>
                            <div class="" style="top: 40px; left: 130px;position: absolute;">
                                <img src="{{ URL::asset('/img/home-tk1.png') }}" alt="assets dot" style="z-index: 2">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- tentang kami --}}

                {{-- destinasi populer --}}
                <div class="container-fluid pb-4" style="background-color: #DDF3FF">
                    <div id="destinasipopuler" class="carousel slide" data-bs-ride="carousel">
                        <div class="row">
                            <div class="col-6 text-start">
                                <h2 class="mt-3" style="font-weight: 700; font-size: 32px; color: #2F6C8F;">Destinasi
                                    Populer</h2>
                                <p class="mt-3" style="font-weight: 500; font-size: 20px; color: #2F6C8F;">Tingkatkan
                                    kebersamaan bersama keluargamu</p>
                            </div>
                            <div class="col-6 text-end mt-3">
                                <button class="btn btn-lg rounded-circle me-2" type="button"
                                    data-bs-target="#destinasipopuler" data-bs-slide="prev"
                                    style="border-color: rgba(71, 162, 214, 1);">
                                    <span class="bi bi-chevron-left" style="color: rgba(71, 162, 214, 1);"></span>
                                </button>
                                <button class="btn btn-lg rounded-circle" type="button"
                                    data-bs-target="#destinasipopuler" data-bs-slide="next"
                                    style="border-color: rgba(71, 162, 214, 1); background: rgba(71, 162, 214, 1);">
                                    <span class="bi bi-chevron-right" style="color: rgba(255, 255, 255, 1);"></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="carousel-inner" style="border-radius: 12px">
                                    <div class="carousel-item active">
                                        <div class="row row-cols-1 row-cols-md-5 g-5">
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"  href="{{ '/destinasi/bandung/asia-afrika' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Asia Afirka</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bandung/rancaupas' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop2.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Ranca Upas</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"href="{{ '/destinasi/bedugul' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Bedugul</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bali</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/borobudur' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Borobudur</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Magelang</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; max-height: 478.83px; overflow: hidden" href="{{ '/destinasi/bandung/floatingmarket' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop5.png') }}" class="card-img"
                                                        alt="...">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Floating Market
                                                            </h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row row-cols-1 row-cols-md-5 g-5">
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"  href="{{ '/destinasi/bandung/asia-afrika' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Asia Afirka</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bandung/rancaupas' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop2.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Ranca Upas</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"href="{{ '/destinasi/bedugul' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Bedugul</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bali</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/borobudur' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Borobudur</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Magelang</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; max-height: 478.83px; overflow: hidden" href="{{ '/destinasi/bandung/floatingmarket' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop5.png') }}" class="card-img"
                                                        alt="...">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Floating Market
                                                            </h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row row-cols-1 row-cols-md-5 g-5">
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"  href="{{ '/destinasi/bandung/asia-afrika' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Asia Afirka</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bandung/rancaupas' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop2.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Ranca Upas</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;"href="{{ '/destinasi/bedugul' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Bedugul</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bali</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/borobudur' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img"
                                                        alt="..." style="border-radius: 12px">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Borobudur</h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Magelang</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="card text-white"
                                                    style="border-radius: 12px; max-width: 20rem; max-height: 478.83px; overflow: hidden" href="{{ '/destinasi/bandung/floatingmarket' }}">
                                                    <img src="{{ URL::asset('/img/dest-pop5.png') }}" class="card-img"
                                                        alt="...">
                                                    <div class="card-img-overlay grad" style="border-radius: 12px">
                                                        <div class="row position-absolute bottom-0 start-20 mb-2">
                                                            <h5 class="card-title"
                                                                style="font-weight: 700; font-size: 24px;">Floating Market
                                                            </h5>
                                                            <p class="card-text"
                                                                style="font-weight: 400; font-size: 20px;">Bandung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- destinasi populer --}}

                {{-- map --}}
                <div class="container">
                    <div class="row mt-5" style="margin-bottom: 90px">
                        <div class="col-8">
                            {{-- map --}}
                            <div id="map"
                                style="height: 568px; border-radius:12px; filter: drop-shadow(0px 0px 4px #00A3FF);">INI
                                MAP
                            </div>

                            <script src="{{ asset('js/maps.js') }}"></script>
                            <script src="{{ asset('js/markercluster.js') }}"></script>
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                            </script>
                            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                            </script>
                            {{-- map --}}

                        </div>
                        <div class="col-4">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Temukan destinasi disekitarmu
                            </h2>
                            <p class="mt-4"
                                style="font-weight: 500; font-size: 24px; color: #00A3FF; text-align: justify;">Tempat
                                menarik untuk Anda
                                kunjungi akan terlihat disini</p>
                            <div class="d-grid">
                                <a href="" class="btn py-2" type="button"
                                    style="background: #004973; border-radius: 20px; font-size: 20px; color: white;">Lihat
                                    Peta</a>
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
                            <h2 style="font-weight: 700; font-size: 36px; color:white;">Kamu tidak sendirian,<br>banyak
                                ruang untukmu</h2>
                            <a class="btn btn-primary px-5 btn-lg bg-white border-white mt-4" href=""
                                type="button" style="border-radius: 12px; color: rgba(71, 162, 214, 1);">Mari diskusi</a>
                        </div>
                    </div>
                </div>
                {{-- diskusi --}}
            </div>
        </div>
    </div>
@endsection
