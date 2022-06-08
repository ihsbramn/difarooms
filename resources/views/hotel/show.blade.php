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

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-sm-7">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            
                        </div>
                        <div class="col">
                            Column
                        </div>
                        <div class="col">
                            Column
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <p id="ht_key" hidden>{{ $hotel->ht_key }}</p>
                <div class="row">
                    {{-- map --}}
                    {{-- <div class="mt-5 mb-5 shadow" id="map" style="height: 292px; border-radius:12px">INI MAP</div>

                    <script src="{{ asset('js/maps.js') }}"></script>
                    <script src="{{ asset('js/markercluster.js') }}"></script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                    </script>
                    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
                    </script> --}}
                    {{-- map --}}
                    <iframe src="{{ $hotel->ht_embedmaps }}" class="mt-5 mb-5 shadow" style="height: 292px; border-radius:12px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <br>
        {{-- @foreach ($rates as $rt )
        <div class="row">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $rt->name }}</p>
                        <p id="usd_price" hidden>{{ $rt->rate }}</p>
                        <p id="idr_price">Rate harga : </p>
                </div> 
            </div>
        </div>            
        @endforeach --}}
    </div>
    {{-- header --}}
@endsection
@section('lower_body')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/hotelprice.js') }}"></script>
@endsection
