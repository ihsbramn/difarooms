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
                <h1 style="font-weight: 800; font-size: 40px;">Kelola Hotel</h1>
            </div>
            <div class="col-6 text-end">
                {{-- <form action="{{ route('hotel/destroy', $data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="bi bi-trash-fill"></span>
                        Hapus
                    </button>
                </form> --}}
                <a type="button" class="btn btn-primary btn-lg me-2" href=""
                    style="background: rgba(237, 193, 193, 1); border-color: rgba(237, 193, 193, 1); border-radius: 12px;"><span
                        class="bi bi-trash-fill" style="color: rgba(205, 2, 2, 1);">Hapus</a>
                <a type="button" class="btn btn-primary btn-lg" href="{{ '/hotel/create' }}"
                    style="background: rgba(58, 222, 0, 0.4); border-color: rgba(58, 222, 0, 0.4);border-radius: 12px;"><span
                        class="bi bi-plus" style="color: rgba(3, 77, 19, 1)">Tambah hotel</a>
            </div>
        </div>

        <div class="row mx-2">
            <div class="col-12 bg-white shadow rounded p-4" style="min-height: 80vh">
                <table class="table table-hover table-borderless align-middle">
                    <thead>
                        <tr>
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </th>
                            <th scope="col">id</th>
                            <th scope="col">Nama Hotel</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($hotel as $data)
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                    </div>
                                </td>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->ht_name }}</td>
                                <td>{{ $data->ht_address }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <a class="btn btn-lg" href="{{ route('/hotel/show', $data->id) }}"><i
                                                    class="bi bi-eye-fill" style="color: #3B63B0"></i></a>
                                        </div>
                                        <div class="col-3">
                                            <a class="btn btn-lg" href="{{ route('hotel/edit', $data->id) }}"><i
                                                    class="bi bi-pencil-fill" style="color: #038C11"></i></a>
                                        </div>
                                        <div class="col-3">
                                            <form action="{{ route('hotel/destroy', $data->id) }}" method="POST">
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
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
