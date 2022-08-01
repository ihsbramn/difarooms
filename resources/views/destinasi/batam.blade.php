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
                    <img src="{{ URL::asset('/img/bg-btm.jpg') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex gradbg">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Nikmati indahnya Kota Batam
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
                            style="font-weight: 500; font-size: 14px; color: #47A2D6;">Batam</li>
                    </ol>
                </nav>
            </div>
            {{-- text content --}}
            <div class="col-12">
                <h2 style="font-weight: 700; font-size: 36px;color: #47A2D6;">Tempat Wisata di Batam</h2>
            </div>
            <div class="col-6 mt-3">
                <p style="font-weight: 400; font-size: 24px; text-align: justify;">Kota Batam adalah kota terbesar di
                    Provinsi Kepulauan Riau, Indonesia. Wilayah Kota Batam terdiri dari Pulau Batam, Pulau Rempang dan Pulau
                    Galang dan pulau-pulau kecil lainnya di kawasan Selat Singapura dan Selat Malaka. Pulau Batam, Rempang,
                    dan Galang terkoneksi oleh Jembatan Barelang. Menurut Dinas Kependudukan dan Catatan Sipil Kota Batam,
                    pada tahun 2021 jumlah penduduk Batam mencapai 1.193.088 jiwa, dengan kepadatan 1.153 jiwa/km². Kota
                    Batam merupakan bagian dari kawasan khusus perdagangan bebas Batam–Bintan–Karimun (BBK).
                    <br><br>
                    Batam merupakan salah satu kota dengan letak yang sangat strategis. Selain berada di jalur pelayaran
                    internasional, kota ini memiliki jarak yang sangat dekat dan berbatasan langsung dengan Singapura dan
                    Malaysia. Sebagai kota terencana, Batam merupakan salah satu kota dengan pertumbuhan terpesat di
                    Indonesia. Ketika dibangun pada tahun 1970-an oleh Otorita Batam (saat ini bernama BP Batam), kota ini
                    hanya dihuni sekitar 6.000 penduduk dan dalam tempo 40 tahun penduduk Batam bertumbuh hingga 158 kali
                    lipat.
                </p>
            </div>
            <div class="col-6 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/btm-1.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/btm-2.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ URL::asset('/img/btm-3.jpg') }}" class="card-img h-100" alt="foto kota bandung" style="border-radius: 12px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
