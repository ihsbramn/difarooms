@extends('layouts.forum')
@section('content')
    <div class="containe mt-5 mb-5" style="padding-inline: 7rem;">
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
                        <a href="{{ URL::asset('/storage/uploads/'.$img->name) }}" data-lightbox="imgforum">
                            <img src="{{ URL::asset('/storage/uploads/'.$img->name) }}" alt="gambar" id='img-scroll'
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
                    <div class="col my-auto" style="text-align: left;">
                        <a class="mb-0 my-auto" href="#comment"
                            style="font-weight: 400;font-size: 14px; color: #4D4D4D;text-decoration: none;"><span
                                class="iconify me-2" data-icon="bi:reply" data-width="24" data-height="24"></span>Balas</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- komentar --}}
        @foreach ($comment as $cm)
            <div class="card border-0 shadow mt-3 ms-5">
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

        {{-- input komentar --}}
        <div class="card p-3 border-0 shadow mt-3" id="comment" style="border-radius: 12px">
            <form action="{{ route('/comment/store') }}" method="POST">
                @csrf
                <div class="row row-cols-auto">
                    <div class="col">
                        <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="36" data-height="36"
                            style="color: rgba(194, 202, 206, 1);"></span>
                    </div>
                    <div class="col" style="min-width: 96%">
                        <div class="form-group">
                            <input type="text" class="form-control" id="cm_user_id" name="cm_user_id"
                                value="{{ Auth::user()->id }}" hidden>
                            <input type="text" class="form-control" id="cm_forum_id" name="cm_forum_id"
                                value="{{ $forum->id }}" hidden>
                            <input type="text" class="form-control" id="cm_author" name="cm_author"
                                value="{{ Auth::user()->name }}" hidden>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="cm_body" name="cm_body"
                                    style="background: #EFEFEF; font-weight:500; height: 160px"></textarea>
                                <label for="cm_body">Tulis balasan anda ...</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: end">
                        <button href="submit" class="btn btn-dark px-5 mt-3"
                            style="font-weight: 500; font-size: 20px; background-color: #244D64; border-color: #244D64; border-radius: 12px;">Kirim</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
