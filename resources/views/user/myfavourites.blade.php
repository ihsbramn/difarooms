@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        {{-- title --}}
        <div class="row mt-5" style="padding-inline: 7rem;">
            <div class="col">
                <h1 style="font-weight: 800; font-size: 40px;"><i class="bi bi-heart-fill me-3"></i>Hotel Favorit</h1>
            </div>
        </div>

        {{-- list favorit --}}
        <div class="container mt-5">
            <div class="card p-3 border-0 shadow" style="border-radius: 12px">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama Hotel</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fav as $index => $data)
                            <tr>
                                <th class="align-middle">{{ $data->fv_hotel_name }}</th>
                                <td class="align-middle">
                                    @foreach ($hotel as $htl)
                                        @if ($htl->id == $data->fv_hotel_id)
                                        <p class="m-0" style="font-weight: 500; font-size: 16px;">{{ $htl->ht_address }}</p>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <form action="{{ route('/favourites/destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus dari Favorite">
                                                    <i class="bi bi-heart-fill" style="color: #CD0202;"></i>
                                                </button>
                                                <script>
                                                    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                                                    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
                                                </script>
                                            </form>
                                        </div>
                                        <div class="col-10 ps-4">
                                            <a href="{{ route('/hotel/show', $data->fv_hotel_id) }}"
                                                class="btn btn-primary border-0 btn-lg" type="button"
                                                style="border-radius: 12px; background-color:#244D64">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="row row-cols-1 row-cols-md-2 g-4 mt-1" style="padding-inline: 7rem">
        @foreach ($fav as $data)
        <div class="col">
            <div class="card border-0 shadow" style="width: 25rem; border-radius: 20px;">
                <img src="{{ URL::asset('/img/htl-cth.png') }}" class="card-img-top p-3"
                    alt="foto hotel">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p class="card-text" style="font-weight: 600; font-size: 18px;">
                                {{ $data->fv_hotel_name }}</p>
                        </div>
                        <div class="col-6 text-end"
                            style="font-weight: 500; font-size: 16px; color:rgba(59, 135, 178, 1);"><span class="iconify me-2" data-icon="map:wheelchair"></span>
                            aksesibel</div>
                    </div>
                    <div class="row text-end">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('/favourites/destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg">
                                    <i class="bi bi-heart-fill" style="color: #CD0202;"></i>
                                </button>
                            </form>
                            <a href="{{ route('/hotel/show', $data->fv_hotel_id) }}"
                                class="btn btn-primary border-0 btn-lg" type="button"
                                style="border-radius: 12px; background-color:#244D64">Lihat
                                detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
    </div>
@endsection
