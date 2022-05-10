@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Forum Diskusi </h2>
                <div class="card-body">
                    <p class="text-center">Tambah Forum</p>
                    <form action="{{ route('/forum/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="fr_title">Judul</label>
                            <input type="text" class="form-control" id="fr_user_id" name="fr_user_id" value="{{ Auth::user()->id }}" hidden>
                            <input type="text" class="form-control" id="fr_title" name="fr_title">
                        </div>
                        <div class="form-group">
                            <label for="fr_filename">Isi</label>
                            <input type="file" name="fr_filename" id="fr_filename" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fr_body">Isi</label>
                            <textarea name="fr_body" id="fr_body" class="form-control"></textarea>
                        </div>
                        <br>
                        <button href="submit" class="btn btn-dark">Post !</button>
                        <a href="{{ url('/forum') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection