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
                    {{-- gambar --}}
                    
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
                            @if ($hotel_fascility != '[]')
                                @foreach ($hotel_fascility as $hf)
                                    <div class="col-6">
                                        @if ($hf->ramp == '1')
                                            <p><img src="{{ URL::asset('/img/ramp.png') }}" alt="ramp"></span>Ramp</p>
                                        @endif
                                        @if ($hf->antarjemput == '1')
                                            <p><span class="iconify" data-icon="bxs:taxi"></span>Antar jemput</p>
                                        @endif
                                        @if ($hf->akses_kursiroda == '1')
                                            <p><span class="iconify" data-icon="el:wheelchair"></span>Akses kursi roda</p>
                                        @endif
                                        @if ($hf->toilet_pegangan == '1')
                                            <p><span class="iconify" data-icon="ph:toilet-fill"></span>Pegangan toilet</p>
                                        @endif
                                        @if ($hf->parkir_difabel == '1')
                                            <p><span class="iconify" data-icon="fa6-solid:square-parking"></span>Parkir
                                                difabel</p>
                                        @endif
                                        @if ($hf->bantuan_staff == '1')
                                            <p><span class="iconify" data-icon="bi:people-fill"></span>Bantuan staff</p>
                                        @endif
                                        @if ($hf->pusat_kesehatan == '1' )
                                            <p><span class="iconify" data-icon="fa-solid:clinic-medical"></span>Pusat
                                                kesehatan</p>
                                        @endif
                                        @if ($hf->wifi == '1')
                                            <p><span class="iconify" data-icon="fa6-solid:wifi"></span>Wifi</p>
                                        @endif
                                        @if ($hf->kamarmandi_luas == '1')
                                            <p><span class="iconify" data-icon="cil:bathroom"></span>Kamar mandi luas</p>
                                        @endif
                                        @if ($hf->jalan_pemandu == '1')
                                            <p><span class="iconify" data-icon="akar-icons:dot-grid-fill"></span>Jalan
                                                pemandu</p>
                                        @endif
                                        @if ($hf->lift_aksesibel == '1')
                                            <p><span class="iconify" data-icon="fa6-solid:elevator"></span>Lift aksesibel
                                            </p>
                                        @endif
                                        @if ($hf->ac == '1')
                                            <p><span class="iconify" data-icon="iconoir:air-conditioner"></span>AC</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        @if ($hf->restoran == '1')
                                            <p><span class="iconify" data-icon="dashicons:food"></span>Restoran</p>
                                        @endif
                                        @if ($hf->laundry == '1')
                                            <p><span class="iconify" data-icon="material-symbols:laundry"></span>Laundry</p>
                                        @endif
                                        @if ($hf->ruang_tunggu_tamu == '1')
                                            <p><span class="iconify" data-icon="medical-icon:waiting-area"></span>Ruang
                                                tunggu
                                                tamu</p>
                                        @endif
                                        @if ($hf->cctv == '1')
                                            <p><span class="iconify" data-icon="bxs:cctv"></span>CCTV</p>
                                        @endif
                                        @if ($hf->resepsionis_24jam == '1')
                                            <p><span class="iconify"
                                                    data-icon="fluent:access-time-24-filled"></span>Resepsionis
                                                24 Jam</p>
                                        @endif
                                        @if ($hf->kolam_renang == '1')
                                            <p><span class="iconify" data-icon="ic:round-pool"></span>Kolam renang</p>
                                        @endif
                                        @if ($hf->pemadam_api == '1')
                                            <p><span class="iconify" data-icon="fa-solid:fire-extinguisher"></span>Pemadam
                                                api
                                            </p>
                                        @endif
                                        @if ($hf->pusat_kebugaran == '1')
                                            <p><span class="iconify" data-icon="maki:fitness-centre"></span>Pusat
                                                kebugaran
                                            </p>
                                        @endif
                                        @if ($hf->mini_bar == '1')
                                            <p><span class="iconify" data-icon="carbon:bar"></span>Mini bar</p>
                                        @endif
                                        @if ($hf->masjid == '1')
                                            <p><span class="iconify" data-icon="fa-solid:mosque"></span>Masjid</p>
                                        @endif
                                        @if ($hf->westafel_rendah == '1')
                                            <p><span class="iconify" data-icon="fa6-solid:sink"></span>Westafel rendah</p>
                                        @endif
                                        @if ($hf->kloset_rendah == '1')
                                            <p><span class="iconify" data-icon="ph:toilet-fill"></span>Kloset rendah</p>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <p>Maaf, data belum tersedia</p>
                            @endif

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
