@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-bandung.png') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Bandung <br> dengan Bandros
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-10 mt-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi' }}">Destinasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bandung</li>
                    </ol>
                </nav>
            </div>
            <div class="col-6 mt-3">
                <h2>Tempat Wisata di Bandung</h2>
                <p>Berkunjung ke Kota Kembang akan kurang lengkap apabila Anda tidak singgah di tempat wisata Bandung yang
                    sedang hits akhir-akhir ini. Bandung sendiri memiliki berbagai atraksi alam yang menarik, destinasi
                    wisata kota-kota yang sarat akan pengetahuan, dan beragam wisata kuliner.
                    Selain menarik minat wisatawan dari luar kota atau bahkan mancanegara, Anda yang warga Bandung mungkin
                    belum tahu ada beberapa destinasi baru yang bisa Anda kunjungi bersama keluarga akhir pekan ini.</p>
            </div>
            <div class="col-6 mt-3">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl1.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl2.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <img src="{{ URL::asset('/img/bd-mtrl3.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <h2 class="mb-3">Wajib dikunjungi</h2>
                <div class="row row-cols-1 row-cols-md-3 g-5">
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
