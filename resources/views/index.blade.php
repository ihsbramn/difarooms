@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-beranda.png') }}" class="card-img" alt="background"
                        height="567px">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h1 style="font-size: 40px; font-weight:800">Jelajahi Hidupmu, <br> Pergi Kemanapun Anda Mau
                            </h1>
                            <p style="font-size: 20px; font-weight:300">Kami menyediakan berbagai informasi hotel dengan
                                segala aksesibilitasnya <br> yang akan memudahkan Anda</p>
                            <form class="row g-2">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="search" placeholder="Mau kemana?"
                                        style="background-color: #D6D6D6">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary mb-3"
                                        style="background-color: #244D64; border-color:#244D64">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- destinasi kota (card) --}}
                <div class="container-xxl">
                    <div class="row mt-5 mb-5">
                        <div class="col-sm-12 text-center mt-3" style="color:#00A3FF">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Mau kemana hari ini?</h2>
                            <p style="font-weight: 400; font-size: 24px;">Jangan khawatir dengan kekuranganmu, banyak tempat
                                untukmu</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="row row-cols-1 row-cols-md-3 g-5">
                                <div class="col">
                                    <a class="card bg-transparent text-white border-0" href="{{ '/destinasi/bandung' }}">
                                        <img src="{{ URL::asset('/img/bandung-icon.png') }}" class="card-img-top"
                                            alt="icon kota bandung" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bandung</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card bg-transparent text-white border-0 rounded">
                                        <img src="{{ URL::asset('/img/yogya-icon.png') }}" class="card-img-top"
                                            alt="icon kota yogyakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Yogyakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-transparent text-white border-0 rounded">
                                        <img src="{{ URL::asset('/img/malang-icon.png') }}" class="card-img-top"
                                            alt="icon kota malang" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Malang</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-transparent text-white border-0 rounded">
                                        <img src="{{ URL::asset('/img/jakarta-icon.png') }}" class="card-img-top"
                                            alt="icon kota jakarta" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-transparent text-white border-0 rounded">
                                        <img src="{{ URL::asset('/img/bali-icon.png') }}" class="card-img-top"
                                            alt="icon kota bali" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Bali</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-transparent text-white border-0 rounded">
                                        <img src="{{ URL::asset('/img/lombok-icon.png') }}" class="card-img-top"
                                            alt="icon kota lombok" style="border-radius: 12px">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title position-absolute bottom-0 start-20"
                                                style="font-weight: 700; font-size: 24px;">Lombok</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- destinasi kota (card) --}}

                {{-- tentang kami --}}
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="col">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Tentang kami</h2>
                            <p style="font-weight: 500; font-size: 24px; color: #00A3FF;">DifaRooms menyajikan pilihan
                                wisata yang menarik di Indonesia</p>
                            <p style="font-weight: 400; font-size: 16px; color: #00A3FF;">Kami telah memilih destinasi
                                wisata yang menarik untuk Anda kunjungi bersama keluarga, kerabat, dan rekan kerja Anda.
                                Liburan akan terasa lebih mudah dan aksesibel. Wisata inklusif bagi siapapun dan kondisi
                                apapun yang dapat memuaskan Anda.</p>
                            <a type="button" class="" href="">Baca Lagi</a>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
                {{-- tentang kami --}}

                {{-- destinasi populer --}}
                <div class="container-fluid" style="background-color: #DDF3FF">
                    <div class="row mt-5 mb-5">
                        <div class="col-6">
                            <h3 class="mb-3">Carousel cards title </h3>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-primary mb-3 mr-1" type="button" data-target="#carouselExampleControls" data-bs-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" type="button" data-target="#carouselExampleControls" data-bs-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural
                                                            lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- destinasi populer --}}

                {{-- map --}}
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="col-9">

                        </div>
                        <div class="col-3">
                            <h2 style="font-weight: 700; font-size: 32px; color: #00A3FF;">Temukan destinasi disekitarmu</h2>
                            <p style="font-weight: 500; font-size: 24px; color: #00A3FF;">Tempat menarik untuk Anda kunjungi akan terlihat disini</p>
                            <a href="">Lihat Peta</a>
                        </div>
                    </div>
                </div>
                {{-- map --}}

                {{-- diskusi --}}
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-diskusi.png') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h2 style="font-weight: 700; font-size: 36px;">Kamu tidak sendirian,<br>ruang untukmu</h2>
                            <a class="btn btn-primary" href="" type="button">Lanjut</a>
                        </div>
                    </div>
                </div>
                {{-- diskusi --}}

                @if (Auth::check())
                    <div class="card">
                        <div class="card-header">{{ __('Greetings 😁') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <p>Welcome {{ Auth::user()->name }}</p>
                            @if (Auth::user()->is_admin == 1)
                                <a class="btn btn-light" href="{{ 'admin' }}">Menu Admin</a>
                            @endif
                            <a class="btn btn-light" href="{{ 'hotel' }}">Menu Hotel</a>
                            <a class="btn btn-light" href="{{ 'forum' }}">Menu Forum</a>
                        </div>
                    </div>
            </div>
        </div>
    @else
        @endif
    </div>
@endsection
