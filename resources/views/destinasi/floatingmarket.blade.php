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
                    <img src="{{ URL::asset('/img/bg-fm.jpg') }}" class="card-img" alt="background">
                </div>
            </div>
            <div class="col-12" style="background-color: #3B87B2">
                <h1 class="mt-5" style="font-weight: 700; font-size: 36px; color:#FFFFFF; padding-inline: 7rem">Floating
                    Market</h1>
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
                            style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Floating Market
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
            <a href="{{ URL::asset('/img/ranca-1.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-1.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-2.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-2.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-3.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-3.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-4.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-4.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-5.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-5.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-6.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-6.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-4.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-4.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-1.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-1.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
            <a href="{{ URL::asset('/img/ranca-3.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/ranca-3.jpg') }}' alt="detail ranaupas" id='img-scroll'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;">
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-7">
                <p style="font-weight: 400; font-size: 16px; text-align:justify;">
                    Dahulunya adalah Pemancingan Situ Umar di Desa Lembang, pemancingan ikan paling terkenal dan paling lama
                    berdiri. Sejak 2012 dikelola swasta menjadi objek wisata dengan konsep pasar apung yang sangat digemari.
                    <br>
                    <br>
                    <span style="font-weight: 700; font-size: 16px;">Sejarah</span>
                    <br>
                    <br>
                    Bertempat di daerah Lembang yang merupakan sebuah kecamatan di Kabupaten Bandung Barat, Jawa Barat, Indonesia. Kecamatan ini
                    berjarak sekitar 22 Kilometer dari ibu kota kabupaten Bandung Barat ke arah timur laut melalui Cisarua.
                    Pusat pemerintahannya berada di Desa Lembang. Kecamatan Lembang merupakan kecamatan paling timur dan
                    terkenal sebagai tujuan wisata di Jawa Barat.
                </p>
            </div>
            <div class="col-5 position-relative">
                {{-- map --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6124992030786!2d107.61510461535639!3d-6.816895368573475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e11c4a9d27e5%3A0x7bcd1ace08104f55!2sFloating%20Market%20Lembang!5e0!3m2!1sen!2sid!4v1658408152249!5m2!1sen!2sid"
                    width="570" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="shadow position-absolute top-50 end-0 translate-middle-y" style="border-radius: 12px"
                    title="map ranca upas"></iframe>
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
        <div class="row row-cols-1 row-cols-md-4 g-5">
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/asia-afrika' }}">
                    <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/rancaupas' }}">
                    <img src="{{ URL::asset('/img/bd-rcupas.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Ranca Upas</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/floatingmarket' }}">
                    <img src="{{ URL::asset('/img/bd-flmarket.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Floating Market</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/gedungsate' }}">
                    <img src="{{ URL::asset('/img/bd-gdsate.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Gedung Sate</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/tangkubanprahu' }}">
                    <img src="{{ URL::asset('/img/bd-tkperahu.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Tangkuban Perahu</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/farmhouse' }}">
                    <img src="{{ URL::asset('/img/bd-fhlembang.png') }}" class="dest-card" alt="foto destinasi">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Farmhouse Lembang</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/cartil' }}">
                    <img src="{{ URL::asset('/img/cartil.jpg') }}" class="dest-card" alt="foto destinasi"
                        style="width: 100%; height: 100%; overflow:hidden;">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Caringin Tilu</h5>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0 zoom" href="{{ '/destinasi/bandung/braga' }}">
                    <img src="{{ URL::asset('/img/braga.jpg') }}" class="dest-card" alt="foto destinasi"
                        style="width: 100%; height: 100%; overflow:hidden;">
                    <div class="card-img-overlay grad dest-card">
                        <h5 class="card-title position-absolute bottom-0 start-20"
                            style="font-weight: 700; font-size: 24px; color: #ffffff">Braga</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Butuh Tempat Menginap --}}
    <div class="container-fluid mt-5 pb-5" style="background-color: #DDF3FF; padding-inline: 7rem;">
        <div class="row">
            <div class="col-6 text-start">
                <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #3B87B2;">Butuh tempat
                    menginap?</h2>
            </div>
            <div class="col-6 text-end mt-3">
                <button id="slideLeft" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="border-color: rgba(71, 162, 214, 1); color: rgba(71, 162, 214, 1);"><i
                        class="bi bi-chevron-left" aria-label="left-button"></i></button>
                <button id="slideRight" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    style="background: rgba(71, 162, 214, 1); border-color: rgba(71, 162, 214, 1); color: white;"><i
                        class="bi bi-chevron-right" aria-label="right-button"></i></button>
            </div>
        </div>
        <div class="d-flex overflow-auto mt-3" id="hotelslider">
            @foreach ($hotel as $index => $htl)
                <div class="card border-0 pb-3 shadow-sm" style="border-radius: 20px; min-width: 370px; margin-right: 35px">
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
                                style="border-radius: 12px; background-color:rgba(71, 162, 214, 1); font-weight: 600; font-size: 20px;">Lihat
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
                // document.getElementById('hotelslider').scrollLeft -= 300;
            };
        </script>
    </div>
    {{-- Butuh Tempat Menginap --}}

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
