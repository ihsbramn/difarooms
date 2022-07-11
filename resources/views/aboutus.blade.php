@extends('layouts.about')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="text-start">
            <img src="{{ URL::asset('/img/about-us.png') }}" alt="">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col" style="z-index: 0;">
            <h2 style="font-weight: 700; font-size: 32px; color: #47A2D6;">Tentang kami</h2>
            <p class="mt-4" style="font-weight: 500; font-size: 24px; color: #47A2D6;">DifaRooms
                menyajikan pilihan
                wisata yang menarik di Indonesia</p>
            <p class="mt-4" style="font-weight: 400; font-size: 16px; color: #47A2D6;">Kami telah
                memilih
                destinasi
                wisata yang menarik untuk Anda kunjungi bersama keluarga, kerabat, dan rekan kerja Anda.
                Liburan akan terasa lebih mudah dan aksesibel. Wisata inklusif bagi siapapun dan kondisi
                apapun yang dapat memuaskan Anda.</p>
        </div>
        <div class="col-6 position-relative" style="z-index: 1;">
            <div class="position-absolute top-0 end-0">
                <img src="{{ URL::asset('/img/home-dot.png') }}" alt="assets dot" style="z-index: 0">
            </div>
            <div class="" style="top: 310px; left: -60px; position: absolute;">
                <img src="{{ URL::asset('/img/home-tk2.png') }}" alt="assets dot" style="z-index: 1">
            </div>
            <div class="" style="top: 40px; left: 130px;position: absolute;">
                <img src="{{ URL::asset('/img/home-tk1.png') }}" alt="assets dot" style="z-index: 2">
            </div>
        </div>
    </div>
</div>
@endsection