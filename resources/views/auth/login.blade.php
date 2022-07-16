@extends('layouts.login')

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
                        <h2 class="mb-4">Jelajahi Hidupmu,<br>
                            Pergi Kemanapun Anda Mau</h2>

                        <div class="card shadow rounded-5 border-0" style="border-radius: 12px">
                            <p class="m-5" style="font-weight: 600; font-size: 24px;">{{ __('Login') }}</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-4 mx-5">
                                    <input id="email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="email anda">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3 mx-5">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="password">

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
                                        style="background: rgba(36, 77, 100, 1); border-color: rgba(36, 77, 100, 1); border-radius: 12px;">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="row mb-0 mx-5">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                            <hr class="mx-auto" style="width: 82%">
                            <a type="button" class="btn btn-success mx-5 mb-5 mt-3" href="" data-bs-toggle="modal"
                                data-bs-target="#register"
                                style="font-size: 16px; background: rgba(26, 186, 0, 1); border-color: rgba(26, 186, 0, 1); border-radius: 12px">{{ __('Buat Akun') }}</a>
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
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 16px; color: #47A2D6;">Tujuan
                            </div>
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 16px; color: #47A2D6;">Pusat
                                Bantuan</div>
                            <div class="mx-auto my-auto" style="font-weight: 400; font-size: 16px; color: #47A2D6;">Kontak
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal for Register-->
    <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg rounded" style="border-radius: 12px">
            <div class="modal-content border-0 mx-auto" style="border-radius: 12px; max-width: 548px;">
                <div class="modal-header" style="border-bottom: 0 none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-3 mb-3">
                    <h5 class="modal-title" style="font-weight: 700; font-size: 24px;">Daftar Akun</h5>
                    <p style="font-weight: 400; font-size: 20px;">Buat akunmu untuk dapat berjejaring</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Nama" style="font-weight: 500;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="font-weight: 500;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Kata sandi" style="font-weight: 500;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Konfirmasi kata sandi" style="font-weight: 500;">
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"
                                style="background: rgba(36, 77, 100, 1); border-radius: 12px;">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
