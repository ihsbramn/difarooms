@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-5 mb-5" style="padding-inline: 7rem">
        <div class="row">
            <div class="col-9 pe-5">
                <div class="card border-0 shadow">
                    <div class="card-header bg-transparent border-0">
                        <div class="row row-cols-auto">
                            <div class="col">
                                <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="45" data-height="45"
                                    style="color: #47A2D6;"></span>
                            </div>
                            {{-- author --}}
                            <div class="col">
                                <p class="mb-0" style="font-weight: 500; font-size: 16px; color: #000000;">
                                    {{ $forum->fr_author }}</p>
                                <p class="mb-0" style="font-weight: 400; font-size: 14px; color: #868686;">
                                    {{ $forum->created_at }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        {{-- title forum --}}
                        <div class="row">
                            <p class="mb-0" style="font-weight: 500; font-size: 20px; color: #000000;">
                                {{ $forum->fr_title }}</p>
                        </div>
                        {{-- img section --}}
                        <div id='scrolly' style="margin-top: 10px">
                            @foreach ($forum_img as $img)
                                <a href="/storage/uploads/{{ $img->name }}" data-lightbox="imgforum">
                                    <img src="/storage/uploads/{{ $img->name }}" alt="gambar" id='img-scroll'
                                        style="max-height: 300px; overflow: hidden;">
                                </a>
                            @endforeach
                        </div>
                        {{-- isi forum --}}
                        <div class="row mt-2">
                            <p class="mb-0" style="font-weight: 400; font-size: 16px; color: #000000;">
                                {{ $forum->fr_body }}</p>
                        </div>
                        {{-- header kolom komentar --}}
                        <hr>
                        <div class="row">
                            <p class="mb-0" style="font-weight: 400;font-size: 14px; color: #4D4D4D;"><i
                                    class="bi bi-chat me-2"></i>Komentar</p>
                        </div>
                    </div>
                    <div class="card-footer border-top-0" style="background: rgba(185, 208, 218, 0.54);">
                        {{-- komentar --}}
                        @foreach ($comment as $cm)
                            <div class="row row-cols-auto mt-2">
                                <div class="col my-auto">
                                    <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="36"
                                        data-height="36" style="color: rgba(194, 202, 206, 1);"></span>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm border-1 p-1" style="max-width: 68rem; border-radius: 10px">
                                        <p class="mb-0 m-0" style="font-weight: 600; font-size: 14px;">
                                            {{ $cm->cm_author }}
                                        </p>
                                        <p class="mb-0 m-0" style="font-weight: 400; font-size: 14px;">{{ $cm->cm_body }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- input komentar --}}
                        <div class="row mt-3">
                            <form action="{{ route('/comment/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cm_user_id" name="cm_user_id"
                                                value="{{ Auth::user()->id }}" hidden>
                                            <input type="text" class="form-control" id="cm_forum_id" name="cm_forum_id"
                                                value="{{ $forum->id }}" hidden>
                                            <input type="text" class="form-control" id="cm_author" name="cm_author"
                                                value="{{ Auth::user()->name }}" hidden>
                                            <input type="text" class="form-control" id="cm_body" name="cm_body"
                                                placeholder="Tulis komentar anda..."
                                                style="background: #9FAFB6; font-weight:500;">
                                        </div>
                                    </div>
                                    <div class="col-2 d-grid text-center">
                                        <button href="submit" class="btn btn-dark">Post !</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="d-grid gap-4">
                    {{-- buat forum --}}
                    <button class="btn btn-primary py-2" type="button" data-bs-toggle="modal" data-bs-target="#tambahforum"
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
