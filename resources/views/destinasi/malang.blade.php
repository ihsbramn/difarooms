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
                    <img src="{{ URL::asset('/img/bg-malang.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Malang <br> dan rasakan
                                segarnya udara pegunungan
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Malang</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Malang</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Kota Malang adalah sebuah kota yang
                    terletak di provinsi
                    Jawa Timur, Indonesia, kota terbesar kedua di Jawa Timur setelah Surabaya, dan kota terbesar ke-12
                    di Indonesia. Kota ini didirikan pada masa Pemerintahan Belanda pada tanggal 1 April 1914, yang dimana
                    E.K Broeveldt sebagai wali kota pertama,Kota ini terletak di dataran tinggi seluas 145,28 km² yang
                    merupakan enklave Kabupaten Malang. Bersama dengan Kota Batu dan Kabupaten Malang, Kota Malang
                    merupakan bagian dari kesatuan wilayah yang dikenal dengan Malang Raya.
                    <br>
                    <br>
                    Kota Malang dikenal baik sebagai kota pendidikan. Kota ini memiliki berbagai perguruan tinggi terbaik
                    seperti Universitas Brawijaya, Universitas Negeri Malang, UIN Maulana Malik Ibrahim Malang, dan
                    Politeknik Negeri Malang. Selain itu, kota ini merupakan kota pariwisata karena alamnya yang menawan
                    yang dikelilingi oleh pegunungan serta udaranya yang sejuk. Malang pun terkenal sebagai kota
                    bunga karena banyaknya bunga yang menghiasi kota. Kota Malang juga merupakan kota seni karena
                    banyaknya kesenian khas dari kota ini, mulai dari tarian hingga pertunjukan.
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mlg-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mlg-2.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/mlg-3.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
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
    </div> --}}
@endsection
