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
                    <img src="{{ URL::asset('/img/bg-borobudur.jpg') }}" class="card-img" alt="background">
                </div>
            </div>
            <div class="col-12" style="background-color: #3B87B2">
                <h1 class="mt-5" style="font-weight: 700; font-size: 36px; color:#FFFFFF; padding-inline: 7rem">Borobudur
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
                            style="text-decoration: none; font-weight: 500; font-size: 14px; color: #FFFFFF">Borobudur
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- main of page --}}
    <div class="container-fluid mt-5 mb-5" style="padding-inline: 7rem">
        <div class="row mt-4">
            <h2 style="font-weight: 600; font-size: 24px; color: #3B87B2;">Galeri Foto</h2>
        </div>
        <div id='scrolly'>
            <a href="{{ URL::asset('/img/brd-1.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-1.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-2.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-2.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-3.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-3.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-4.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-4.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-5.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-5.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-6.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-6.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
            <a href="{{ URL::asset('/img/brd-7.jpg') }}" data-lightbox="imghotel">
                <img id='img-scroll' src='{{ URL::asset('/img/brd-7.jpg') }}' id='img-scroll'
                    style="max-height: 300px; overflow: hidden;">
            </a>
        </div>
        <div class="row mt-5">
            <div class="col-7">
                <p style="font-weight: 400; font-size: 16px; text-align:justify;">
                    Candi Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Båråbudhur) adalah sebuah candi Buddha
                    yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di
                    sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut
                    Yogyakarta. Candi dengan banyak stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar
                    tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha
                    terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.
                    <br>
                    <br>
                    Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran
                    melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha.
                    Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar
                    teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa
                    berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna
                    dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).
                    <br>
                    <br>
                    Monumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha
                    sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi
                    menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha. Para peziarah masuk melalui sisi timur dan
                    memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil
                    terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan
                    itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak
                    berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan
                    menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.
                    <br>
                    <br>
                    Menurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-10 seiring dipindahnya pusat Kerajaan
                    Mataram Kuno ke Jawa Timur oleh Pu Sindok. Dunia mulai menyadari keberadaan bangunan ini sejak
                    ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal
                    Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran
                    (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya
                    Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan
                    Dunia.
                    <br>
                    <br>
                    Borobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari
                    seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Terkait
                    kepariwisataan, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi
                    wisatawan.
                    <br>
                    <br>
                    Pada 11 Februari 2022, pemerintah meresmikan status Candi Borobudur kembali sebagai tempat peribadatan
                    umat Buddhis di Indonesia dan dunia.
                </p>
            </div>
            <div class="col-5 position-relative">
                {{-- map --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63274.36937797716!2d110.16444805188124!3d-7.613217594635842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cef5e6c0f59%3A0x4027a76e352eb60!2sBorobudur%2C%20Magelang%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1659206445170!5m2!1sen!2sid"
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
