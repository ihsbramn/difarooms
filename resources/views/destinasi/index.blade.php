@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mx-10 mt-5">
            <div class="col text-center">
                <h1 style="font-weight: 700; font-size: 32px; color: #47A2D6;">Destinasi</h1>
                <p class="mt-4 subtitle">Temukan destinasi wisata inklusif di berbagai kota menarik</p>
                
                {{-- search bar --}}
                <div class="col-12">
                    <div class="mb-3 mt-5">
                        <input type="text" class="form-control form-control-lg mx-auto" id="searchbardestinasi"
                            placeholder="Cari kota" style="max-width: 727px" onkeyup="search_destinasi()" aria-label="search-bar-dest">
                    </div>
                </div>
                {{-- search bar --}}

                {{-- card list of destination --}}
                <div class="row row-cols-1 row-cols-md-3 g-5 mt-3 mb-5">
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bandung' }}">
                            <img src="{{ URL::asset('/img/dest-bd.png') }}" class="dest-card" alt="bandung">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bandung</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/yogya' }}">
                            <img src="{{ URL::asset('/img/dest-yg.png') }}" class="dest-card" alt="yogyakarta">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Yogyakarta</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/malang' }}">
                            <img src="{{ URL::asset('/img/dest-ml.png') }}" class="dest-card" alt="malang">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Malang</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/jakarta' }}">
                            <img src="{{ URL::asset('/img/dest-jkt.png') }}" class="dest-card" alt="jakarta">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Jakarta</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bali' }}">
                            <img src="{{ URL::asset('/img/dest-bl.png') }}" class="dest-card" alt="bali">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bali</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/lombok' }}">
                            <img src="{{ URL::asset('/img/dest-lb.png') }}" class="dest-card" alt="lombok">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Lombok</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/manado' }}">
                            <img src="{{ URL::asset('/img/dest-md.png') }}" class="dest-card" alt="manado">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Manado</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/solo' }}">
                            <img src="{{ URL::asset('/img/dest-sl.png') }}" class="dest-card" alt="solo">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Solo</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/bogor' }}">
                            <img src="{{ URL::asset('/img/dest-bgr.png') }}" class="dest-card" alt="bogor">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Bogor</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/batam' }}">
                            <img src="{{ URL::asset('/img/dest-btm.png') }}" class="dest-card" alt="batam">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Batam</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/padang' }}">
                            <img src="{{ URL::asset('/img/dest-pdg.png') }}" class="dest-card" alt="Padang">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Padang</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/makassar' }}">
                            <img src="{{ URL::asset('/img/dest-mks.png') }}" class="dest-card" alt="Makassar">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Makassar</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/rajaampat' }}">
                            <img src="{{ URL::asset('/img/dest-ra.png') }}" class="dest-card" alt="Raja Ampat">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Raja Ampat</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/surabaya' }}">
                            <img src="{{ URL::asset('/img/dest-sby.png') }}" class="dest-card" alt="Surabaya">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Surabaya</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/semarang' }}">
                            <img src="{{ URL::asset('/img/dest-smg.png') }}" class="dest-card" alt="Semarang">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Semarang</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/aceh' }}">
                            <img src="{{ URL::asset('/img/dest-ach.png') }}" class="dest-card" alt="Aceh">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Aceh</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/palembang' }}">
                            <img src="{{ URL::asset('/img/dest-plg.png') }}" class="dest-card" alt="Palembang">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Palembang</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col destinasi">
                        <a class="card border-0 zoom" href="{{ '/destinasi/kudus' }}">
                            <img src="{{ URL::asset('/img/dest-kds.png') }}" class="dest-card" alt="Kudus">
                            <div class="card-img-overlay grad dest-card">
                                <h2 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Kudus</h2>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- card list of destination --}}
            </div>
        </div>
    </div>

    {{-- banner --}}
    <div class="comtainer-fluid">
        <div class="card bg-dark text-white border-0 rounded-0" style="max-height: 379px; overflow: hidden;">
            <img src="{{ URL::asset('/img/foot-dest.png') }}" class="card-img" alt="banner">
            <div class="card-img-overlay" style="padding-inline: 7rem">
                <h3 class="card-title position-absolute top-50 start-20 translate-middle-y"
                    style="font-weight: 700;font-size: 36px;">Rasakan wisata inklusif <br>tanpa diskriminasi</h3>
            </div>
        </div>
    </div>
    {{-- banner --}}

    {{-- logical for search --}}
    <script>
        function search_destinasi() {
            let input = document.getElementById('searchbardestinasi').value
            input = input.toLowerCase();
            let x = document.getElementsByClassName('destinasi');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "initial";
                }
            }
        }
    </script>
    {{-- logical for search --}}

@endsection
