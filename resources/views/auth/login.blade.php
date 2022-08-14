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
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row" style="min-height:100vh">
            {{-- img --}}
            <div class="col-7 d-flex">
                <img class="mx-auto my-auto" src="{{ URL::asset('/img/bg-login.png') }}" alt="">
            </div>

            {{-- login form --}}
            <div class="col-5 d-flex">
                <div class="row">
                    <div class="col my-auto">
                        <h2 class="mb-4" style="color: rgba(70, 70, 70, 1);">Kebutuhanmu,<br>Kebutuhan Semua</h2>

                        <div class="card shadow rounded-5 border-0" style="border-radius: 12px; min-width: 500px;">
                            <h1 class="m-5" style="font-weight: 600; font-size: 24px;">{{ __('Login') }}</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-4 mx-5">
                                    <input id="email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="email anda" style="border-radius: 12px;" aria-label="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3 px-5">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="password"
                                        style="border-radius: 12px 0px 0px 12px;" aria-label="password">
                                    <button class="btn btn-outline-secondary" type="button" id="eye"
                                        onclick="showpass()" onkeypress="showpass()" style="font-size: 20px; border-radius: 0px 12px 12px 0px;"
                                        title="show pass button"><i class="bi bi-eye-fill"></i>
                                    </button>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2 mx-5">
                                    <button type="submit" class="btn btn-primary"
                                        style="background: rgba(36, 77, 100, 1); border-color: rgba(36, 77, 100, 1); border-radius: 12px;font-weight: 500; font-size: 16px;">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="row mb-0 mx-5">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                            style="text-decoration: none; color: #244D64; font-weight: 500; font-size: 16px;">
                                            {{ __('Lupa Kata Sandi?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                            <hr class="mx-auto" style="width: 82%">
                            <a type="button" class="btn btn-success mx-5 mb-5 mt-3" href="{{ route('register') }}"
                                style="font-size: 16px; background: rgba(26, 186, 0, 1); border-color: rgba(26, 186, 0, 1); border-radius: 12px; font-weight: 500; font-size: 16px;">{{ __('Buat Akun') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- footer --}}
            <footer class="container-fluid mt-auto">
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
