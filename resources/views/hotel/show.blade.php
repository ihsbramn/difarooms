@extends('layouts.app')
@section('content')
    {{-- header --}}
    <div class="container-fluid px-0">
        <div class="card bg-dark text-white rounded-0 border-0">
            <img src="{{ URL::asset('/img/bg-hotel.png') }}" class="card-img" alt="background" height="396px">
            <div class="card-img-overlay d-flex">
                <div class="container my-auto" style="max-width: 95%">
                    <h1 style="font-weight: 700; font-size: 64px">Crowne Plaza <br> Bandung</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="max-width: 95%">
        <div class="row">
            <div class="col-sm-7">
                <div class="row">
                    <div class="col">
                        Column
                    </div>
                    <div class="col">
                        Column
                    </div>
                    <div class="col">
                        Column
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    {{-- map --}}
                    <div class="mt-5 mb-5 shadow" id="map" style="height: 292px; border-radius:12px">INI MAP</div>

                    <script src="{{ asset('js/maps.js') }}"></script>
                    <script src="{{ asset('js/markercluster.js') }}"></script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                    </script>
                    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                    </script>
                    {{-- map --}}
                </div>
                <div class="row">
                    <div class="card shadow">
                        <h2 style="font-weight: 500; font-size:24px">Aksesibilitas</h2>
                        <hr>
                        <h2 style="font-weight: 500; font-size:24px">Fasilitas Hotel</h2>
                        <h2 style="font-weight: 500; font-size:24px">Kontak Hotel</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header --}}
@endsection
