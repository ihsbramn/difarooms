@extends('layouts.app')

@section('head')
@endsection

@section('up_body')
@endsection

{{-- marker maps --}}
@section('lower_body')
<<<<<<< HEAD
    @foreach ( $hotel as $data )
    <script>
        var markersOnMap = [{
            placeName: '{{ $data->ht_name }}',
            LatLng: [{
                lat: {{ $data->ht_latitude }},
                lng:  {{ $data->ht_longitude }}
            }],
            url: '{{ route('/hotel/show', $data->id) }}'
        }];
    </script>
    @endforeach
@endsection
{{-- marker maps --}}

@section('content')
    {{-- header hotel --}}
    <div class="container-fluid px-0">
        <div class="card bg-dark text-center text-white rounded-0 border-0">
            <img src="{{ URL::asset('/img/bg-hotel.png') }}" class="card-img" alt="background" height="567px">
            <div class="card-img-overlay d-flex">
                <div class="container my-auto">
                    <h1 class="align-self-center mx-auto" style="font-weight: 700; font-size: 96px">Hotel</h1>
                    <div class="input-group pt-5">
                        <input type="text" class="form-control border-0" placeholder="Cari hotel" aria-label="Cari hotel"
                            aria-describedby="search-hotel" style="background-color: #D9D9D9">
                        <button class="btn btn-primary" type="button" id="search-hotel"
                            style="background-color: #244D64; border-color:#244D64">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header hotel --}}

    <div class="container">
        {{-- map --}}
        <div class="mt-5 mb-5 shadow" id="map" style="height: 318px;border-radius:12px">INI MAP</div>

        <script src="{{ asset('js/maps.js') }}"></script>
        <script src="{{ asset('js/markercluster.js') }}"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
        </script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        {{-- map --}}

        {{-- list hotel & filter --}}
        <div class="row">
            <div class="col-sm-4">
                {{-- filter --}}
                <div class="card border-0 shadow p-3 mb-5" style="border-radius:12px">
                    <div class="card-body p-2">
                        <h3 class="card-tittle" style="font-weight: 700; font-size:20px">Filter</h3>
                        {{-- kelas --}}
                        <h3 class="card-subtittle mt-4" style="font-weight: 600; font-size: 16px">Kelas Hotel</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="bintang5">
                            <label class="form-check-label" for="bintang5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg> <span class="me-1"> (5) </span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="bintang4">
                            <label class="form-check-label" for="bintang4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg> <span class="me-1"> (4) </span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="bintang3">
                            <label class="form-check-label" for="bintang3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg> <span class="me-1"> (3) </span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="bintang2">
                            <label class="form-check-label" for="bintang2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="gold"
                                    class="bi bi-star-fill" viewBox="0 0 17 17">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg> <span class="me-1"> (2) </span>
                            </label>
                        </div>
                        {{-- kelas --}}
                        <hr>
                        {{-- harga --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Harga</h3>
                        <div class="input-group">
                            <input type="text" class="form-control border-0" aria-label="IDR amount"
                                placeholder="Harga minimum" style="background-color: #EAEAEA;">
                            <span class="input-group-text border-0">Rp</span>
                        </div>
                        <div class="input-group pt-3">
                            <input type="text" class="form-control border-0" aria-label="IDR amount"
                                placeholder="Harga maksimum" style="background-color: #EAEAEA;">
                            <span class="input-group-text border-0">Rp</span>
                        </div>
                        {{-- harga --}}
                        <hr>
                        {{-- Lokasi --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Lokasi</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="bandung" id="bandung">
                            <label class="form-check-label" for="bandung">
                                Bandung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="yogyakarta" id="Yogyakarta">
                            <label class="form-check-label" for="Yogyakarta">
                                Yogyakarta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="malang" id="malang">
                            <label class="form-check-label" for="malang">
                                Malang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="solo"
                                id="solo">
                            <label class="form-check-label" for="solo">
                                Solo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="bali" id="bali">
                            <label class="form-check-label" for="bali">
                                Bali
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jakarta"
                                id="jakarta">
                            <label class="form-check-label" for="jakarta">
                                Jakarta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="24-jam" id="24-jam">
                            <label class="form-check-label" for="24-jam">
                                Aceh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="semarang" id="semarang">
                            <label class="form-check-label" for="semarang">
                                Semarang
                            </label>
                        </div>
                        {{-- Lokasi --}}
                        <hr>
                        {{-- fasilitas --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Fasilitas</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kursi-roda" id="akses-kursi-roda">
                            <label class="form-check-label" for="akses-kursi-roda">
                                Akses kursi roda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="toilet-tinggi" id="toilet-tinggi">
                            <label class="form-check-label" for="toilet-tinggi">
                                Toilet Tinggi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lift" id="lift">
                            <label class="form-check-label" for="lift">
                                Lift
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="westafel-rendah"
                                id="westafel-rendah">
                            <label class="form-check-label" for="westafel-rendah">
                                Wastafel rendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="antar-jemput" id="antar-jemput">
                            <label class="form-check-label" for="antar-jemput">
                                Antar jemput bandara
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kamarmandi-luas"
                                id="kamarmandi-luas">
                            <label class="form-check-label" for="kamarmandi-luas">
                                Kamar mandi luas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="24-jam" id="24-jam">
                            <label class="form-check-label" for="24-jam">
                                Resepsionis 24 jam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="restoran" id="restoran">
                            <label class="form-check-label" for="restoran">
                                Restoran
                            </label>
                        </div>
                        {{-- fasilitas --}}

                        {{-- button resset & terapkan --}}
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button class="btn btn-outline-secondary border-0 me-md-2" type="button">Reset</button>
                            <button class="btn btn-primary border-0" type="button"
                                style="border-radius: 12px; background-color:#244D64">Terapkan</button>
                        </div>
                        {{-- button resset & terapkan --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-8 ps-4">
                <div class="row mb-3 mt-1">
                    {{-- filter terdekat --}}
                    <div class="col-sm-2 d-grid">
                        <p class="my-auto" style="font-weight: 500; font-size:20px; color:#244D64">Urutkan : </p>
                    </div>
                    <div class="col-sm-10 ms-0">
                        <input type="radio" class="btn-check" name="options-outlined" id="terdekat"
                            autocomplete="off">
                        <label class="btn btn-outline me-4" for="terdekat"
                            style="color:#244D64; border-color:#244D64; border-radius: 12px; font-size: 16px">Terdekat</label>
                        <input type="radio" class="btn-check" name="options-outlined" id="paling-disukai"
                            autocomplete="off">
                        <label class="btn btn-outline mx-4" for="paling-disukai"
                            style="color:#244D64; border-color:#244D64; border-radius: 12px; font-size: 16px">Paling
                            Disukai</label>
                        <input type="radio" class="btn-check" name="options-outlined" id="harga-terendah"
                            autocomplete="off">
                        <label class="btn btn-outline mx-4" for="harga-terendah"
                            style="color:#244D64; border-color:#244D64; border-radius: 12px; font-size: 16px">Harga
                            Terendah</label>
                        <input type="radio" class="btn-check" name="options-outlined" id="harga-tertinggi"
                            autocomplete="off">
                        <label class="btn btn-outline ms-4" for="harga-tertinggi"
                            style="color:#244D64; border-color:#244D64; border-radius: 12px; font-size: 16px">Harga
                            Tertinggi</label>
                    </div>
                    {{-- filter terdekat --}}
                </div>
                {{-- list hotel --}}
                @foreach ($hotel as $htl)
                    <div class="card mb-3 border-0 shadow-lg" style="border-radius: 12px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/storage/uploads/{{ $htl->ht_thumbnail }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p style="font-weight: 600; font-size: 20px;">{{ $htl->ht_name }}</p>
                                            <p style="font-weight: 400; font-size: 14px;">{{ $htl->ht_address }}</p>
                                            <a href="">Tunjukan di peta</a>
                                        </div>
                                        <div class="col-4">
                                            <p>bintang</p>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        fasilitas
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            
                                        </div>
                                        <div class="col-6">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="{{ route('/hotel/show', $htl->id) }}"
                                                class="btn btn-primary border-0" type="button"
                                                style="border-radius: 12px; background-color:#244D64">Lihat detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- list hotel --}}
            </div>
        </div>
        {{-- list hotel & filter --}}
    </div>

    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <h4 class="text-center card-header">Hotel Menu </h2>
                        <div class="card-body">

                            <label>Point Of Interest</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="show-poi"
                                    name="show-poi">
                                <label class="form-check-label" for="show-poi">Munculkan Point of Interest </label>
                            </div>
                            <div id="style-selector-control" class="map-control">
                                <input class="form-check-input" type="radio" name="hide-poi" id="hide-poi" checked />
                                <label for="hide-poi">Hide</label>
                                <input class="form-check-input" type="radio" name="show-poi" id="show-poi" />
                                <label for="show-poi">Show</label>
                            </div>

                            <div id="map" style="height: 500px;">INI MAP</div>

                            <script src="{{ asset('js/maps.js') }}"></script>
                            <script src="{{ asset('js/markercluster.js') }}"></script>
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                            </script>
                            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                            </script>

                            @foreach ($hotel as $data)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nama Hotel</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->ht_name }}</td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('/hotel/show', $data->id) }}">Show</a>
                                                {{-- <form action="{{ route('/favourites/store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fv_user_id" name="fv_user_id" value="{{ Auth::user()->id }}" hidden>
                                            <input type="text" class="form-control" id="fv_hotel_id" name="fv_hotel_id" value="{{ $data->id }}" hidden>
                                            <input type="text" class="form-control" id="fv_hotel_name" name="fv_hotel_name" value="{{ $data->ht_name }}" hidden>
                                            <input type="text" class="form-control" id="fv_count" name="fv_count" value="1" hidden>
                                        </div>
                                        <br>
                                        <button href="submit" class="btn btn-dark">Tambah ke Favorit</button>
                                        </form> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
