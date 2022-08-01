@extends('layouts.app')
@section('head')
@endsection
@section('content')
    {{-- header --}}
    <div class="container-fluid px-0">
        <div class="card bg-dark text-white rounded-0 border-0">
            <img src="{{ URL::asset('/img/bg-hotel.png') }}" class="card-img" alt="background" height="396px">
            <div class="card-img-overlay d-flex">
                <div class="container-fluid my-auto" style="padding-inline: 7rem;">
                    <h1 style="font-weight: 700; font-size: 64px">{{ $hotel->ht_name }}</h1>
                </div>
            </div>
            <div class="card-img-overlay d-flex">
                <div class="container-fluid mt-auto" style="padding-inline: 7rem;">
                    @auth
                        <div class="form-group">
                            <input type="text" class="form-control" id="fv_user_id" name="fv_user_id"
                                value="{{ Auth::user()->id }}" hidden>
                            <input type="text" class="form-control" id="fv_hotel_id" name="fv_hotel_id"
                                value="{{ $hotel->id }}" hidden>
                            <input type="text" class="form-control" id="fv_hotel_name" name="fv_hotel_name"
                                value="{{ $hotel->ht_name }}" hidden>
                            <input type="text" class="form-control" id="fv_count" name="fv_count" value="1" hidden>
                        </div>
                        <button href="submit" class="btn btn-secondary rounded-circle me-md-2"><i
                                class="bi bi-heart"></i></button>
                    @endauth
                    @guest
                        <button onclick="like()" class="btn btn-secondary rounded-circle me-md-2"><i
                                class="bi bi-heart"></i></button>
                        <script>
                            function like() {
                                alert("Harap login terlebih dahulu");
                            }
                        </script>
                    @endguest
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
            <div class="col-8">
                <div class="row">
                    {{-- gambar --}}
                    <div id='scrolly'>
                        @foreach ($hotel_img as $hi)
                            <a href="/storage/uploads/{{ $hi->name }}" data-lightbox="imghotel">
                                <img src="/storage/uploads/{{ $hi->name }}" alt="Foto detail hotel" id='img-scroll' style="max-height: 300px; overflow: hidden;">
                            </a>
                        @endforeach
                    </div>

                </div>
                <div class="row">
                    {{-- desc --}}
                    <p style="text-align: justify; font-weight: 500; font-size: 16px;">{{ $hotel->ht_description }}</p>
                </div>
                <hr>
                <div class="row">
                    <h2 style="font-weight: 700; font-size: 24px; color: #000000;">Tipe Kamar</h2>
                </div>
                <div class="row">
                    {{-- type kamar --}}
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        @foreach ($hotel_roomtype as $htl_rt)
                            <div class="col">
                                <div class="card border-0"
                                    style="max-height: 30rem; overflow: hidden; border-radius: 12px 12px 0px 0px">
                                    <img src="/storage/uploads/{{ $htl_rt->name }}" class="card-img-top"
                                        alt="foto type kamar"
                                        style="min-height: 10rem; overflow: auto; border-radius: 12px;">
                                    <div class="card-body p-0 mt-2">
                                        <h5 class="card-title" style="font-weight: 500; font-size: 16px;">
                                            {{ $htl_rt->name_roomtype }}</h5>
                                        <p class="card-text"
                                            style="font-weight: 400; font-size: 12px; text-align: justify;">
                                            {{ $htl_rt->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- side --}}
            <div class="col-4 ps-5 mb-5">
                {{-- youtube vid --}}
                <div class="row">
                    <div class="card px-0 border-0 shadow mb-3" style="border-radius: 12px">
                        <iframe src="{{ $hotel->ht_urlvideo }}" id='img-scroll' frameborder="0" style="border-radius: 12px;height: 300px"></iframe>
                    </div>
                </div>
                {{-- maps --}}
                <div class="row mb-3">
                    <div class="card px-0 border-0 shadow" style="border-radius:12px">
                        <iframe src="{{ $hotel->ht_embedmaps }}" id="embed_maps" class="embed_maps"
                            style="height: 292px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="card shadow border-0 px-3 py-3" style="border-radius: 12px">
                        {{-- aksesibilitas --}}
                        <h2 style="font-weight: 500; font-size: 22px; color:black;">Aksesibilitas</h2>
                        @if ($hotel->ht_accesible == 'Ya')
                            <div class="row ps-2">
                                <div class="col-6">
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="el:wheelchair"></span>Akses kursi roda</p>
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="ph:toilet-fill"></span>Toilet dengan pegangan</p>
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="medical-icon:elevators"></span>Lift disabel</p>
                                </div>
                                <div class="col-6">
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="bxs:car"></span>Antar jemput bandara</p>
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="fa:bath"></span>Kamar mandi luas</p>
                                    <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                            data-icon="fa6-solid:sink"></span>Westafel rendah</p>
                                </div>
                            </div>
                        @else
                            <p>suram</p>
                        @endif
                        <hr>
                        <h2 style="font-weight: 500; font-size: 22px; color:black;">Fasilitas Hotel</h2>
                        {{-- fasilitas full --}}
                        <div class="row ps-2">
                            @if ($hotel_fascility != '[]')
                                @foreach ($hotel_fascility as $hf)
                                    <div class="col-6">
                                        @if ($hf->ramp == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><img
                                                    src="{{ URL::asset('/img/ramp.png') }}" class="me-2"
                                                    alt="ramp"></span>Ramp</p>
                                        @endif
                                        @if ($hf->antarjemput == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="bxs:taxi"></span>Antar jemput</p>
                                        @endif
                                        @if ($hf->akses_kursiroda == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="el:wheelchair"></span>Akses kursi roda</p>
                                        @endif
                                        @if ($hf->toilet_pegangan == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="ph:toilet-fill"></span>Pegangan toilet</p>
                                        @endif
                                        @if ($hf->parkir_difabel == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa6-solid:square-parking"></span>Parkir
                                                difabel</p>
                                        @endif
                                        @if ($hf->bantuan_staff == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="bi:people-fill"></span>Bantuan staff</p>
                                        @endif
                                        @if ($hf->pusat_kesehatan == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa-solid:clinic-medical"></span>Pusat
                                                kesehatan</p>
                                        @endif
                                        @if ($hf->wifi == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa6-solid:wifi"></span>Wifi</p>
                                        @endif
                                        @if ($hf->kamarmandi_luas == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="cil:bathroom"></span>Kamar mandi luas</p>
                                        @endif
                                        @if ($hf->jalan_pemandu == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="akar-icons:dot-grid-fill"></span>Jalan
                                                pemandu</p>
                                        @endif
                                        @if ($hf->lift_aksesibel == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa6-solid:elevator"></span>Lift aksesibel
                                            </p>
                                        @endif
                                        @if ($hf->ac == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="iconoir:air-conditioner"></span>AC</p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        @if ($hf->restoran == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="dashicons:food"></span>Restoran</p>
                                        @endif
                                        @if ($hf->laundry == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="material-symbols:laundry"></span>Laundry</p>
                                        @endif
                                        @if ($hf->ruang_tunggu_tamu == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="medical-icon:waiting-area"></span>Ruang
                                                tunggu
                                                tamu</p>
                                        @endif
                                        @if ($hf->cctv == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="bxs:cctv"></span>CCTV</p>
                                        @endif
                                        @if ($hf->resepsionis_24jam == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fluent:access-time-24-filled"></span>Resepsionis
                                                24 Jam</p>
                                        @endif
                                        @if ($hf->kolam_renang == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="ic:round-pool"></span>Kolam renang</p>
                                        @endif
                                        @if ($hf->pemadam_api == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa-solid:fire-extinguisher"></span>Pemadam
                                                api
                                            </p>
                                        @endif
                                        @if ($hf->pusat_kebugaran == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="maki:fitness-centre"></span>Pusat
                                                kebugaran
                                            </p>
                                        @endif
                                        @if ($hf->mini_bar == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="carbon:bar"></span>Mini bar</p>
                                        @endif
                                        @if ($hf->masjid == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa-solid:mosque"></span>Masjid</p>
                                        @endif
                                        @if ($hf->westafel_rendah == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="fa6-solid:sink"></span>Westafel rendah</p>
                                        @endif
                                        @if ($hf->kloset_rendah == '1')
                                            <p style="font-weight: 400; font-size: 16px;"><span class="iconify me-2"
                                                    data-icon="ph:toilet-fill"></span>Kloset rendah</p>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <p>Maaf, data belum tersedia</p>
                            @endif

                        </div>
                        <hr>
                        {{-- harga --}}
                        <h2 style="font-weight: 500; font-size: 20px; color:black;">Harga</h2>
                        @if ($rates != null)
                            @foreach ($rates as $rt)
                                <div class="card shadow-sm mt-2" style="border-radius: 12px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-start">
                                                <p class="mb-0"
                                                    style="font-weight: 500; font-size: 14px; color: #47A2D6;">
                                                    @money($rt['rate'])/malam</p>
                                            </div>

                                            <div class="col text-end">
                                                @if ($rt['name']=="Booking.com")
                                                    <img src="{{ URL::asset('/img/bookingcom-logo.png') }}" alt="logo booking.com">
                                                @elseif ($rt['name']=="Agoda.com")
                                                <img src="{{ URL::asset('/img/agoda-logo.png') }}" alt="logo agoda.com" style="max-height: 22px; overflow:hidden">
                                                @elseif ($rt['name']=="FindHotel")
                                                <img src="{{ URL::asset('/img/findhotel-logo.svg') }}" alt="logo findhtotel.com" style="max-height: 22px; overflow:hidden">
                                                @elseif ($rt['name']=="Expedia")
                                                <img src="{{ URL::asset('/img/expedia-logo.png') }}" alt="logo expedia.com" style="max-height: 22px; overflow:hidden">
                                                @elseif ($rt['name']=="Hotels.com")
                                                <img src="{{ URL::asset('/img/hotelcom-logo.png') }}" alt="logo hotel.com" style="max-height: 22px; overflow:hidden">
                                                @elseif ($rt['name']=="Trip.com")
                                                <img src="{{ URL::asset('/img/tripcom-logo.png') }}" alt="logo trip.com" style="max-height: 22px; overflow:hidden">
                                                @else
                                                <p class="mb-0" style="font-weight: 500; font-size: 14px;">
                                                    {{ $rt['name'] }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Maaf, harga belum tersedia untuk saat ini</p>
                        @endif
                        <div class="card shadow-sm mt-2 py-2"
                            style="border-radius: 12px; background: #34E0A1; border-color: #34E0A1;">
                            <div class="row mx-auto">
                                <div class="col my-auto">
                                    <a class="mb-0" href="{{ $url_tripadvisor }}" target="_blank"
                                        style="font-weight: 500; text-decoration: none; color: black"><img src="{{ URL::asset('/img/tripadvlogo.jpg') }}"
                                            alt="tripadvisor logo" style="max-height: 30px;" class="me-2"> Lihat
                                        hotel ini di tripadvisor</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- kontak hotel --}}
                        <h2 style="font-weight: 500; font-size: 20px; color:black;">Kontak Hotel</h2>
                        <div class="row ps-2">
                            <p style="font-weight: 500; font-size: 16px;"><i class="bi bi-geo-alt-fill me-2"
                                    style="color: red;"></i>{{ $hotel->ht_address }}</p>
                            <p style="font-weight: 500; font-size: 16px;"><i class="bi bi-telephone-fill me-2"
                                    style="color: green;"></i>{{ $hotel->ht_contact }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
