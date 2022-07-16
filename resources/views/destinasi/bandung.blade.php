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
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Berkunjung ke Kota Kembang akan kurang
                    lengkap apabila Anda tidak singgah di tempat wisata Bandung yang
                    sedang hits akhir-akhir ini. Bandung sendiri memiliki berbagai atraksi alam yang menarik, destinasi
                    wisata kota-kota yang sarat akan pengetahuan, dan beragam wisata kuliner. <br>
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
                            <img src="{{ URL::asset('/img/bd-mtrl2.png') }}" class="card-img-top" alt="foto kota bandung">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl3.png') }}" class="card-img-top" alt="foto kota bandung">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                {{-- card destinasi --}}
                <h2 class="mb-3">Wajib dikunjungi</h2>
                <div class="row row-cols-1 row-cols-md-4 g-5">
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/asia-afrika' }}">
                            <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/rancaupas' }}">
                            <img src="{{ URL::asset('/img/bd-rcupas.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Ranca Upas</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/floatingmarket' }}">
                            <img src="{{ URL::asset('/img/bd-flmarket.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Floating Market</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/gedungsate' }}">
                            <img src="{{ URL::asset('/img/bd-gdsate.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Gedung Sate</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/tangkubanprahu' }}">
                            <img src="{{ URL::asset('/img/bd-tkperahu.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Tangkuban Perahu</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/farmhouse' }}">
                            <img src="{{ URL::asset('/img/bd-fhlembang.png') }}" class="dest-card" alt="foto destinasi">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Farmhouse Lembang</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/cartil' }}">
                            <img src="{{ URL::asset('/img/cartil.jpg') }}" class="dest-card"
                                alt="foto destinasi" style="width: 100%; height: 100%; overflow:hidden;">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Caringin Tilu</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/braga' }}">
                            <img src="{{ URL::asset('/img/braga.jpg') }}" class="dest-card"
                                alt="foto destinasi" style="width: 100%; height: 100%; overflow:hidden;">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Braga</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Butuh Tempat Menginap --}}
    <div class="container-fluid pb-4 mt-5" style="background-color: #DDF3FF">
        <div class="container-fluid mt-5">
            <div id="destinasipopuler" class="carousel slide" data-bs-ride="carousel">
                <div class="row">
                    <div class="col-6 text-start">
                        <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #3B87B2;">Butuh tempat
                            menginap?</h2>
                    </div>
                    <div class="col-6 text-end mt-3">
                        <nav aria-label="hotel list pagination button">
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    {{ $hotel->links() }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="carousel-inner" style="border-radius: 12px">
                            <div class="carousel-item active">
                                <div class="row row-cols-1 row-cols-md-4 g-2">
                                    @foreach ($hotel as $index => $htl)
                                        <div class="col">
                                            <div class="card border-0" style="max-width: 25rem; border-radius: 20px;">
                                                <img src="/storage/uploads/{{ $htl->ht_thumbnail }}"
                                                    class="card-img-top p-3" alt="foto thumbnail hotel"
                                                    style="height: 300px; overflow:hidden;border-radius: 20px;">
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="card-text"
                                                                style="font-weight: 600; font-size: 18px;">
                                                                {{ $htl->ht_name }}</p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            @if ($htl->ht_accesible == 'Ya')
                                                                <p
                                                                    style="font-weight: 600; font-size: 18px; color: #004973;">
                                                                    <span class="iconify"
                                                                        data-icon="map:wheelchair"></span>Aksesibel
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="mb-0"
                                                                style="font-weight: 500; font-size: 20px; color: #47A2D6;">
                                                                @money($idr_rates[$index]['rate'])</p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            @if ($idr_rates[$index]['name'] == 'Booking.com')
                                                                <img src="{{ URL::asset('/img/bookingcom-logo.png') }}"
                                                                    alt="logo booking.com">
                                                            @elseif ($idr_rates[$index]['name'] == 'Agoda.com')
                                                                <img src="{{ URL::asset('/img/agoda-logo.png') }}"
                                                                    alt="logo agoda.com"
                                                                    style="max-height: 22px; overflow:hidden">
                                                            @elseif ($idr_rates[$index]['name'] == 'FindHotel')
                                                                <img src="{{ URL::asset('/img/findhotel-logo.svg') }}"
                                                                    alt="logo findhtotel.com"
                                                                    style="max-height: 22px; overflow:hidden">
                                                            @elseif ($idr_rates[$index]['name'] == 'Expedia')
                                                                <img src="{{ URL::asset('/img/expedia-logo.png') }}"
                                                                    alt="logo expedia.com"
                                                                    style="max-height: 22px; overflow:hidden">
                                                            @elseif ($idr_rates[$index]['name'] == 'Hotels.com')
                                                                <img src="{{ URL::asset('/img/hotelcom-logo.png') }}"
                                                                    alt="logo hotel.com"
                                                                    style="max-height: 22px; overflow:hidden">
                                                            @elseif ($idr_rates[$index]['name'] == 'Trip.com')
                                                                <img src="{{ URL::asset('/img/tripcom-logo.png') }}"
                                                                    alt="logo trip.com"
                                                                    style="max-height: 22px; overflow:hidden">
                                                            @else
                                                                <p class="mb-0"
                                                                    style="font-weight: 500; font-size: 20px; color: #000000;">
                                                                    {{ $idr_rates[$index]['name'] }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row px-5 mt-2">
                                                        <a href="{{ route('/hotel/show', $htl->id) }}"
                                                            class="btn btn-primary border-0" type="button"
                                                            style="border-radius: 12px; background-color:#244D64">Lihat
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Destinasi Lainnya --}}
    <div class="container-fluid mt-5 mb-5">
        <div class="container-fluid pb-4" style="background-color: white;">
            <div id="destinasipopuler" class="carousel slide" data-bs-ride="carousel">
                <div class="row">
                    <div class="col-6 text-start">
                        <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #3B87B2;">Jelajahi
                            destinasi lainnya</h2>
                        <p class="mt-3" style="font-weight: 500; font-size: 24px; color: #47A2D6;">Banyak pilihan untuk
                            menikmati waktu berlibur Anda</p>
                    </div>
                    <div class="col-6 text-end mt-3">
                        <button class="btn btn-lg rounded-circle me-2" type="button" data-bs-target="#destinasipopuler"
                            data-bs-slide="prev" style="border-color: rgba(71, 162, 214, 1);">
                            <span class="bi bi-chevron-left" style="color: rgba(71, 162, 214, 1);"></span>
                        </button>
                        <button class="btn btn-lg rounded-circle" type="button" data-bs-target="#destinasipopuler"
                            data-bs-slide="next"
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
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;"
                                            href="{{ '/destinasi/bandung/asia-afrika' }}">
                                            <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">Asia
                                                        Afirka</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Ranca Upas</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="card text-white"
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bedugul' }}">
                                            <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Bedugul</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">Bali
                                                    </p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Borobudur</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Magelang</p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Floating Market</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;"
                                            href="{{ '/destinasi/bandung/asia-afrika' }}">
                                            <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">Asia
                                                        Afirka</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Ranca Upas</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="card text-white"
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bedugul' }}">
                                            <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Bedugul</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">Bali
                                                    </p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Borobudur</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Magelang</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="card text-white"
                                            style="border-radius: 12px; max-width: 20rem; max-height: 478.83px; overflow: hidden;" href="{{ '/destinasi/bandung/floatingmarket' }}">
                                            <img src="{{ URL::asset('/img/dest-pop5.png') }}" class="card-img"
                                                alt="...">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Floating Market</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;"
                                            href="{{ '/destinasi/bandung/asia-afrika' }}">
                                            <img src="{{ URL::asset('/img/dest-pop1.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">Asia
                                                        Afirka</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Ranca Upas</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="card text-white"
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/bedugul' }}">
                                            <img src="{{ URL::asset('/img/dest-pop3.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Bedugul</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">Bali
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="card text-white"
                                            style="border-radius: 12px; max-width: 20rem; overlay: hidden;" href="{{ '/destinasi/magelang' }}">
                                            <img src="{{ URL::asset('/img/dest-pop4.png') }}" class="card-img"
                                                alt="..." style="border-radius: 12px">
                                            <div class="card-img-overlay grad" style="border-radius: 12px">
                                                <div class="row position-absolute bottom-0 start-20 mb-2">
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Borobudur</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Magelang</p>
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
                                                    <h5 class="card-title" style="font-weight: 700; font-size: 24px;">
                                                        Floating Market</h5>
                                                    <p class="card-text" style="font-weight: 400; font-size: 20px;">
                                                        Bandung</p>
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 379px; overflow:hidden">
                <img src="{{ URL::asset('/img/ft-bdg.png') }}" class="card-img" alt="background">
                <div class="card-img-overlay d-flex">
                    <div class="container my-auto">
                        <h1 style="font-size: 40px; font-weight:700">Penginapan terbaik ada disini
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
