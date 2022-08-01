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
                    <img src="{{ URL::asset('/img/bg-mnd.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Manado
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Manado</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Manado</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Kota Manado atau Menado adalah ibu kota
                    dari provinsi Sulawesi Utara, Indonesia. Kota Manado memiliki 11 kecamatan serta 87 kelurahan dan desa.
                    Manado terletak di Teluk Manado, dan dikelilingi oleh daerah pegunungan serta pesisir pantainya
                    merupakan tanah reklamasi yang dijadikan kawasan perbelanjaan, Kota ini memiliki 408.354 penduduk pada
                    Sensus 2010, sehingga menjadikannya kota terbesar kedua di Pulau Sulawesi setelah Kota Makassar. Jumlah
                    penduduk di Manado diperkirakan (berdasarkan Januari 2014) adalah 430.790 jiwa dan bertambah menjadi
                    475.557 jiwa pada tahun 2020, berdasarkan data Kementerian Dalam Negeri tahun 2020, dengan kepadatan
                    2.926 jiwa/km2.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mnd-1.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mnd-2.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mnd-3.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
