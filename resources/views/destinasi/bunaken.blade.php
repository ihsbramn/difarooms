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
                    <img src="{{ URL::asset('/img/bg-bunaken.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati alam Bunaken
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Bunaken</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Bunaken</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Bunaken adalah sebuah pulau seluas 8,08
                    km² di Teluk Manado, yang terletak di utara pulau Sulawesi, Indonesia. Pulau ini merupakan bagian dari
                    kota Manado, ibu kota provinsi Sulawesi Utara, Indonesia. Pulau Bunaken dapat di tempuh dengan kapal
                    cepat (speed boat) atau kapal sewaan dengan perjalanan sekitar 30 menit dari pelabuhan kota Manado. Di
                    sekitar pulau Bunaken terdapat taman laut Bunaken yang merupakan bagian dari Taman Nasional Bunaken.
                    Taman laut ini memiliki biodiversitas kelautan salah satu yang tertinggi di dunia. Selam scuba menarik
                    banyak pengunjung ke pulau ini. Secara keseluruhan taman laut Bunaken meliputi area seluas 75.265
                    hektare dengan lima pulau yang berada di dalamnya, yakni Pulau Manado Tua (Manarauw), Pulau Bunaken,
                    Pulau Siladen, Pulau Mantehage berikut beberapa anak pulaunya, dan Pulau Naen. Meskipun meliputi area
                    75.265 hektare, lokasi penyelaman (diving) hanya terbatas di masing-masing pantai yang mengelilingi
                    kelima pulau itu.
                    <br>
                    <br>
                    Taman laut Bunaken memiliki 20 titik penyelaman (dive spot) dengan kedalaman bervariasi hingga 1.344
                    meter. Dari 20 titik selam itu, 12 titik selam di antaranya berada di sekitar Pulau Bunaken. Dua belas
                    titik penyelaman inilah yang paling kerap dikunjungi penyelam dan pecinta keindahan pemandangan bawah
                    laut.
                    <br>
                    <br>
                    Sebagian besar dari 12 titik penyelaman di Pulau Bunaken berjajar dari bagian tenggara hingga bagian
                    barat laut pulau tersebut. Di wilayah inilah terdapat underwater great walls, yang disebut juga hanging
                    walls, atau dinding-dinding karang raksasa yang berdiri vertikal dan melengkung ke atas. Dinding karang
                    ini juga menjadi sumber makanan bagi ikan-ikan di perairan sekitar Pulau Bunaken.
                    <br>
                    <br>
                    Sayang sekali akibat nama besarnya, banyak orang Indonesia yang bahkan tidak pernah menginjakkan kakinya
                    di Tanah Lumimuut, merasa telah mengenal dan tahu tentang Bunaken, bicara tentang Taman Nasional
                    Bunaken, berarti berbicara tentang International Heritage and a miracle of Bunaken. Banyak peneliti dari
                    luar negeri sangat menyayangkan kesalahan informasi dari Indonesia. Bunaken lebih daripada sekadar tahu
                    dalam buku, Bunaken adalah pengalaman menyelam.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bnk-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bnk-2.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/bnk-3.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
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
