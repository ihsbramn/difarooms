@extends('layouts.app')

@section('head')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            color: #FFFFFF;
        }
    </style>
@endsection

@section('lower_body')
    <script src="{{ asset('js/maps.js') }}"></script>
    <script src="{{ asset('js/markercluster.js') }}"></script>
@endsection

@section('content')
    {{-- head of page --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-tamanlalin.jpeg') }}" class="card-img" alt="background">
                </div>
            </div>
            {{-- title n breadcrumb --}}
            <div class="col-12" style="background-color: #3B87B2">
                <h1 class="mt-5" style="font-weight: 700; font-size: 36px; color:#FFFFFF; padding-inline: 7rem">Taman Lalu
                    Lintas</h1>
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
                            style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Taman Lalu
                            Lintas
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
        {{-- photos --}}
        <div id='scrolly'>
            <a href="{{ URL::asset('/img/tll-1.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-1.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-1">
            </a>
            <a href="{{ URL::asset('/img/tll-2.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-2.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-2">
            </a>
            <a href="{{ URL::asset('/img/tll-3.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-3.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-3">
            </a>
            <a href="{{ URL::asset('/img/tll-4.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-4.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-4">
            </a>
            <a href="{{ URL::asset('/img/tll-5.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-5.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-5">
            </a>
            <a href="{{ URL::asset('/img/tll-6.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-6.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-6">
            </a>
            <a href="{{ URL::asset('/img/tll-7.jpeg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-7.jpeg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-7">
            </a>
            <a href="{{ URL::asset('/img/tll-4.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/tll-4.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-8">
            </a>
            <a href="{{ URL::asset('/img/tll-2.jpg') }}" data-lightbox="img-tll" style="margin-right: 30px">
                <img id='img-scroll' src='{{ URL::asset('/img/asaf-2.jpg') }}'
                    style="max-height: 300px; overflow: hidden; border-radius: 12px;" alt="taman lalu lintas-9">
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-7">
                {{-- main text --}}
                <p style="font-weight: 400; font-size: 16px;">
                    Taman Lalu-lintas Ade Irma Suryani adalah sebuah taman rekreasi yang ada di jantung kota Bandung, Jawa
                    Barat, Indonesia. Selain sebagai taman dan tempat bermain, di sini juga dijadikan pusat latihan membaca
                    rambu-rambu lalu lintas.
                    <br><br>
                    Taman Lalu Lintas memiliki pengertian bahwa sebuah taman lalu lintas atau traffic taman anak-anak adalah
                    sebuah taman di mana anak-anak dapat mempelajari aturan jalan . Sebuah taman lalu lintas juga disebut
                    sebuah desa taman transportasi atau lalu lintas taman atau keselamatan tergantung pada lokal .
                    <br><br>
                    Taman lalu lintas sering dibuat sebagai daya tarik dalam taman yang lebih besar . Dalam kasus lain,
                    mereka sekali pakai taman dan sering dalam skala kecil . Mereka dapat ditemukan di daerah perkotaan
                    maupun pedesaan .
                    <br><br>
                    Anak-anak dari usia minimum ( berusia 10 tahun dalam beberapa kasus ) diperbolehkan untuk menggunakan
                    sepeda atau mobil bertenaga pedal untuk menavigasi jalan-jalan dan beroperasi sesuai dengan peraturan
                    lalu lintas . Kadang-kadang mereka berbagi kereta dengan orang tua mereka, yang dapat memberikan
                    bimbingan karena mereka lingkaran taman . Biasanya, taman lalu lintas versi jalur dan jalan - lebar
                    sebanding dengan kendaraan yang lebih kecil . Seringkali mereka termasuk sinyal lalu lintas operasi dan
                    selama sibuk kali bahkan staf dengan polisi lalu lintas .
                    <br>
                    <br>
                    <span style="font-weight: 700; font-size: 16px;">Sejarah</span>
                    <br>
                    <br>
                    Dulu tempat ini dijadikan pusat komando pertahanan Hindia Belanda di Nusantara, bukan hanya gedung
                    Paleis Legercommandant yang sudah berubah fungsi jadi gedung Markas Komando Daerah Militer
                    III/Siliwangi. Gedong Departement van Oorlog atau Departemen Peperangan yang oleh warga disana dinamakan
                    Gedung Sabahu sebab dibangun di atas tanah seluas sabahu (0,7 hektare), sekarang sudah menjadi gedung
                    Markas Komando. Dua gedung itu adanya di Jalan Aceh dan Jalan Kalimantan yang sekaligus jadi batas
                    utara dan timur dari satu lahan yang terbuka. Di sebelah selatan dibatasi oleh Jalan Belitung dan di
                    sebelah barat dibatasi oleh Jalan Sumatera. Lahan terbuka ini awalnya merupakan tempat latihan baris
                    serdadu Belanda. Tetapi setelah dibangun lapangan baru yang sekarang menjadi Stadion Siliwangi, tempat
                    itu ditinggalkan. Lahan terbuka itu selanjutnya dijadikan taman.
                </p>
            </div>
            <div class="col-5 position-relative">
                {{-- map --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.82756588996!2d107.61115021519312!3d-6.911210995006282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e636e8c7889b%3A0xda87790f9febae9f!2sAde%20Irma%20Suryani%20Nasution%20Traffic%20Garden!5e0!3m2!1sen!2sid!4v1660380287682!5m2!1sen!2sid"
                    width="570" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="shadow position-absolute top-50 end-0 translate-middle-y" style="border-radius: 12px;"
                    title="map asia afrika"></iframe>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                </script>
                <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                </script>
                {{-- map --}}
            </div>
        </div>

        <div class="row">
            <h2 style="font-weight: 700; font-size: 16px; color: black">Aksesibilitas</h2>
            <ul class="ms-4">
                <li>
                    <p style="font-weight: 400; font-size: 16px;">Parkir mobil dengan akses kursi roda</p>
                </li>
                <li>
                    <p style="font-weight: 400; font-size: 16px;">Pintu masuk yang dapat diakses kursi roda</p>
                </li>
                <li>
                    <p style="font-weight: 400; font-size: 16px;">Toilet yang dapat diakses kursi roda</p>
                </li>
            </ul>
        </div>

        <div class="row mt-5">
            <h2>Rekomendasi lainnya</h2>
        </div>
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


    {{-- Butuh Tempat Menginap --}}
    <div class="container-fluid mt-5 pb-5" style="background-color: #DDF3FF; padding-inline: 7rem;">
        <div class="row">
            <div class="col-6 text-start">
                <h2 class="mt-3" style="font-weight: 700; font-size: 36px; color: #3B87B2;">Butuh tempat
                    menginap?</h2>
            </div>
            <div class="col-6 text-end mt-3">
                <button id="slideLeft" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    aria-label="button-left" style="border-color: rgba(71, 162, 214, 1); color: rgba(71, 162, 214, 1);"><i
                        class="bi bi-chevron-left"></i></button>
                <button id="slideRight" type="button" class="btn btn-lg rounded-circle shadow-sm"
                    aria-label="button-right"
                    style="background: rgba(71, 162, 214, 1); border-color: rgba(71, 162, 214, 1); color: white;"><i
                        class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="d-flex overflow-auto mt-3" id="hotelslider">
            @foreach ($hotel as $index => $htl)
                <div class="card border-0 pb-3 shadow-sm"
                    style="border-radius: 20px; min-width: 370px; margin-right: 35px">
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

    {{-- banner --}}
    <div class="comtainer-fluid">
        <div class="card bg-dark text-white border-0 rounded-0" style="max-height: 379px; overflow: hidden;">
            <img src="{{ URL::asset('/img/foot-dest.png') }}" class="card-img" alt="footer image destinasi">
            <div class="card-img-overlay" style="padding-inline: 7rem">
                <h2 class="card-title position-absolute top-50 start-20 translate-middle-y"
                    style="font-weight: 700;font-size: 36px; color: white;">Rasakan wisata inklusif <br>tanpa diskriminasi</h2>
            </div>
        </div>
    </div>
    {{-- banner --}}
@endsection
