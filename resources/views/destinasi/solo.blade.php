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
                    <img src="{{ URL::asset('/img/bd-sl.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Solo
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Solo</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Solo</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Surakarta (bahasa Jawa: ꦯꦹꦫꦠꦂꦡ, translit.
                    Surakarta, pengucapan bahasa Jawa: [surɔˈkart̪ɔ]) atau Solo (bahasa Jawa: ꦯꦴꦭ, translit. Sala,
                    pengucapan bahasa Jawa: [sɔlɔ]) adalah kota di Jawa Tengah, Indonesia, dengan penduduk 522.364 jiwa
                    (2020) dan kepadatan 11.861,00/km2. Kota dengan luas 44,04 km2 ini, berbatasan dengan Kabupaten
                    Karanganyar dan Kabupaten Boyolali di sebelah Utara, Kabupaten Karanganyar dan Kabupaten Sukoharjo di
                    sebelah Timur dan Barat, dan Kabupaten Sukoharjo di sebelah Selatan. Kota ini juga merupakan kota
                    terbesar ketiga di pulau Jawa bagian Selatan setelah Bandung dan Malang menurut jumlah penduduk. Sisi
                    Timur kota ini dilewati sungai yang terabadikan dalam salah satu lagu keroncong, Bengawan Solo. Bersama
                    dengan Yogyakarta, Surakarta merupakan pewaris Kerajaan Mataram Islam yang dipecah melalui Perjanjian
                    Giyanti, pada tahun 1755. Kota ini termasuk kawasan Solo Raya.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sl-1.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sl-2.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sl-3.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
