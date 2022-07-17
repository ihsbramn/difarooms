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
                        <a class="card border-0" href="{{ '/destinasi/bandung' }}">
                            <img src="{{ URL::asset('/img/dest-bd.png') }}" class="dest-card" alt="bandung">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bandung</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/yogya' }}">
                            <img src="{{ URL::asset('/img/dest-yg.png') }}" class="dest-card" alt="yogyakarta">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Yogyakarta</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/malang' }}">
                            <img src="{{ URL::asset('/img/dest-ml.png') }}" class="dest-card" alt="malang">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Malang</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/jakarta' }}">
                            <img src="{{ URL::asset('/img/dest-jkt.png') }}" class="dest-card" alt="jakarta">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Jakarta</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bali' }}">
                            <img src="{{ URL::asset('/img/dest-bl.png') }}" class="dest-card" alt="bali">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bali</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/lombok' }}">
                            <img src="{{ URL::asset('/img/dest-lb.png') }}" class="dest-card" alt="lombok">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Lombok</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/manado' }}">
                            <img src="{{ URL::asset('/img/dest-md.png') }}" class="dest-card" alt="manado">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Manado</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/solo' }}">
                            <img src="{{ URL::asset('/img/dest-sl.png') }}" class="dest-card" alt="solo">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Solo</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bogor' }}">
                            <img src="{{ URL::asset('/img/dest-bgr.png') }}" class="dest-card" alt="bogor">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bogor</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/batam' }}">
                            <img src="{{ URL::asset('/img/dest-btm.png') }}" class="dest-card" alt="batam">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Batam</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/padang' }}">
                            <img src="{{ URL::asset('/img/dest-pdg.png') }}" class="dest-card" alt="Padang">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Padang</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/makassar' }}">
                            <img src="{{ URL::asset('/img/dest-mks.png') }}" class="dest-card" alt="Makassar">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Makassar</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/rajaampat' }}">
                            <img src="{{ URL::asset('/img/dest-ra.png') }}" class="dest-card" alt="Raja Ampat">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Raja Ampat</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/surabaya' }}">
                            <img src="{{ URL::asset('/img/dest-sby.png') }}" class="dest-card" alt="Surabaya">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Surabaya</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/semarang' }}">
                            <img src="{{ URL::asset('/img/dest-smg.png') }}" class="dest-card" alt="Semarang">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Semarang</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/aceh' }}">
                            <img src="{{ URL::asset('/img/dest-ach.png') }}" class="dest-card" alt="Aceh">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Aceh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/palembang' }}">
                            <img src="{{ URL::asset('/img/dest-plg.png') }}" class="dest-card" alt="Palembang">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Palembang</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/kudus' }}">
                            <img src="{{ URL::asset('/img/dest-kds.png') }}" class="dest-card" alt="Kudus">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Kudus</h5>
                            </div>
                        </a>
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
