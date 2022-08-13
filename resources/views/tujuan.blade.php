@extends('layouts.app')

@section('content')
<div class="container my-auto">
    <div class="row">
        <div class="col" style="text-align: left">
            <h1 style="font-weight: 700; font-size: 32px; color: #47A2D6;">Tujuan</h1>
            <h2 class="mt-5" style="font-weight: 500; font-size: 24px; color: #47A2D6;">Visi</h2>
            <p style="font-weight: 400; font-size: 16px; color: #1C262C;">Meningkatkan aksesibilitas dalam pemerolehan
                informasi wisata aksesibel bagi penyandang disabilitas. </p>
            <h2 class="mt-5" style="font-weight: 500; font-size: 24px; color: #47A2D6;">Misi</h2>
            <ul>
                <li style="font-weight: 400; font-size: 16px; color: #1C262C;">Menciptakan website yang mudah diakses baik
                    bagi penyandang disabilitas maupun non-disabilitas.</li>
                <li style="font-weight: 400; font-size: 16px; color: #1C262C;">Memberikan kenyamanan bagi penyandang
                    disabilitas dalam berwisata</li>
                <li style="font-weight: 400; font-size: 16px; color: #1C262C;">Menciptakan wisata inklusif baik bagi siapapun
                    dengan kondisi siapapun</li>
            </ul>
        </div>
        <div class="col" style="text-align: right">
            <img src="{{ URL::asset('/img/bg-tujuan.png') }}" alt="">
        </div>
    </div>
</div>
@endsection
