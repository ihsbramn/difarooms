@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

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


        <div class="row mt-5 mx-2">
            <div class="col-6">
                <h1 style="font-weight: 800; font-size: 40px;">Kelola Forum</h1>
            </div>
            <div class="col-6 text-end">
                {{-- <form action="{{ route('hotel/destroy', $data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="bi bi-trash-fill"></span>
                        Hapus
                    </button>
                </form> --}}
                <a type="button" class="btn btn-primary btn-lg" href=""
                    style="background: rgba(237, 193, 193, 1); border-color: rgba(237, 193, 193, 1); border-radius: 12px;"><span
                        class="bi bi-trash-fill" style="color: rgba(205, 2, 2, 1);">Hapus</a>
            </div>
        </div>

        <div class="row mx-2">
            <div class="col-12 bg-white shadow rounded">
                @foreach ($forum as $fr)
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Author</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $fr->fr_title }}</td>
                                <td>{{ $fr->fr_author }}</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ route('/forum/show', $fr->id) }}">Show</a>
                                    <form action="{{ route('forum/destroy', $fr->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
