@extends('layouts.app')

@section('head')
    {{-- search --}}
    <script>
        function search_hotel() {
            let input = document.getElementById('searchbar').value;
            input = input.toLowerCase();
            let x = document.getElementsByClassName('hotels');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "initial";
                }
            }
        }

        function filter_hotel() {
            let input = document.querySelector('input[name="akses"]:checked').value;
            input = input.toLowerCase();
            let x = document.getElementsByClassName('hotels');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "initial";
                }
            }
        }

        function filter_aksesibilitas() {
            let input = document.querySelector('input[name="aksesibilitas"]:checked').value;
            input = input.toLowerCase();
            let x = document.getElementsByClassName('hotels');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "initial";
                }
            }
        }

        function reset() {
            var res = document.getElementsByName('aksesibilitas');
            for (var i = 0; i < res.length; i++) {
                if (res[i].type == 'checkbox')
                    res[i].checked = false;
            }

            var semua = document.getElementById('semua');
            for (var i = 0; i < semua.length; i++) {
                if (semua[i].type == 'radio')
                    semua[i].checked = true;
            }

            let input = " ";
            input = input.toLowerCase();
            let x = document.getElementsByClassName('hotels');
            for (i = 0; i < x.length; i++) {
                if (x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "initial";
                }
            }
        }
    </script>
@endsection

@section('up_body')
@endsection

{{-- marker maps --}}
@section('lower_body')
    <script>
        var locations = {{ Js::from($marker) }};
    </script>
    <script src="{{ asset('js/maps.js') }}"></script>
    <script src="{{ asset('js/markercluster.js') }}"></script>
@endsection
{{-- marker maps --}}

@section('content')
    {{-- header hotel --}}
    <div class="container-fluid px-0">
        <div class="card bg-dark text-center text-white rounded-0 border-0" style="max-height: 467px; overflow: hidden;">
            <img src="{{ URL::asset('/img/bg-hotel.png') }}" class="card-img" alt="background">
            <div class="card-img-overlay d-flex">
                <div class="container my-auto">
                    <h1 class="align-self-center mx-auto" style="font-weight: 700; font-size: 96px">Hotel</h1>
                    <div class="input-group pt-5">
                        <input type="text" class="form-control border-0" placeholder="Cari hotel" aria-label="Cari hotel"
                            id="searchbar" aria-describedby="search-hotel" style="background-color: #D9D9D9"
                            onkeyup="search_hotel()" name="searchbar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header hotel --}}

    <div class="container">
        {{-- map --}}
        <div class="card border-0 shadow p-2 mt-3 mb-5" style="border-radius: 12px;">
            <div class="shadow-sm" id="map2" style="height: 318px;border-radius:12px;">INI MAP</div>
            {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}"></script> --}}
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            <div class="row mt-3">
                <div class="col-2 my-auto">
                    <p class="mb-0" style="font-weight: 700; font-size: 20px;">Point Of Interest</p>
                </div>
                <div class="col-10">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btn-radio" id="hide-poi" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="hide-poi">Hide</label>

                        <input type="radio" class="btn-check" name="btn-radio" id="show-poi" autocomplete="off">
                        <label class="btn btn-outline-primary" for="show-poi">Show</label>
                    </div>
                </div>
            </div>
        </div>
        {{-- map --}}

        {{-- list hotel & filter --}}
        <div class="row">
            <div class="col-sm-4">
                {{-- filter --}}
                <div class="card border-0 shadow p-3 mb-5" style="border-radius:12px">
                    <div class="card-body p-2">
                        <h3 class="card-tittle" style="font-weight: 700; font-size:20px">Filter</h3>
                        {{-- kelas --}}
                        {{-- <h3 class="card-subtittle mt-4" style="font-weight: 600; font-size: 16px">Kelas Hotel</h3>
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
                        </div> --}}
                        {{-- kelas --}}
                        <hr>
                        {{-- harga --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Harga</h3>
                        <div class="input-group">
                            <input type="text" class="form-control border-0" aria-label="IDR amount"
                                placeholder="Harga minimum" style="background-color: #EAEAEA;" id="pricemin">
                            <span class="input-group-text border-0">Rp</span>
                        </div>
                        <div class="input-group pt-3">
                            <input type="text" class="form-control border-0" aria-label="IDR amount"
                                placeholder="Harga maksimum" style="background-color: #EAEAEA;" id="pricemax">
                            <span class="input-group-text border-0">Rp</span>
                        </div>
                        {{-- harga --}}
                        <hr>
                        {{-- Lokasi --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Lokasi</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="" id="semua" name="akses"
                                onclick="filter_hotel()" checked>
                            <label class="form-check-label" for="semua">
                                Semua
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="bandung" id="bandung" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="bandung">
                                Bandung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="yogyakarta" id="Yogyakarta" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="Yogyakarta">
                                Yogyakarta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="malang" id="malang" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="malang">
                                Malang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="solo" id="solo" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="solo">
                                Solo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="bali" id="bali" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="bali">
                                Bali
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="jakarta" id="jakarta"
                                name="akses" onclick="filter_hotel()">
                            <label class="form-check-label" for="jakarta">
                                Jakarta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="aceh" id="aceh" name="akses"
                                onclick="filter_hotel()">
                            <label class="form-check-label" for="aceh">
                                Aceh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="semarang" id="semarang"
                                name="akses" onclick="filter_hotel()">
                            <label class="form-check-label" for="semarang">
                                Semarang
                            </label>
                        </div>
                        {{-- Lokasi --}}
                        <hr>
                        {{-- fasilitas --}}
                        <h3 class="card-subtittle" style="font-weight: 600; font-size: 16px">Fasilitas</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="antar jemput" id="aksesibilitas"
                                name="aksesibilitas" onclick="filter_aksesibilitas()">
                            <label class="form-check-label" for="akses-kursi-roda">
                                Antar jemput bandara
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="toilet dengan" id="aksesibilitas"
                                name="aksesibilitas" onclick="filter_aksesibilitas()">
                            <label class="form-check-label" for="toilet-tinggi">
                                Toilet dengan pegangan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="akses kursi" id="aksesibilitas"
                                name="aksesibilitas" onclick="filter_aksesibilitas()">
                            <label class="form-check-label" for="lift">
                                Akses kursi roda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kamar mandi" id="aksesiibilitas"
                                name="aksesibilitas" onclick="filter_aksesibilitas()">
                            <label class="form-check-label" for="westafel-rendah">
                                Kamar mandi luas
                            </label>
                        </div>
                        {{-- fasilitas --}}

                        {{-- button resset & terapkan --}}
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button class="btn btn-outline-secondary border-0 me-md-2" type="button" value="" id="aksesiibilitas"
                                onclick="reset()">Reset</button>
                            <button class="btn btn-primary border-0" type="button"
                                style="border-radius: 12px; background-color:#244D64"
                                onclick="filter_harga()">Terapkan</button>
                            <script>
                                function filter_harga() {
                                    let input = document.getElementById('pricemin').value;
                                    input = input.toLowerCase();
                                    let input2 = document.getElementById('pricemax').value;
                                    input2 = input2.toLowerCase();
                                    let x = document.getElementsByClassName('hotels');

                                    for (i = 0; i < x.length; i++) {
                                        if (x[i].innerHTML >= input && x[i].innerHTML <= input2) {
                                            x[i].style.display = "none";
                                        } else {
                                            x[i].style.display = "initial";
                                        }
                                    }
                                }
                            </script>
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
                @foreach ($hotel as $index => $htl)
                    <div class="hotels">
                        <div class="card mb-3 border-0 shadow-lg" style="border-radius: 12px; height: 290px;">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-height: 290px; overflow: hidden; border-radius: 12px;">
                                    <img src="/storage/uploads/{{ $htl->ht_thumbnail }}" class="img-fluid p-2"
                                        alt="thumbnail hotel"
                                        style="height: 290px; width: 100%; overflow:hidden; border-radius: 20px;">
                                    <div class="card-img-overlay">
                                        @auth
                                            <form action="{{ route('/favourites/store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fv_user_id"
                                                        name="fv_user_id" value="{{ Auth::user()->id }}" hidden>
                                                    <input type="text" class="form-control" id="fv_hotel_id"
                                                        name="fv_hotel_id" value="{{ $htl->id }}" hidden>
                                                    <input type="text" class="form-control" id="fv_hotel_name"
                                                        name="fv_hotel_name" value="{{ $htl->ht_name }}" hidden>
                                                    <input type="text" class="form-control" id="fv_count"
                                                        name="fv_count" value="1" hidden>
                                                </div>
                                                <button href="submit" class="btn btn-secondary rounded-circle border-0"
                                                    style="background: rgba(36, 36, 36, 0.54);" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-class="tooltip"
                                                    title="Favoritkan hotel ini">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                        <path
                                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <script>
                                                    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                                                    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
                                                </script>
                                            </form>
                                        @endauth
                                        @guest
                                            <button onclick="like()" class="btn btn-secondary rounded-circle"
                                                style="background: rgba(36, 36, 36, 0.54);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <script>
                                                function like() {
                                                    alert("Harap login terlebih dahulu");
                                                }
                                            </script>
                                        @endguest
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0" style="font-weight: 600; font-size: 20px;">
                                                    {{ $htl->ht_name }}</p>
                                                <p class="mb-0" style="font-weight: 400; font-size: 14px;"><i
                                                        class="bi bi-geo-alt-fill me-2"></i>{{ $htl->ht_address }}</p>
                                            </div>
                                            <div class="col-4 text-end">
                                                @if ($htl->ht_accesible == 'Ya')
                                                    <p style="font-weight: 600; font-size: 18px; color: #004973;"><span
                                                            class="iconify" data-icon="map:wheelchair"></span>Aksesibel
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            @foreach ($hotel_fascility as $fas)
                                                @if ($fas->ht_id == $htl->id)
                                                    @if ($fas->antarjemput == '1')
                                                        <div class="col">
                                                            <p class="mb-0" style="font-weight: 400; font-size: 18px;">
                                                                <span class="iconify me-2"
                                                                    data-icon="fa6-solid:car"></span>Antar jemput bandara
                                                            </p>
                                                        </div>
                                                    @endif

                                                    @if ($fas->toilet_pegangan == '1')
                                                        <div class="col">
                                                            <p class="mb-0" style="font-weight: 400; font-size: 18px;">
                                                                <span class="iconify me-2"
                                                                    data-icon="fa-solid:toilet"></span>Toilet dengan
                                                                pegangan
                                                            </p>
                                                        </div>
                                                    @endif

                                                    @if ($fas->akses_kursiroda == '1')
                                                        <div class="col">
                                                            <p class="mb-0" style="font-weight: 400; font-size: 18px;">
                                                                <span class="iconify me-2"
                                                                    data-icon="fa6-solid:wheelchair"></span>Akses kursi
                                                                roda
                                                            </p>
                                                        </div>
                                                    @endif

                                                    <div class="col">
                                                        @if ($fas->kamarmandi_luas == '1')
                                                            <p class="mb-0" style="font-weight: 400; font-size: 18px;">
                                                                <span class="iconify me-2"
                                                                    data-icon="fa6-solid:bath"></span>Kamar mandi luas
                                                            </p>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                {{-- @foreach ($idr_rates as $idr) --}}
                                                <p class="mb-0"
                                                    style="font-weight: 500; font-size: 20px; color: #47A2D6;">
                                                    @money($idr_rates[$index]['rate'])</p>
                                                {{-- @endforeach --}}
                                            </div>
                                            <div class="col-6 my-auto">
                                                {{-- @if ($idr_rates[$index]['name'] = 'booking.com') --}}
                                                @if ($idr_rates[$index]['name'] == 'Booking.com')
                                                    <img src="{{ URL::asset('/img/bookingcom-logo.png') }}"
                                                        alt="logo booking.com">
                                                @elseif ($idr_rates[$index]['name'] == 'Agoda.com')
                                                    <img src="{{ URL::asset('/img/agoda-logo.png') }}"
                                                        alt="logo agoda.com" style="max-height: 24px; overflow:hidden">
                                                @elseif ($idr_rates[$index]['name'] == 'FindHotel')
                                                    <img src="{{ URL::asset('/img/findhotel-logo.svg') }}"
                                                        alt="logo findhtotel.com"
                                                        style="max-height: 24px; overflow:hidden">
                                                @elseif ($idr_rates[$index]['name'] == 'Expedia')
                                                    <img src="{{ URL::asset('/img/expedia-logo.png') }}"
                                                        alt="logo expedia.com" style="max-height: 24px; overflow:hidden">
                                                @elseif ($idr_rates[$index]['name'] == 'Hotels.com')
                                                    <img src="{{ URL::asset('/img/hotelcom-logo.png') }}"
                                                        alt="logo hotel.com" style="max-height: 24px; overflow:hidden">
                                                @elseif ($idr_rates[$index]['name'] == 'Trip.com')
                                                    <img src="{{ URL::asset('/img/tripcom-logo.png') }}"
                                                        alt="logo trip.com" style="max-height: 24px; overflow:hidden">
                                                @else
                                                    <p class="mb-0"
                                                        style="font-weight: 500; font-size: 20px; color: #000000;">
                                                        {{ $idr_rates[$index]['name'] }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6 d-grid">
                                                @foreach ($fav as $fv)
                                                    @if ($fv->fv_hotel_id == $htl->id)
                                                        @if ($loop->first)
                                                            <p class="my-auto"
                                                                style="font-weight: 500; font-size: 16px; color: #515151;">
                                                                Disukai {{ $loop->count }} orang</p>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-6 position-absolute bottom-0 end-0"
                                                style="margin-bottom: 14px">
                                                <div class="row row-cols-auto justify-content-md-end">
                                                    <div class="col text-end my-auto">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('/hotel/show', $htl->id) }}"
                                                            style="background: #47A2D6; border-radius: 12px; font-weight: 600; font-size: 16px; border-color: #47A2D6;">Lihat
                                                            detail</a>
                                                    </div>
                                                </div>
                                            </div>
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

        {{-- pagination tab --}}
        <nav aria-label="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item  ">
                    {{ $hotel->links() }}
                </li>
            </ul>
        </nav>
        {{-- pagination tab --}}

    </div>
@endsection
