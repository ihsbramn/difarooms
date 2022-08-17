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
                    <img src="{{ URL::asset('/img/bg-sby.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Surabaya
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Surabaya</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Surabaya</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px;">Kota Surabaya adalah ibu kota Provinsi Jawa Timur, Indonesia, sekaligus kota
                    metropolitan terbesar di provinsi tersebut. Surabaya merupakan kota terbesar kedua di Indonesia setelah
                    Jakarta. Kota ini terletak 800 km sebelah timur Jakarta, atau 435 km sebelah barat laut Denpasar, Bali.
                    Surabaya terletak di pantai utara Pulau Jawa bagian timur dan berhadapan dengan Selat Madura serta Laut
                    Jawa.
                    <br><br>
                    Surabaya memiliki luas sekitar ±326,81 km², dan 2.970.843 jiwa penduduk pada tahun 2021. Daerah
                    metropolitan Surabaya yaitu Gerbangkertosusila yang berpenduduk sekitar 10 juta jiwa, adalah kawasan
                    metropolitan terbesar kedua di Indonesia setelah Jabodetabek. Surabaya dan wilayah Gerbangkertosusila
                    dilayani oleh sebuah bandar udara, yakni Bandar Udara Internasional Juanda yang berada 20 km di sebelah
                    selatan kota, serta dua pelabuhan, yakni Pelabuhan Tanjung Perak dan Pelabuhan Ujung.
                    <br><br>
                    Surabaya terkenal dengan sebutan Kota Pahlawan karena sejarahnya yang sangat diperhitungkan dalam
                    perjuangan Arek-Arek Suroboyo (Pemuda-pemuda Surabaya) dalam mempertahankan kemerdekaan bangsa Indonesia
                    dari serangan penjajah. Surabaya juga sempat menjadi kota terbesar di Hindia Belanda dan menjadi pusat
                    niaga di Nusantara yang sejajar dengan Hong Kong dan Shanghai pada masanya. Menurut Bappenas,
                    Surabaya adalah salah satu dari empat kota pusat pertumbuhan utama di Indonesia, bersama dengan Medan,
                    Jakarta, dan Makassar.
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sby-1.jpg') }}" class="card-img h-100" alt="foto kota surabaya 1" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sby-2.jpg') }}" class="card-img h-100" alt="foto kota surabaya 2" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/sby-3.jpg') }}" class="card-img h-100" alt="foto kota surabaya 3" style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
