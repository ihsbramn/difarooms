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
                    <div class="row my-5 d-flex">
                        <div class="col-sm-6 my-auto">
                            <h2>Fasilitas aksesibel</h2>
                            <p>Penginapan yang aksesibel dengan segala fasilitas <br> yang Anda butuhkan tersedia disini. Temukan <br> akomodasi yang sesuai dengan kebutuhan Anda.</p>
                            <a class="btn btn-primary" href="" type="button">Jelajahi</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="row row-cols-1 row-cols-md-3 g-5 text-center justify-content-md-center">
                                <div class="col">
                                  <div class="card">
                                      <div class="card-body">
                                        <svg class="w-50 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 48C440.8 48 448 40.75 448 32V16C448 7.25 440.8 0 432 0h-416C7.25 0 0 7.25 0 16V32c0 8.75 7.25 16 16 16H32v158.7C11.82 221.2 0 237.1 0 256c0 60.98 33.28 115.2 84.1 150.4l-19.59 64.36C59.16 491.3 74.53 512 96.03 512h255.9c21.5 0 36.88-20.75 30.62-41.25L363 406.4C414.7 371.2 448 316.1 448 256c0-18.04-11.82-34.85-32-49.26V48H432zM96 72C96 67.63 99.63 64 104 64h48C156.4 64 160 67.63 160 72v16C160 92.38 156.4 96 152 96h-48C99.63 96 96 92.38 96 88V72zM224 288C135.6 288 64 273.7 64 256c0-17.67 71.63-32 160-32s160 14.33 160 32C384 273.7 312.4 288 224 288z"/></svg>
                                      <h5 class="card-title" style="font-weight: 400; font-size: 12px;">Toilet dengan pegangan</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                      <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M510.3 421.9c-5.594-16.75-23.53-25.84-40.47-20.22l-19.38 6.438l-41.7-99.97C403.9 295.1 392.2 288 379.1 288h-97.78l-10.4-48h65.11c17.69 0 32-14.31 32-32s-14.31-32-32-32h-78.98L255.6 169.2C251.8 142.1 227.2 124.8 201.2 128.5C174.1 132.2 156.7 156.5 160.5 182.8l23.68 140.4C185.8 339.6 199.6 352 216 352h141.4l44.86 107.9C407.3 472.3 419.3 480 432 480c3.344 0 6.781-.5313 10.12-1.656l48-16C506.9 456.8 515.9 438.7 510.3 421.9zM160 464c-61.76 0-112-50.24-112-112c0-54.25 38.78-99.55 90.06-109.8L130.1 195C56.06 209 0 273.9 0 352c0 88.37 71.63 160 160 160c77.4 0 141.9-54.97 156.8-128h-49.1C252.9 430.1 210.6 464 160 464zM192 96c26.51 0 48-21.49 48-48S218.5 0 192 0S144 21.49 144 48S165.5 96 192 96z"/></svg>                                    
                                      <h5 class="card-title">Card title</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                      <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 256V192H240C257.7 192 272 206.3 272 224C272 241.7 257.7 256 240 256H192zM384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM336 224C336 170.1 293 128 240 128H168C145.9 128 128 145.9 128 168V352C128 369.7 142.3 384 160 384C177.7 384 192 369.7 192 352V320H240C293 320 336 277 336 224z"/></svg>
                                      <h5 class="card-title">Card title</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                      <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M79 96h130c5.967 0 11.37-3.402 13.75-8.662c2.385-5.262 1.299-11.39-2.754-15.59l-65-67.34c-5.684-5.881-16.31-5.881-21.99 0l-65 67.34C63.95 75.95 62.87 82.08 65.25 87.34C67.63 92.6 73.03 96 79 96zM357 91.59c5.686 5.881 16.31 5.881 21.99 0l65-67.34c4.053-4.199 5.137-10.32 2.754-15.59C444.4 3.402 438.1 0 433 0h-130c-5.967 0-11.37 3.402-13.75 8.662c-2.385 5.262-1.301 11.39 2.752 15.59L357 91.59zM448 128H64c-35.35 0-64 28.65-64 63.1v255.1C0 483.3 28.65 512 64 512h384c35.35 0 64-28.65 64-63.1V192C512 156.7 483.3 128 448 128zM352 224C378.5 224.1 400 245.5 400 272c0 26.46-21.47 47.9-48 48C325.5 319.9 304 298.5 304 272C304 245.5 325.5 224.1 352 224zM160 224C186.5 224.1 208 245.5 208 272c0 26.46-21.47 47.9-48 48C133.5 319.9 112 298.5 112 272C112 245.5 133.5 224.1 160 224zM240 448h-160v-48C80 373.5 101.5 352 128 352h64c26.51 0 48 21.49 48 48V448zM432 448h-160v-48c0-26.51 21.49-48 48-48h64c26.51 0 48 21.49 48 48V448z"/></svg>
                                      <h5 class="card-title">Card title</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card">
                                      <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M496 288h-96V256l64 .0002c8.838 0 16-7.164 16-15.1v-15.1c0-8.838-7.162-16-16-16L384 208c-17.67 0-32 14.33-32 32v47.1l-64 .0005v-192c0-17.64 14.36-32 32-32s32 14.36 32 32v16c0 8.836 7.164 16 16 16h32c8.838 0 16-7.164 16-16v-16c0-59.2-53.85-106-115.1-94.14C255.3 10.71 224 53.36 224 99.79v188.2L160 288V240c0-17.67-14.33-32-32-32L48 208c-8.836 0-16 7.162-16 16v15.1C32 248.8 39.16 256 48 256l64-.0002V288h-96c-8.836 0-16 7.164-16 16v32c0 8.836 7.164 16 16 16h480c8.836 0 16-7.164 16-16V304C512 295.2 504.8 288 496 288zM32 416c0 53.02 42.98 96 96 96h256c53.02 0 96-42.98 96-96v-32H32V416z"/></svg>
                                      <h5 class="card-title">Card title</h5>
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
