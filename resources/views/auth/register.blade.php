@extends('layouts.auth')

@section('head')
    <script>
        function showpass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

        }

        function showcpass() {
            var x = document.getElementById("password-confirm");
            if (x.type === "password-confirm") {
                x.type = "text";
            } else {
                x.type = "password-confirm";
            }

        }
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container-fluid"
        style="background-image: URL('/img/bg-regist.png');background-repeat: no-repeat; background-position: center;">
        <div class="position-relative" style="min-height:100vh">

            {{-- regist form --}}
            <div class="card position-absolute top-50 start-50 translate-middle border-0 shadow p-4"
                style="border-radius: 12px; min-width: 548px;">
                <div class="card-body">
                    <h1 class="m-0" style="text-align: left; font-weight: 700; font-size: 24px;">Daftar Akun</h1>
                    <p class="m-0 mb-3" style="text-align: left; font-weight: 400; font-size: 20px;">Buat akunmu untuk dapat
                        berjejaring</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-4">
                            <div class="col">
                                <input id="name" type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" placeholder="Nama"
                                    style="border-radius: 12px;" aria-label="kolom nama" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <input id="email" type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email"
                                    style="border-radius: 12px;" aria-label="kolom email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-4">
                            <input id="password" type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password" placeholder="Kata sandi"
                                style="border-radius: 12px 0px 0px 12px;" aria-label="kolom password">
                            <button class="btn btn-outline-secondary" type="button" id="eye" onclick="showpass()"
                                onkeypress="showpass()" title="show pass"
                                style="font-size: 20px; border-radius: 0px 12px 12px 0px;"><i class="bi bi-eye-fill"></i>
                            </button>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <input id="password-confirm" type="password" class="form-control form-control-lg"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Konfirmasi kata sandi" style="border-radius: 12px 0px 0px 12px;"
                                aria-label="kolom confirm password">
                            <button class="btn btn-outline-secondary" type="button" id="eye" onclick="showcpass()"
                                onkeypress="showcpass()" title="show confirm pass"
                                style="font-size: 20px; border-radius: 0px 12px 12px 0px;"><i class="bi bi-eye-fill"></i>
                            </button>
                        </div>

                        <div class="row mt-5">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary"
                                    style="padding-inline: 170px; font-weight: 500; font-size: 16px; border-radius: 12px; background-color: rgba(36, 77, 100, 1); border-color: rgba(36, 77, 100, 1);">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- footer --}}
            <footer class="container-fluid mt-auto position-absolute bottom-0 start-50 translate-middle-x">
                <div class="row text-center mb-5 d-flex">
                    <div class="col-sm-3">
                        <a href="{{ url('/') }}">
                            <img src="{{ URL::asset('/img/bt-dr-login.png') }}" alt="Difarooms Logo">
                        </a>
                    </div>
                    <div class="col-sm-6 my-auto">
                        <div class="hstack gap-3 d-flex">
                            <div class="mx-auto my-auto"><a href="{{ '/tujuan' }}"
                                    style="font-weight: 400; font-size: 18px; text-decoration: none; color: #47A2D6;">Tujuan</a>
                            </div>
                            <div class="mx-auto my-auto"><a href="{{ '/bantuan' }}"
                                    style="font-weight: 400; font-size: 18px; text-decoration: none; color: #47A2D6;">Pusat
                                    Bantuan</a>
                            </div>
                            <div class="mx-auto my-auto"><a href="{{ '/kontak' }}"
                                    style="font-weight: 400; font-size: 18px; text-decoration: none; color: #47A2D6;">Kontak</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </footer>
        </div>
    </div>
@endsection
