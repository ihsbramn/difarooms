@extends('layouts.app')

@section('content')
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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <div class="row">

            {{-- main section --}}
            <div class="col-9 pe-5">

                {{-- nav section --}}
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active px-5" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-semua" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Semua</button>
                            <button class="nav-link px-5" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-terbaru" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Terbaru</button>
                            <button class="nav-link
                                px-5" id="nav-contact-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-terpopuler" type="button" role="tab"
                                aria-controls="nav-contact" aria-selected="false"
                                style="font-weight: 600; font-size: 16px; color: #47A2D6;">Terpopuler</button>
                        </div>
                    </nav>
                </div>

                {{-- content --}}
                <div class="row">
                    <div class="tab-content mt-4" id="nav-tabContent">
                        {{-- semua --}}
                        <div class="tab-pane fade show active" id="nav-semua" role="tabpanel"
                            aria-labelledby="nav-semua-tab" tabindex="0">
                            @foreach ($forum as $index => $fr)
                                <div class="card border-0 shadow mt-3">
                                    <div class="card-header bg-transparent border-0">
                                        <div class="row row-cols-auto">
                                            <div class="col">
                                                <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="45"
                                                    data-height="45" style="color: #47A2D6;"></span>
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
                                        {{-- main text --}}
                                        <div class="row">
                                            <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                                {{ $fr->fr_title }}</p>
                                        </div>
                                        
                                        {{-- img sectioon --}}
                                        {{-- <div class="row mt-2">
                                            @if ($fr->id == $forum_img[$index]->fr_id)
                                            @foreach ($forum_img as $img)
                                                <a href="/storage/uploads/{{ $img->name }}" data-lightbox="imgforum">
                                                    <img src="/storage/uploads/{{ $img->name }}" alt="gambar"
                                                        id='img-scroll' style="max-height: 300px; overflow: hidden;">
                                                </a>
                                            @endforeach
                                            @endif
                                        </div> --}}

                                        {{-- main content text --}}
                                        <div class="row mt-2">
                                            @php
                                                $showless = substr($fr['fr_body'], 0, 160);
                                                $showmore = substr($fr['fr_body'], 160);
                                            @endphp
                                            @if ($showmore !== false)
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 16px; color: #000000;">
                                                    {{ $showless }}
                                                    <span id="dots">...</span><span
                                                        id="more">{{ $showmore }}</span>
                                                    <a onclick="myFunction()" type="button" id="myBtn"
                                                        style="color: blue">Read more</a>
                                                </p>

                                                <script>
                                                    function myFunction() {
                                                        var dots = document.getElementById("dots");
                                                        var moreText = document.getElementById("more");
                                                        var btnText = document.getElementById("myBtn");

                                                        if (dots.style.display === "none") {
                                                            dots.style.display = "inline";
                                                            btnText.innerHTML = "Read more";
                                                            moreText.style.display = "none";
                                                        } else {
                                                            dots.style.display = "none";
                                                            btnText.innerHTML = "Read less";
                                                            moreText.style.display = "inline";
                                                        }
                                                    }
                                                </script>
                                            @else
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 16px; color: #000000;">
                                                    {{ $fr->fr_body }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- comment view --}}
                                    <div class="card-footer" style="background: rgba(185, 208, 218, 0.54);">
                                        @if ($fr->id == $comment[$index]['cm_forum_id'])
                                            <div class="col-10">
                                                <div class="card border-0 p-2"
                                                    style="border-radius: 10px; background: rgba(194, 202, 206, 1);">
                                                    <p class="mb-0" style="font-weight: 600; font-size: 14px;">
                                                        {{ $comment[$index]['cm_author'] }}</p>
                                                    <p class="mb-0" style="font-weight: 400; font-size: 14px;">
                                                        {{ $comment[$index]['cm_body'] }}</p>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- comment input --}}
                                        <form action="{{ route('/comment/store') }}" method="POST">
                                            @csrf
                                            <div class="row mt-3">
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="cm_user_id"
                                                            name="cm_user_id" value="{{ Auth::user()->id }}" hidden>
                                                        <input type="text" class="form-control" id="cm_forum_id"
                                                            name="cm_forum_id" value="{{ $fr->id }}" hidden>
                                                        <input type="text" class="form-control" id="cm_author"
                                                            name="cm_author" value="{{ Auth::user()->name }}" hidden>
                                                        <input type="text" class="form-control" id="cm_body"
                                                            name="cm_body" placeholder="Comment here">
                                                    </div>
                                                </div>
                                                <div class="col-2 text-center d-grid">
                                                    <button href="submit" class="btn btn-dark">Post !</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- terbaru --}}
                        <div class="tab-pane fade" id="nav-terbaru" role="tabpanel" aria-labelledby="nav-terbaru-tab"
                            tabindex="0">
                            @foreach ($terbaru as $index => $tb)
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
                                                    {{ $tb->fr_author }}</p>
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 14px; color: #868686;">
                                                    {{ $tb->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0  ">
                                        {{-- main text --}}
                                        <div class="row">
                                            <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                                {{ $tb->fr_title }}</p>
                                        </div>
                                        <div class="row mt-2">
                                            @php
                                                $showless = substr($tb->fr_body, 0, 160);
                                                $showmore = substr($tb->fr_body, 160);
                                            @endphp
                                            @if ($showmore !== false)
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 16px; color: #000000;">
                                                    {{ $showless }}
                                                    <span id="dots">...</span><span
                                                        id="more">{{ $showmore }}</span>
                                                    <a onclick="myFunction()" type="button" id="myBtn"
                                                        style="color: blue">Read more</a>
                                                </p>

                                                <script>
                                                    function myFunction() {
                                                        var dots = document.getElementById("dots");
                                                        var moreText = document.getElementById("more");
                                                        var btnText = document.getElementById("myBtn");

                                                        if (dots.style.display === "none") {
                                                            dots.style.display = "inline";
                                                            btnText.innerHTML = "Read more";
                                                            moreText.style.display = "none";
                                                        } else {
                                                            dots.style.display = "none";
                                                            btnText.innerHTML = "Read less";
                                                            moreText.style.display = "inline";
                                                        }
                                                    }
                                                </script>
                                            @else
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 16px; color: #000000;">
                                                    {{ $tb->fr_body }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background: rgba(185, 208, 218, 0.54);">
                                        @if ($tb->id = $comment[$index]['cm_forum_id'])
                                            <div class="col-10">
                                                <div class="card border-0 p-2"
                                                    style="border-radius: 10px; background: rgba(194, 202, 206, 1);">
                                                    <p class="mb-0" style="font-weight: 600; font-size: 14px;">
                                                        {{ $comment[$index]['cm_author'] }}</p>
                                                    <p class="mb-0" style="font-weight: 400; font-size: 14px;">
                                                        {{ $comment[$index]['cm_body'] }}</p>
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{ route('/comment/store') }}" method="POST">
                                            @csrf
                                            <div class="row mt-3">
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="cm_user_id"
                                                            name="cm_user_id" value="{{ Auth::user()->id }}" hidden>
                                                        <input type="text" class="form-control" id="cm_forum_id"
                                                            name="cm_forum_id" value="{{ $tb->id }}" hidden>
                                                        <input type="text" class="form-control" id="cm_author"
                                                            name="cm_author" value="{{ Auth::user()->name }}" hidden>
                                                        <input type="text" class="form-control" id="cm_body"
                                                            name="cm_body" placeholder="Comment here">
                                                    </div>
                                                </div>
                                                <div class="col-2 text-center d-grid">
                                                    <button href="submit" class="btn btn-dark">Post !</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- <a class="card border-0 shadow mt-3" href="{{ route('/forum/show', $tb->id) }}"
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
                                                    {{ $tb->fr_author }}</p>
                                                <p class="mb-0"
                                                    style="font-weight: 400; font-size: 14px; color: #868686;">
                                                    {{ $tb->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                                {{ $tb->fr_title }}</p>
                                        </div>
                                        <div class="row mt-2" style="max-height: 10rem;">
                                            <p class="mb-0" style="font-weight: 400; font-size: 16px; color: #000000;">
                                                {{ $tb->fr_body }}</p>
                                        </div>
                                    </div>
                                </a> --}}
                            @endforeach
                        </div>

                        {{-- terpopuler --}}
                        <div class="tab-pane fade" id="nav-terpopuler" role="tabpanel"
                            aria-labelledby="nav-terpopuler-tab" tabindex="0">
                            @foreach ($forum as $fr)
                                <a class="card border-0 shadow mt-3" href="{{ route('/forum/show', $fr->id) }}"
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
                        style="font-weight: 600; font-size: 20px; background: #004973; border-radius: 12px; border-color: #004973;">Buat
                        forum</button>

                    {{-- search bar --}}
                    <div class="card border-0 shadow" style="border-radius: 12px">
                        <div class="card-body">
                            <form action="{{ '/forum/search' }}" method="get" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari topik"
                                        aria-label="cariforum" aria-describedby="button-addon2" name="cariforum"
                                        id="cariforum"
                                        style="background: rgba(217, 217, 217, 1);font-weight: 400;font-size: 16px;">
                                    <button class="btn btn-outline-secondary border-0" type="submit" id="button-addon2"
                                        style="background: rgba(217, 217, 217, 1);font-weight: 400;font-size: 16px;">Cari</button>
                                </div>
                                <div class="d-grid mt-3">
                                    <a class="btn btn-danger" type="button" href="{{ '/forum' }}">Clear</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        {{-- <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Forum Diskusi </h2>
                <div class="card-body">
                    <a class="btn btn-light" href="{{ '/forum/create' }}">Tambah Forum</a>
                    <a class="btn btn-light" href="{{ '/' }}">back</a>
                    <a class="btn btn-light" href="{{ '/user/myforum' }}">My Forum</a>

                    @foreach ($forum as $fr)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $fr->fr_title }}</td>
                                <td>{{ $fr->fr_author }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('/forum/show',$fr->id) }}">Show</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                    
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Modal Create Forum-->
    <div class="modal fade" id="tambahforum" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg border-0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Pertanyaan</h5>
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
                                        value="{{ Auth::user()->id }}" hidden>
                                    <input type="text" class="form-control" id="fr_author" name="fr_author"
                                        value="{{ Auth::user()->name }}" hidden>
                                    <input type="text" class="form-control" id="fr_title" name="fr_title">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                    <label for="fr_filename">Isi</label>
                    <input type="file" name="fr_filename" id="fr_filename" class="form-control">
                </div> --}}
                        <div class="form-group mt-2">
                            <div class="row">
                                <div class="col-2">
                                    <label for="fr_body" style="font-weight: 400;font-size: 16px;">Pesan</label>
                                </div>
                                <div class="col-10">
                                    <textarea name="fr_body" id="fr_body" class="form-control" rows="8"></textarea>
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


@endsection
