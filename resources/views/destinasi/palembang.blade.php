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
                    <img src="{{ URL::asset('/img/bg-pbg.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Palembang
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Palembang</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Palembang</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Palembang adalah ibu kota
                    dan kota terbesar di Provinsi Sumatra Selatan, Indonesia. Kota dengan luas wilayah 400,61 km² ini
                    dihuni oleh lebih dari 1,6 juta penduduk pada 2020. Kota Palembang juga kota terpadat dan terbesar
                    kedua di Sumatra setelah Medan, kota terpadat kelima di Indonesia setelah Jakarta Raya, Surabaya, Medan,
                    Bandung dan kota terbesar kesembilan belas di Asia Tenggara. Kota Palembang dan beberapa kabupaten
                    tetangganya (Kabupaten Banyuasin, Kabupaten Ogan Ilir, dan Kabupaten Ogan Komering Ilir) dikembangkan
                    oleh pemerintah pusat sebagai wilayah metropolitan di Indonesia dengan kawasan yang disebut Patungraya
                    Agung atau Palembang Raya.
                    <br><br>
                    Sejarah Palembang yang pernah menjadi ibu kota kerajaan bahari Buddha terbesar di Asia Tenggara pada
                    saat itu, Kerajaan Sriwijaya, yang mendominasi Nusantara dan Semenanjung Malaya pada abad ke-9 juga
                    membuat kota ini dikenal dengan julukan "Bumi Sriwijaya". Berdasarkan prasasti Kedukan Bukit yang
                    ditemukan di Bukit Siguntang sebelah barat Kota Palembang yang menyatakan pembentukan sebuah wanua yang
                    ditafsirkan sebagai kota pada tanggal 16 Juni 683 Masehi menjadikan kota Palembang sebagai kota tertua
                    di Indonesia. Di dunia Barat, kota Palembang juga dijuluki Venice of the East ("Venesia dari Timur").
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/plg-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/plg-2.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/plg-3.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
