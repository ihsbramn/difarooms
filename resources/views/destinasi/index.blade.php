@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mx-10 mt-5">
            <div class="col text-center">
                <h2>Destinasi</h2>
                <h3 class="mt-5 subtitle">Temukan pilihan destinasi menarik bagi Anda dan keluarga</h3>
                <div class="col-12">
                    <div class="mb-3 mt-5">
                        <input type="text" class="form-control form-control-lg mx-auto" id="searchdestinasi"
                            placeholder="Cari kota" style="max-width: 727px">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-5 mt-3 mb-5">
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
        <div class="row">
            <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 379px; overflow:hidden">
                <img src="{{ URL::asset('/img/foot-dest.png') }}" class="card-img" alt="background">
                <div class="card-img-overlay d-flex">
                    <div class="container my-auto">
                        <h1 style="font-size: 40px; font-weight:700">Temukan pilihan<br>destinasi wisata lainnya
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
