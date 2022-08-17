@extends('layouts.app')

@section('head')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(71, 162, 214, 1);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            {{-- header --}}
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-yk.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Yogyakarta <br> dengan
                                berkeliling naik delman
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Yogyakarta</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Yogyakarta</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px;">Kota Yogyakarta (bahasa Jawa: ꦪꦺꦴꦒꦾꦏꦂꦠ,
                    translit. Ngayogyakarta, atau dikenal oleh masyarakat
                    setempat dengan nama Kota Jogja atau Kota Yogya adalah ibu kota dan pusat pemerintahan Daerah Istimewa
                    Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya
                    Jawa. Kota Yogyakarta adalah kediaman bagi Sultan Hamengkubuwana dan Adipati Paku Alam. Kota Yogyakarta
                    merupakan salah satu kota terbesar di Indonesia dan kota terbesar keempat di wilayah Pulau Jawa bagian
                    selatan menurut jumlah penduduk. Kota Yogyakarta juga pernah menjadi ibu kota RI pada tahun 1946.
                    <br>
                    <br>
                    Salah satu kecamatan di Yogyakarta, yaitu Kotagede pernah menjadi pusat Kesultanan Mataram antara kurun
                    tahun 1575–1640. Keraton (Istana) yang masih berfungsi dalam arti yang sesungguhnya adalah Keraton
                    Ngayogyakarta dan Puro Paku Alaman, yang merupakan pecahan dari Kesultanan Mataram. Pada masa revolusi,
                    Yogyakarta juga pernah menjadi ibu kota Indonesia antara tahun 1946 hingga 1950.
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/yk-1.jpg') }}" class="card-img-top" alt="foto kota yogyakarta1" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/yk-2.jpg') }}" class="card-img-top" alt="foto kota yogyakarta2" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/yk-3.jpg') }}" class="card-img-top" alt="foto kota yogyakarta3" style="border-radius: 12px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
