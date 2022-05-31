@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col px-0">
                <div class="card bg-dark text-white rounded-0">
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

                {{-- carousel hotel --}}
                <div class="container-fluid" style="background-color: #E5F4F6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Rekomendasi</h2>
                            <p>Penginapan aksesibel terbaik</p>
                        </div>
                        <div class="col-sm-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row row-cols-1 row-cols-md-3 px-5 px-5">
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row row-cols-1 row-cols-md-3 px-5">
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row row-cols-1 row-cols-md-3 px-5">
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content. This content is a little bit longer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <img src="..." class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a longer card with supporting text below as a
                                                            natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- carousel hotel --}}

                {{-- fasilitas aksesibel --}}
                <div class="container">
                    <div class="row my-5">
                        <div class="col-sm-6">
                            <h2>Fasilitas aksesibel</h2>
                            <p>Penginapan yang aksesibel dengan segala fasilitas <br> yang Anda butuhkan tersedia disini. Temukan <br> akomodasi yang sesuai dengan kebutuhan Anda.</p>
                            <a class="btn btn-primary" href="" type="button">Jelajahi</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="row row-cols-1 row-cols-md-3 g-5">
                                <div class="col">
                                  <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                {{-- fasilitas aksesibel --}}

                {{-- diskusi --}}
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="{{ URL::asset('/img/bg-diskusi.png') }}" class="card-img" alt="background">
                    <div class="card-img-overlay d-flex">
                        <div class="container my-auto">
                            <h2>Ingin diskusi?</h2>
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
