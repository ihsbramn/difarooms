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
                    <img src="{{ URL::asset('/img/bg-gili.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati alam Gili Trawangan
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Gili Trawangan</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Gili Trawangan</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Gili Trawangan adalah yang terbesar dari
                    ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. Trawangan juga satu-satunya
                    gili yang ketinggiannya di atas permukaan laut cukup signifikan. Dengan panjang 3 km dan lebar 2 km,
                    Trawangan berpopulasi sekitar 800 jiwa. Di antara ketiga gili tersebut, Trawangan memiliki fasilitas
                    untuk wisatawan yang paling beragam; kedai "Tîr na Nôg" mengklaim bahwa Trawangan adalah pulau terkecil
                    di dunia yang ada bar Irlandia-nya. Bagian paling padat penduduk adalah sebelah timur pulau ini.
                    <br>
                    <br>
                    Trawangan punya nuansa "pesta" lebih daripada Gili Meno dan Gili Air, karena banyaknya pesta sepanjang
                    malam yang setiap malamnya dirotasi acaranya oleh beberapa tempat keramaian. Aktivitas yang populer
                    dilakukan para wisatawan di Trawangan adalah scuba diving (dengan sertifikasi PADI), snorkeling (di
                    pantai sebelah timur laut), bermain kayak, dan berselancar. Ada juga beberapa tempat bagi para wisatawan
                    belajar berkuda mengelilingi pulau.
                    <br>
                    <br>
                    Di Gili Trawangan (begitu juga di dua gili yang lain), tidak terdapat kendaraan bermotor, karena tidak
                    diizinkan oleh aturan lokal. Sarana transportasi yang lazim adalah sepeda (disewakan oleh masyarakat
                    setempat untuk para wisatawan) dan cidomo, kereta kuda sederhana yang umum dijumpai di Lombok. Untuk
                    bepergian ke dan dari ketiga gili itu, penduduk biasanya menggunakan kapal bermotor dan speedboat.
                    <br>
                    <br>
                    Kelebihan Gili Trawangan dibandingkan dengan pantai lain adalah kita dapat menikmati sunset dan juga
                    sunrise sekaligus di pantai ini. Hal ini terjadi karena Gili Trawangan memiliki pantai yang menghadap
                    timur dan menghadap barat, dan jaraknya tidak terlalu jauh. Sehingga baik sunrise maupun sunset dapat
                    kita nikmati di pantai ini.
                    <br>
                    <br>
                    Di Gili Trawangan juga kita dapat melihat kesenian bela diri tradisional yang bernama presean atau stick
                    fighting yang biasanya dipertontonkan disekitar pasar seni Gili Trawangan. Kegiatan paling favorit dari
                    para wisatawan di Gili ini yaitu Scuba Diving, Snorkeling, bermain kayak, dan berselancar.</p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/gili-1.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/gili-2.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/gili-3.jpg') }}" class="card-img h-100" alt="foto kota bandung"
                                style="border-radius: 12px;">
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
