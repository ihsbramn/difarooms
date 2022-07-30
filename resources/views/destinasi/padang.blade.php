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
                    <img src="{{ URL::asset('/img/bg-pdg.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Padang
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Padang</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Padang</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Padang adalah kota terbesar di pantai
                    barat Pulau Sumatra dan ibu kota provinsi Sumatra Barat, Indonesia. Kota ini merupakan pintu gerbang
                    barat Indonesia dari Samudra Hindia. Secara geografi, Padang dikelilingi perbukitan yang mencapai
                    ketinggian 1.853 mdpl dengan luas wilayah 693,66 km², lebih dari separuhnya berupa hutan lindung.
                    Berdasarkan data Badan Pusat Statistik (BPS) pada 2021, kota ini memiliki jumlah penduduk sebanyak
                    909.040 jiwa. Padang merupakan kota inti dari pengembangan wilayah metropolitan Palapa.
                    <br><br>
                    Sejarah Kota Padang tidak terlepas dari peranannya sebagai kawasan rantau Minangkabau, yang berawal dari
                    perkampungan nelayan di muara Batang Arau lalu berkembang menjadi bandar pelabuhan yang ramai setelah
                    masuknya Belanda di bawah bendera Vereenigde Oostindische Compagnie (VOC). Hari jadi kota ditetapkan
                    pada 7 Agustus 1669, yang merupakan hari penyerangan loji Belanda di Muara Padang oleh masyarakat Pauh
                    dan Koto Tangah. Semasa penjajahan Belanda, kota ini menjadi pusat perdagangan emas, teh, kopi, dan
                    rempah-rempah. Memasuki abad ke-20, ekspor batu bara dan semen mulai dilakukan melalui Pelabuhan Teluk
                    Bayur. Saat ini, infrastruktur Kota Padang telah dilengkapi oleh Bandar Udara Internasional Minangkabau
                    serta jalur kereta api yang terhubung dengan kota-kota lain di Sumatra Barat.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/pdg-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/pdg-2.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/pdg-3.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
