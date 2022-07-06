@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-asaf.png') }}" class="card-img" alt="background">
                </div>
            </div>
            <div class="col-12 px-0" style="background-color: #3B87B2">
                <h1>Asia Afrika</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi' }}">Destinasi</a></li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi/bandung' }}">Bandung</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Asia Afrika</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2>Galeri Foto</h2>
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/asia-afrika' }}">
                            <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="...">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                            </div>
                        </a>
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
                </div>
            </div>
            <div class="col-8">
                <p>Jalan Asia Afrika ini sangatlah bersejarah mulai dari banyak-nya bangunan yang di bangun dari Jaman penjajahan Belanda, maka banyak masyarakat yang berdatangan ke Jalan Asia Afrika ini hanya untuk berburu Foto, bahkan tidak warga Bandung saja, sampai luar pulau bahkan banyak Turis dari luar negeri datang ke Kota Bandung untuk Foto dan ingin tau sejarah yang ada.

                    Banyak bangunan bersejarah yang ada di Asia Afrika bangunan tersebut yaitu adalah Gedung Merdeka. Bukan hanya gedung Merdeka saja di sekitaran sebelum Gedung Merdeka pun ada gedung yang cukup ikonik yaitu Gedung De Vries.
                    
                    Sejarah
                    
                    Gedung Merdeka di Jalan Asia-Afrika ini merupakan gedung bersejarah yang menjadi saksi sejarah pertemuan Konferensi Tingkat Tinggi Asia-Afrika pada Tanggal 18-24 April Tahun 1955. Sebanyak 29 negara pada saat KTT mengirimkan perwakilan-nya dari masing – masing Negara. Tidak hanya itu, sekarang Gedung Merdeka ini juga di gunakan menjadi Museum yang menjadi tempat benda dan koleksi foto pada saat Konferensi Asia Afrika.</p>
            </div>
            <div class="col-4">
                map
            </div>
            <div class="col-12">
                <h2>Rekomendasi Lainnya</h2>
                <div class="row row-cols-1 row-cols-md-4 g-5">
                    <div class="col">
                        <a class="card border-0" href="{{ '/destinasi/bandung/asia-afrika' }}">
                            <img src="{{ URL::asset('/img/bd-asaf.png') }}" class="dest-card" alt="...">
                            <div class="card-img-overlay grad dest-card">
                                <h5 class="card-title position-absolute bottom-0 start-20"
                                    style="font-weight: 700; font-size: 24px; color: #ffffff">Asia Afrika</h5>
                            </div>
                        </a>
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
