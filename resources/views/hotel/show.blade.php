@extends('layouts.app')
@section('head')
@endsection
@section('content')
    {{-- header --}}
    <div class="container-fluid px-0">
        <div class="card bg-dark text-white rounded-0 border-0">
            <img src="{{ URL::asset('/img/bg-hotel.png') }}" class="card-img" alt="background" height="396px">
            <div class="card-img-overlay d-flex">
                <div class="container-fluid px-4 my-auto">
                    <h1 style="font-weight: 700; font-size: 64px">{{ $hotel->ht_name }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding-inline: 7rem;">

        {{-- breadcrumb nav --}}
        <div class="row mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ '/hotel' }}"
                            style="font-weight: 500; font-size: 16px; text-decoration: none; color: rgba(0, 0, 0, 1);">Hotel</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"
                        style="font-weight: 500; font-size: 16px; text-decoration: none; color: rgba(71, 162, 214, 1);">
                        {{ $hotel->ht_name }}</li>
                </ol>
            </nav>
        </div>

        {{-- content --}}
        <div class="row">
            {{-- main --}}
            <div class="col-7">
                <div class="row">
                    ini gambar
                </div>
                <div class="row">
                    <p style="text-align: justify">{{ $hotel->ht_description }}</p>
                </div>
                <hr>
                <div class="row">
                    <h2>Tipe Kamar</h2>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($hotel_roomtype as $htl_rt)
                            <div class="col">
                                <div class="card">
                                    <img src="/storage/uploads/{{ $htl_rt->name }}" class="card-img-top"
                                        alt="foto type kamar">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $htl_rt->name_roomtype }}</h5>
                                        <p class="card-text">{{ $htl_rt->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- side --}}
            <div class="col-5">
                <div class="row">
                    <iframe src="{{ $hotel->ht_embedmaps }}" id="embed_maps" class="embed_maps mb-5 shadow"
                        style="height: 292px; border-radius:12px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row">
                    <div class="card shadow">
                        <h2 style="font-weight: 500; font-size:24px">Aksesibilitas</h2>
                        @if ($hotel->ht_accesible == 'Ya')
                            <div class="row">
                                <div class="col-6">
                                    <p><span class="iconify" data-icon="el:wheelchair"></span>Akses kursi roda</p>
                                    <p><span class="iconify" data-icon="ph:toilet-fill"></span>Toilet dengan pegangan</p>
                                    <p><span class="iconify" data-icon="medical-icon:elevators"></span>Lift disabel</p>
                                </div>
                                <div class="col-6">
                                    <p><span class="iconify" data-icon="bxs:car"></span>Antar jemput bandara</p>
                                    <p><span class="iconify" data-icon="fa:bath"></span>Kamar mandi luas</p>
                                    <p><span class="iconify" data-icon="fa6-solid:sink"></span>Westafel rendah</p>
                                </div>
                            </div>
                        @else
                            <p>suram</p>
                        @endif
                        <hr>
                        <h2 style="font-weight: 500; font-size:24px">Fasilitas Hotel</h2>
                        <div class="row">
                            <div class="col-6">
                                <p><img src="{{ URL::asset('/img/ramp.png') }}" alt=""> Ramp</p>
                                <p><span class="iconify" data-icon="bxs:taxi"></span>Antar jemput</p>
                                <p><span class="iconify" data-icon="el:wheelchair"></span>Akses kursi roda</p>
                                <p><span class="iconify" data-icon="ph:toilet-fill"></span>Pegangan toilet</p>
                                <p><span class="iconify" data-icon="fa6-solid:square-parking"></span>Parkir difabel</p>
                                <p><span class="iconify" data-icon="bi:people-fill"></span>Bantuan staff</p>
                                <p><span class="iconify" data-icon="fa-solid:clinic-medical"></span>Pusat kesehatan</p>
                                <p><span class="iconify" data-icon="fa6-solid:wifi"></span>Wifi</p>
                                <p><span class="iconify" data-icon="cil:bathroom"></span>Kamar mandi luas</p>
                                <p><span class="iconify" data-icon="akar-icons:dot-grid-fill"></span>Jalan pemandu</p>
                                <p><span class="iconify" data-icon="fa6-solid:elevator"></span>Lift aksesibel</p>
                                <p><span class="iconify" data-icon="iconoir:air-conditioner"></span>AC</p>
                            </div>
                            <div class="col-6">
                                <p><span class="iconify" data-icon="dashicons:food"></span>Restoran</p>
                                <p><span class="iconify" data-icon="material-symbols:laundry"></span>Laundry</p>
                                <p><span class="iconify" data-icon="medical-icon:waiting-area"></span>Ruang tunggu tamu</p>
                                <p><span class="iconify" data-icon="bxs:cctv"></span>CCTV</p>
                                <p><span class="iconify" data-icon="fluent:access-time-24-filled"></span>Resepsionis 24 Jam</p>
                                <p><span class="iconify" data-icon="ic:round-pool"></span>Kolam renang</p>
                                <p><span class="iconify" data-icon="fa-solid:fire-extinguisher"></span>Pemadam api</p>
                                <p><span class="iconify" data-icon="maki:fitness-centre"></span>Pusat kebugaran</p>
                                <p><span class="iconify" data-icon="carbon:bar"></span>Mini bar</p>
                                <p><span class="iconify" data-icon="fa-solid:mosque"></span>Masjid</p>
                                <p><span class="iconify" data-icon="fa6-solid:sink"></span>Westafel rendah</p>
                                <p><span class="iconify" data-icon="ph:toilet-fill"></span>Kloset rendah</p>
                            </div>
                        </div>
                        <hr>
                        <h2 style="font-weight: 500; font-size:24px">Harga</h2>
                        @if ($rates != null)
                        @foreach ($rates as $rt)
                            <div class="row">
                                <p>{{ $rt['name'] }}</p>
                                <p>{{ $rt['rate'] }}</p>
                            </div>
                        @endforeach
                        @else
                            <p>Maaf, harga belum tersedia untuk saat ini</p>
                        @endif
                        <hr>
                        <h2 style="font-weight: 500; font-size:24px">Kontak Hotel</h2>
                        <div class="row">
                            <p style="font-weight: 500; font-size: 14px;"><i
                                    class="bi bi-geo-alt-fill me-2"></i>{{ $hotel->ht_address }}</p>
                            <p style="font-weight: 500; font-size: 14px;"><i
                                    class="bi bi-telephone-fill"></i>{{ $hotel->ht_contact }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
