@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row mx-10 mt-5">
        <div class="col text-center">
            <h2>Destinasi</h2>
            <h3 style="font-weight: 500; font-size: 24px;">Temukan pilihan destinasi menarik bagi Anda dan keluarga</h3>
            <div class="row row-cols-1 row-cols-md-3 g-5 mt-3">
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-rcupas.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Ranca Upas</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-flmarket.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Floating Market</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-gdsate.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Gedung Sate</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-tkperahu.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Tangkuban Perahu</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ URL::asset('/img/bd-fhlembang.png') }}" class="dest-card" alt="...">
                        <div class="card-img-overlay grad dest-card">
                            <h5 class="card-title position-absolute bottom-0 start-20"
                                style="font-weight: 700; font-size: 24px; color: #ffffff">Farmhouse Lembang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection