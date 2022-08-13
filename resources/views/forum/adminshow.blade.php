@extends('layouts.admin')
@section('content')
    <div class="containe mt-5 mb-5" style="padding-inline: 7rem;">
        <div class="d-flex justify-content-end">
            <form action="{{ route('forum/destroy', $forum->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-lg align-end"
                    style="background: rgba(237, 193, 193, 1); border-color: rgba(237, 193, 193, 1); border-radius: 12px;color: #CD0202;">
                        <i class="bi bi-trash-fill" style="color: #CD0202"></i> Hapus
                </button>
            </form>
        </div>
        <div class="card border-0 shadow mt-4">
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
            </div>
        </div>

        {{-- komentar --}}
        <div class="card border-0 shadow mt-4 p-3">
            <p style="font-weight: 700; font-size: 32px;">Komentar</p>
            @foreach ($comment as $cm)
                <div class="card border-0 shadow mt-3">
                    <div class="row row-cols-auto mt-2">
                        <div class="col my-auto ms-3">
                            <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="36" data-height="36"
                                style="color: rgba(194, 202, 206, 1);"></span>
                        </div>
                        <div class="col my-auto">
                            <p class="mb-0 m-0" style="font-weight: 600; font-size: 14px;">
                                {{ $cm->cm_author }}
                            </p>
                            <p class="mb-0 m-0" style="font-weight: 400; font-size: 14px; color: #868686;">
                                {{ $cm->created_at }}
                            </p>
                        </div>
                    </div>
                    <div class="row row-cols-auto mt-2 mb-3" style="margin-left: 60px">
                        <div class="col">
                            <p class="mb-0 m-0" style="font-weight: 400; font-size: 14px;">{{ $cm->cm_body }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
