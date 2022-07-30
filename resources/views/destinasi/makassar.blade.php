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
                    <img src="{{ URL::asset('/img/bg-mks.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Makassar
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Makassar</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Makassar</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Kota Makassar adalah ibu kota provinsi Sulawesi Selatan, Indonesia. Kota ini merupakan kota terbesar
                    di wilayah Indonesia Timur dan pusat kota terbesar kelima di Indonesia setelah Jakarta, Surabaya,
                    Bandung, dan Medan. Kota ini terletak di pesisir barat daya pulau Sulawesi, menghadap Selat
                    Makassar. Sebagian besar penduduknya adalah orang Bugis atau To Ugi diikuti oleh penduduk asli Orang
                    Makassar atau Tu Mangkasaraʼ.
                    <br><br>
                    Menurut Bappenas, Makassar adalah salah satu dari empat pusat pertumbuhan utama di Indonesia, bersama
                    dengan Medan, Jakarta, dan Surabaya. Dengan memiliki wilayah seluas 175,77 km² dan jumlah penduduk
                    lebih dari 1,5 juta jiwa, kota ini berada di urutan ketujuh kota terbesar di Indonesia setelah Jakarta,
                    Surabaya, Bandung, Medan, Semarang, dan Palembang. Secara demografis, kota ini tergolong tipe
                    multi etnik atau multi kultur dengan beragam suku bangsa yang menetap di dalamnya, di antaranya yang
                    signifikan jumlahnya adalah Suku Makassar, Bugis, Toraja, Mandar, Buton, Jawa, dan Tionghoa. Makanan
                    khas Makassar yang umum dijumpai di pelosok kota adalah Coto Makassar, Roti Maros, Jalangkote, Bassang,
                    Kue Tori, Palubutung, Pisang Ijo, Sop Saudara dan Sop Konro.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mks-1.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mks-2.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mks-3.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
