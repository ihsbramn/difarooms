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
                    <img src="{{ URL::asset('/img/bg-bgr.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Bogor
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Bogor</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Bogor</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px;">Bogor adalah sebuah kota yang terletak di provinsi Jawa Barat, Indonesia. Kota ini
                    terletak 59 km di sebelah selatan Jakarta, dan merupakan enklave Kabupaten Bogor. Pada akhir tahun 2021,
                    jumlah penduduk kota Bogor sebanyak 1.091.396 jiwa, dengan kepadatan 9.210 jiwa/km2.
                    <br><br>
                    Bogor dikenal dengan julukan Kota Hujan, karena memiliki curah hujan yang lumayan sangat tinggi. Kota
                    Bogor terdiri atas 6 kecamatan yang dibagi lagi atas sejumlah 68 kelurahan. Pada masa Kolonial Belanda,
                    Bogor dikenal dengan nama Buitenzorg yang berarti tanpa kecemasan atau aman tenteram.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bgr-1.jpg') }}" class="card-img h-100" alt="foto kota bogor 1" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bgr-2.jpg') }}" class="card-img h-100" alt="foto kota bogor 2" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bgr-3.jpg') }}" class="card-img h-100" alt="foto kota bogor 3" style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
