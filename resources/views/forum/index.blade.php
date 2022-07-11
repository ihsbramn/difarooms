@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-5" style="padding-inline: 7rem">

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
                        <div class="tab-pane fade show active" id="nav-semua" role="tabpanel"
                            aria-labelledby="nav-semua-tab" tabindex="0">
                            @foreach ($forum as $fr)
                                <div class="card">
                                    <div class="card-body">
                                        <p style="font-weight: 500; font-size: 16px;">{{ $fr->fr_author }}</p>
                                        <p style="font-weight: 500; font-size: 20px;">{{ $fr->fr_title }}</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-terbaru" role="tabpanel" aria-labelledby="nav-terbaru-tab"
                            tabindex="0">2</div>
                        <div class="tab-pane fade" id="nav-terpopuler" role="tabpanel" aria-labelledby="nav-terpopuler-tab"
                            tabindex="0">3</div>
                    </div>
                </div>
            </div>

            {{-- side section --}}
            <div class="col-3">
                <div class="d-grid gap-4">
                    <button class="btn btn-primary py-2" type="button" data-bs-toggle="modal" data-bs-target="#tambahforum"
                        style="font-weight: 600; font-size: 20px; background: #004973; border-radius: 12px; border-color: #004973;">Ajukan
                        Pertanyaan</button>

                    <div class="card border-0 shadow" style="border-radius: 12px">
                        <div class="card-body">
                            <div class="input-group">
                                <span class="input-group-text border-0" id="basic-addon1"
                                    style="background: rgba(217, 217, 217, 1);"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control border-0" placeholder="Cari topik"
                                    aria-label="Username" aria-describedby="basic-addon1"
                                    style="background: rgba(217, 217, 217, 1); font-weight: 400;font-size: 16px;">
                            </div>
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
