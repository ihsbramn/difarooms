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
        </div>

        <div class="row mx-2">
            <div class="col-12 bg-white shadow rounded p-4" style="min-height: 80vh">
                <table class="table table-hover table-borderless align-middle">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Author</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forum as $fr)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $fr->fr_title }}</td>
                                <td>{{ $fr->fr_author }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <a class="btn btn-lg" href="{{ route('forum/admin/show', $fr->id) }}"><i
                                                    class="bi bi-eye-fill" style="color: #3B63B0"></i></a>
                                        </div>
                                        <div class="col-3">
                                            <form action="{{ route('forum/destroy', $fr->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-lg">
                                                    <i class="bi bi-trash-fill" style="color: #CD0202"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
