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
                    {{-- <p style="text-align: justify">{{ $hotel->ht_description }}</p> --}}
                </div>
                <hr>
                <div class="row">
                    <h2>Tipe Kamar</h2>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- side --}}
            <div class="col-5">
                <div class="row">
                    <iframe src="{{ $hotel->ht_embedmaps }}" id="embed_maps" class="embed_maps mt-5 mb-5 shadow"
                        style="height: 292px; border-radius:12px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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

@endsection
