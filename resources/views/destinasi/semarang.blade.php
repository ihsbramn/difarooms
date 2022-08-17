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
                    <img src="{{ URL::asset('/img/bg-srg.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Semarang
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Semarang</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Semarang</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px;">Kota Semarang adalah ibu kota Provinsi
                    Jawa Tengah, Indonesia.
                    Kota ini sekaligus menjadi Kota metropolitan terbesar kelima di Indonesia setelah Jakarta, Surabaya,
                    Bandung, dan Medan. Sebagai salah satu kota paling berkembang di Pulau Jawa, Kota Semarang
                    mempunyai jumlah penduduk sekitar 1,6 juta jiwa. Kawasan mega-urban Semarang yang tergabung dalam
                    wilayah metropolitan Kedungsepur (Kendal, Demak, Ungaran, Kabupaten Semarang, Kota Salatiga, Kota
                    Semarang dan Purwodadi, Kabupaten Grobogan) berpenduduk mencapai 7,3 juta jiwa, sekaligus sebagai
                    wilayah metropolitan terpadat keempat di Pulau Jawa, setelah Jabodetabek (Jakarta), Gerbangkertosusilo
                    (Surabaya), dan Bandung Raya. Dalam beberapa tahun terakhir, perkembangan Semarang yang signifikan
                    ditandai pula dengan munculnya beberapa gedung pencakar langit yang tersebar di penjuru kota.
                    Perkembangan regional ini menunjukan peran strategis Kota Semarang terhadap roda perekonomian nasional.
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/srg-1.jpg') }}" class="card-img h-100" alt="foto kota semarang 1"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/srg-2.jpg') }}" class="card-img h-100" alt="foto kota semarang 2"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/srg-3.jpg') }}" class="card-img h-100" alt="foto kota semarang 3"
                                style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
