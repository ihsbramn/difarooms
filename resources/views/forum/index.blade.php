@extends('layouts.forum')

@section('head')
    <script>
        function search_forum() {
            let input = document.getElementById('searchforumbar').value
            input = input.toLowerCase();
            let x = document.getElementsByClassName('forum');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "initial";
                }
            }
        }
    </script>
@endsection

@section('content')

    {{-- modal pop up disaat belum login --}}
    @guest
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#myModal").modal('show');
            }
        </script>
    @endguest
    {{-- modal pop up disaat belum login --}}


    <div class="container-fluid mt-5 mb-5" style="padding-inline: 7rem">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">

            {{-- main section --}}
            <div class="col-9 pe-5">
                <h1 hidden>Forum</h1>

                {{-- nav section --}}
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active px-5" id="nav-semua-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-semua" type="button" role="tab" aria-controls="nav-semua"
                                aria-selected="true"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Semua</button>
                            <button class="nav-link px-5" id="nav-terbaru-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-terbaru" type="button" role="tab" aria-controls="nav-terbaru"
                                aria-selected="false"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Terbaru</button>
                            <button class="nav-link
                                px-5" id="nav-terpopuler-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-terpopuler" type="button" role="tab"
                                aria-controls="nav-terpopuler" aria-selected="false"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Terpopuler</button>
                        </div>
                    </nav>
                </div>

                {{-- content --}}
                <div class="row">
                    <div class="tab-content mt-4" id="nav-tabContent">
                        {{-- semua --}}
                        <div class="tab-pane fade show active" id="nav-semua" role="tabpanel" aria-labelledby="nav-semua-tab" tabindex="0">
                            @foreach ($forum as $index => $fr)
                                <div class="forum">
                                    <div class="card border-0 shadow mt-3">
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row row-cols-auto">
                                                <div class="col">
                                                    <span class="iconify" data-icon="carbon:user-avatar-filled"
                                                        data-width="45" data-height="45" style="color: #47A2D6;"></span>
                                                </div>
                                                {{-- author --}}
                                                <div class="col">
                                                    <p class="mb-0"
                                                        style="font-weight: 500; font-size: 16px; color: #000000;">
                                                        {{ $fr->fr_author }}</p>
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 14px; color: #868686;">
                                                        {{ $fr->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0  ">
                                            {{-- title forum --}}
                                            <div class="row">
                                                <p class="mb-0"
                                                    style="font-weight: 500; font-size: 20px; color: #000000;">
                                                    {{ $fr->fr_title }}</p>
                                            </div>
                                            {{-- isi forum --}}
                                            <div class="row mt-2">
                                                @php
                                                    $showless = substr($fr['fr_body'], 0, 160);
                                                    $showmore = substr($fr['fr_body'], 160);
                                                @endphp
                                                @if ($showmore !== false)
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 16px; color: #000000;">
                                                        {{ $showless }}
                                                        <span id="dots">...</span>
                                                        <a onclick="myFunction()" type="button"
                                                            href="{{ route('/forum/show', $fr->id) }}"
                                                            style="color: blue">Read more</a>
                                                    </p>
                                                @else
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 16px; color: #000000;">
                                                        {{ $fr->fr_body }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <a class="card-footer bg-transparent" href="{{ route('/forum/show', $fr->id) }}"
                                            style="text-decoration: none;">
                                            <p class="mb-0" style="font-weight: 400;font-size: 14px; color: #4D4D4D;"><i
                                                    class="bi bi-chat me-2"></i>Lihat balasan</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- terbaru --}}
                        <div class="tab-pane fade" id="nav-terbaru" role="tabpanel"  aria-labelledby="nav-terbaru-tab" tabindex="0">
                            @foreach ($terbaru as $index => $fr)
                                <div class="forum">
                                    <div class="card border-0 shadow mt-3">
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row row-cols-auto">
                                                <div class="col">
                                                    <span class="iconify" data-icon="carbon:user-avatar-filled"
                                                        data-width="45" data-height="45" style="color: #47A2D6;"></span>
                                                </div>
                                                {{-- author --}}
                                                <div class="col">
                                                    <p class="mb-0"
                                                        style="font-weight: 500; font-size: 16px; color: #000000;">
                                                        {{ $fr->fr_author }}</p>
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 14px; color: #868686;">
                                                        {{ $fr->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0  ">
                                            {{-- title forum --}}
                                            <div class="row">
                                                <p class="mb-0"
                                                    style="font-weight: 500; font-size: 20px; color: #000000;">
                                                    {{ $fr->fr_title }}</p>
                                            </div>
                                            {{-- isi forum --}}
                                            <div class="row mt-2">
                                                @php
                                                    $showless = substr($fr->fr_body, 0, 160);
                                                    $showmore = substr($fr->fr_body, 160);
                                                @endphp
                                                @if ($showmore !== false)
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 16px; color: #000000;">
                                                        {{ $showless }}
                                                        <span id="dots">...</span>
                                                        <a onclick="myFunction()" type="button"
                                                            href="{{ route('/forum/show', $fr->id) }}"
                                                            style="color: blue">Read more</a>
                                                    </p>
                                                @else
                                                    <p class="mb-0"
                                                        style="font-weight: 400; font-size: 16px; color: #000000;">
                                                        {{ $fr->fr_body }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <a class="card-footer bg-transparent" href="{{ route('/forum/show', $fr->id) }}"
                                            style="text-decoration: none;">
                                            <p class="mb-0" style="font-weight: 400;font-size: 14px; color: #4D4D4D;"><i
                                                    class="bi bi-chat me-2"></i>Tulis komentar</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- terpopuler --}}
                        <div class="tab-pane fade" id="nav-terpopuler" role="tabpanel"  aria-labelledby="nav-terpopuler-tab" tabindex="0">
                            @foreach ($forum as $fr)
                                <a class="card border-0 shadow mt-3 forum" href="{{ route('/forum/show', $fr->id) }}"
                                    style="text-decoration: none; border-radius: 12px; overflow: hidden;">
                                    <div class="card-header bg-transparent">
                                        <div class="row row-cols-auto">
                                            <div class="col">
                                                <span class="iconify" data-icon="carbon:user-avatar-filled"
                                                    data-width="45" data-height="45" style="color: #47A2D6;"></span>
                                            </div>
                                            <div class="col">
                                                <p class="mb-0"
                                                    style="font-weight: 500; font-size: 16px; color: #000000;">
                                                    {{ $fr->fr_author }}</p>
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 14px; color: #868686;">
                                                    {{ $fr->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                                {{ $fr->fr_title }}</p>
                                        </div>
                                        <div class="row mt-2" style="max-height: 10rem;">
                                            <p class="mb-0" style="font-weight: 400; font-size: 16px; color: #000000;">
                                                {{ $fr->fr_body }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- side section --}}
            <div class="col-3">
                <div class="d-grid gap-4">
                    {{-- buat forum --}}
                    <button class="btn btn-primary py-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#tambahforum"
                        style="font-weight: 600; font-size: 20px; background: #004973; border-radius: 12px; border-color: #004973;">Ajukan
                        Pertanyaan</button>

                    {{-- search bar --}}
                    <div class="card border-0 shadow" style="border-radius: 12px">
                        <div class="card-body">
                            <form action="{{ '/forum/search' }}" method="get" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari topik"
                                        onkeyup="search_forum()" aria-label="cariforum" name="searchbar"
                                        id="searchforumbar"
                                        style="background: rgba(217, 217, 217, 1);font-weight: 400;font-size: 16px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @auth
        <!-- Modal Create Forum-->
        <div class="modal fade" id="tambahforum" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg border-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="staticBackdropLabel">Tambahkan Pertanyaan</h2>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('/forum/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="fr_title" style="font-weight: 400; font-size: 16px;">Judul</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="fr_user_id" name="fr_user_id"
                                            value="{{ Auth::user()->id }}" aria-label="id user" hidden>
                                        <input type="text" class="form-control" id="fr_author" name="fr_author"
                                            value="{{ Auth::user()->name }}" aria-label="author" hidden>
                                        <input type="text" class="form-control" id="fr_title" name="fr_title" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="fr_body" style="font-weight: 400;font-size: 16px;">Pesan</label>
                                    </div>
                                    <div class="col-10">
                                        <textarea name="fr_body" id="fr_body" class="form-control" rows="8" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end mt-3">
                                <button type="button" class="btn btn-secondary py-1 px-4 me-2" data-bs-dismiss="modal"
                                    style="font-weight: 600; font-size: 20px; border-radius: 12px;">Batal</button>
                                <button type="submit" class="btn btn-primary py-1 px-4"
                                    style="background: rgba(71, 162, 214, 1); font-weight: 600; font-size: 20px; border-radius: 12px; border-color: rgba(71, 162, 214, 1);">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg rounded">
            <div class="modal-content" style="border-radius: 12px">
                <div class="modal-body text-center border-0">
                    <p class="mb-0" style="font-size: 54px; color: rgba(228, 0, 0, 1);"><i
                            class="bi bi-exclamation-triangle-fill"></i></p>
                    <h1 class="mb-0" style="font-weight: 800; font-size: 32px; color: rgba(227, 0, 0, 1);">Anda belum
                        login</h1>
                    <p class="mb-0 mt-3" style="font-weight: 400; font-size: 20px;">Silahkan login terlebih dahulu untuk
                        dapat mengakses forum</p>
                    <div class="row mt-5 mb-4">
                        <div class="col">
                            <a type="button" href="{{ url('/') }}" class="btn btn-secondary px-5"
                                style="font-weight: 600; font-size: 20px; border-radius: 12px;">Beranda</a>
                        </div>
                        <div class="col">
                            <a type="button" href="{{ route('login') }}" class="btn btn-danger px-5"
                                style="font-weight: 600; font-size: 20px; border-radius: 12px;">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
