@extends('layouts.app')
@section('content')
<div class="container">

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">My Forum</h2>
                <div class="card-body">
                    <p class="text-center">Edit Forum</p>
                    <form action="{{ route('forum/update', $forum->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="fr_title">Judul</label>
                            <input type="text" class="form-control" id="fr_user_id" name="fr_user_id" value="{{ Auth::user()->id }}" hidden>
                            <input type="text" class="form-control" id="fr_author" name="fr_author" value="{{ Auth::user()->name }}" hidden>
                            <input type="text" class="form-control" id="fr_title" name="fr_title" value="{{ $forum->fr_title }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="fr_filename">Isi</label>
                            <input type="file" name="fr_filename" id="fr_filename" class="form-control" value="{{ $forum->fr_filename }}">
                        </div> --}}
                        <div class="form-group">
                            <label for="fr_body">Isi</label>
                            <textarea name="fr_body" id="fr_body" class="form-control">{{ $forum->fr_body }}</textarea>
                        </div>
                        <br>
                        <button href="submit" class="btn btn-dark">Update !</button>
                        <a href="{{ url('/user/myforum') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
<br>
            <div class="card">
                <div class="card-body">
                    <p class="text-center">Tambah Photo</p>
                    <form method="post" action="{{ route('forum_img/store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="images[]" multiple class="form-control" accept="image/*">
                            @if ($errors->has('files'))
                                @foreach ($errors->get('files') as $error)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $error }}</strong>
                                </span>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="fr_id" id="fr_id" value="{{ $forum->id }}" hidden>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection