@extends('layouts.app')
@section('content')
    <div class="container">

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

        <div class="row mt-5">
            <div class="col-8 my-auto">
                <h1 style="font-weight: 800; font-size: 40px;"><i class="bi bi-chat-left-text-fill me-4"></i></i>My Forum</h1>
            </div>
            <div class="col-4">
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

        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>

                @foreach ($forum_user as $fr)
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">{{ $count++ }}</th>
                            <td>{{ $fr->fr_title }}</td>
                            <td class="text-center">{{ $fr->fr_author }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <a class="btn btn-light" href="{{ route('/forum/show', $fr->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('forum/edit', $fr->id) }}">Edit</a>
                                    <form action="{{ route('forum/destroy', $fr->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
