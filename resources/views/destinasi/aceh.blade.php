@extends('layouts.app')

@section('head')
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(71, 162, 214, 1);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- header --}}
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 467px; overflow:hidden">
                    <img src="{{ URL::asset('/img/bg-ach.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Aceh
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-10 mt-5">
            {{-- breadcrumb navigation --}}
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}"
                                style="text-decoration: none;font-weight: 500; font-size: 14px; color: #47A2D6;">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ '/destinasi' }}"
                                style="text-decoration: none; font-weight: 500; font-size: 14px; color: #47A2D6;">Destinasi</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Aceh</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Aceh</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Aceh (abjad Jawoë: اچيه دارالسلام) adalah
                    sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi
                    di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh
                    terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil
                    sensus Badan Pusat Statistik tahun 2020, jumlah penduduk provinsi ini sekitar 5.274.871 jiwa.
                    Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh
                    berbatasan dengan Teluk Benggala di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di
                    sebelah timur, dan Sumatra Utara di sebelah tenggara dan selatan.
                    <br><br>
                    Aceh dianggap sebagai tempat dimulainya penyebaran Islam di Indonesia dan memainkan peran penting dalam
                    penyebaran Islam di Asia Tenggara. Pada awal abad ke-17, Kesultanan Aceh adalah negara terkaya, terkuat,
                    dan termakmur di kawasan Selat Malaka. Sejarah Aceh diwarnai oleh kebebasan politik dan penolakan keras
                    terhadap kendali orang asing, termasuk bekas penjajah Belanda dan pemerintah Indonesia. Jika
                    dibandingkan dengan dengan provinsi lainnya, Aceh adalah wilayah yang sangat konservatif (menjunjung
                    tinggi nilai agama). Persentase penduduk Muslim-nya adalah yang tertinggi di Indonesia dan mereka
                    hidup sesuai syariah Islam. Berbeda dengan kebanyakan provinsi lain di Indonesia, Aceh memiliki
                    otonomi yang diatur tersendiri karena alasan sejarah.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/ach-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/ach-2.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/ach-3.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="card bg-dark text-white rounded-0 border-0" style="max-height: 379px; overflow:hidden">
                <img src="{{ URL::asset('/img/ft-bdg.png') }}" class="card-img" alt="background">
                <div class="card-img-overlay d-flex">
                    <div class="container my-auto">
                        <h1 style="font-size: 40px; font-weight:700">Penginapan terbaik ada disini
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
