@extends('layouts.admin')

@section('content')
    <br>
    <div class="container-fluid">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="row mt-1 ms-2 d-flex">
            <div class="col-6">
                <h1 style="font-weight: 800; font-size: 40px;">Edit Hotel</h1>
            </div>
            <div class="col-6 text-end my-auto">
                <a href="{{ url('hotel/admin') }}" class="btn btn-secondary px-5">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-5">
                <form action="{{ route('hotel/update', $hotel->id) }}" method="post" enctype="multipart/form-data">
                    <div class="row bg-white ms-3 me-2 shadow" style="border-radius: 12px; min-height: 81vh;">
                        @csrf
                        @method('PUT')
                        <div class="form px-3 py-3">
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_name">Nama</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ $hotel->id }}" hidden>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ht_name" name="ht_name"
                                        value="{{ $hotel->ht_name }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_key">Hotel key (Tripadvisor)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ht_key" name="ht_key"
                                        value="{{ $hotel->ht_key }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_address">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="ht_address" name="ht_address"
                                        value="{{ $hotel->ht_address }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_description">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control " id="ht_description" name="ht_description" rows="20">
                                    {{ $hotel->ht_description }}
                                </textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_contact">Kontak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="ht_contact" name="ht_contact"
                                        value="{{ $hotel->ht_contact }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_accesible">Aksesibel</label>
                                <div class="col-sm-10 text-align-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ht_accesible" id="ht_accesible"
                                            value="Ya">
                                        <label class="form-check-label" for="ht_accesible">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ht_accesible" id="ht_accesible"
                                            value="Tidak">
                                        <label class="form-check-label" for="ht_accesible">Tidak</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row custom-file">
                                <label class="col-sm-2 col-form-label" for="ht_thumbnail">Photo Thumbnail</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="ht_thumbnail" name="ht_thumbnail">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_embedmaps">Link Embed Gmaps</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="ht_embedmaps" name="ht_embedmaps"
                                        value="{{ $hotel->ht_embedmaps }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_urlvideo">URL Video (Youtube) </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="ht_urlvideo" name="ht_urlvideo"
                                        value="{{ $hotel->ht_urlvideo }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label" for="ht_latitude">Latitude</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control " id="ht_latitude" name="ht_latitude"
                                        value="{{ $hotel->ht_latitude }}">
                                </div>
                                <label class="col-sm-2 col-form-label text-center" for="ht_longitude">Longitude</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control " id="ht_longitude" name="ht_longitude"
                                        value="{{ $hotel->ht_longitude }}">
                                </div>
                            </div>
                            <div class="d-grid d-md-flex justify-content-md-end mt-3">
                                <button href="submit" class="btn btn-success btn-lg px-5"
                                    style="border-radius: 12px;">Post
                                    !</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="card border-0 shadow" style="max-height:40vh; overflow:scroll; border-radius: 12px;">
                        <div class="card-body">
                            <p class="text-center">Data Photo</p>
                            @foreach ($hotel_img as $img)
                                <br>
                                <img src="/storage/uploads/{{ $img->name }}" alt="gambar" height="200px">
                                <form action="{{ route('hotel_img/destroy', $img->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <br>
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="card border-0 shadow" style="border-radius: 12px;"">
                        <div class="card-body">
                            <p class="text-center">Add Photo</p>
                            <form method="post" action="{{ route('hotel_img/store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="images[]" multiple class="form-control"
                                        accept="image/*">
                                    @if ($errors->has('files'))
                                        @foreach ($errors->get('files') as $error)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $error }}</strong>
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="ht_id" id="ht_id" value="{{ $hotel->id }}"
                                        hidden>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="card border-0 shadow" style="border-radius: 12px"">
                        <div class="card-body">
                            <p class="text-center">Add Roomtype</p>
                            <form method="post" action="{{ route('hotel_roomtype/store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ht_id" id="ht_id"
                                        value="{{ $hotel->id }}" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="name_roomtype">Nama Tipe kamar</label>
                                    <input type="text" class="form-control" name="name_roomtype" id="name_roomtype">
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" class="form-control" id="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Foto Tipe Kamar</label>
                                    <input type="file" class="form-control" id="name" name="name">
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
            <div class="col-3">
                <div class="card border-0 shadow" style="border-radius: 12px;  min-height: 81vh;">
                    <div class="card-body">
                        <p class="text-center">Add Fascilites</p>
                        <form method="post" action="{{ route('hotel_fascility/store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="ht_id" id="ht_id" value="{{ $hotel->id }}" hidden>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ramp"
                                    name="ramp">
                                <Label class="form-check-label" for="ramp">Ramp</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="antarjemput"
                                    name="antarjemput">
                                <Label class="form-check-label" for="antarjemput">Antar Jemput</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="akses_kursiroda"
                                    name="akses_kursiroda">
                                <Label class="form-check-label" for="akses_kursiroda">Akses Kursi Roda</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="toilet_pegangan"
                                    name="toilet_pegangan">
                                <Label class="form-check-label" for="toilet_pegangan">Toilet Pegangan</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="parkir_difabel"
                                    name="parkir_difabel">
                                <Label class="form-check-label" for="parkir_difabel">Parkir Difabel</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="bantuan_staff"
                                    name="bantuan_staff">
                                <Label class="form-check-label" for="bantuan_staff">Bantuan Staff</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pusat_kesehatan"
                                    name="pusat_kesehatan">
                                <Label class="form-check-label" for="pusat_kesehatan">Pusat Kesehatan</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="wifi"
                                    name="wifi">
                                <Label class="form-check-label" for="wifi">Wifi</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kamarmandi_luas"
                                    name="kamarmandi_luas">
                                <Label class="form-check-label" for="kamarmandi_luas">Kamarmandi Luas</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="jalan_pemandu"
                                    name="jalan_pemandu">
                                <Label class="form-check-label" for="jalan_pemandu">Jalan Pemandu</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="lift_aksesibel"
                                    name="lift_aksesibel">
                                <Label class="form-check-label" for="lift_aksesibel">Lift Aksesibel</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ac"
                                    name="ac">
                                <Label class="form-check-label" for="ac">AC</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="restoran"
                                    name="restoran">
                                <Label class="form-check-label" for="restoran">Restoran</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="laundry"
                                    name="laundry">
                                <Label class="form-check-label" for="laundry">Laundry</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ruang_tunggu_tamu"
                                    name="ruang_tunggu_tamu">
                                <Label class="form-check-label" for="ruang_tunggu_tamu">Ruang Tunggu Tamu</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="cctv"
                                    name="cctv">
                                <Label class="form-check-label" for="cctv">CCTV</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="resepsionis_24jam"
                                    name="resepsionis_24jam">
                                <Label class="form-check-label" for="resepsionis_24jam">Resepsionis 24 Jam</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kolam_renang"
                                    name="kolam_renang">
                                <Label class="form-check-label" for="kolam_renang">Kolam Renang</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pemadam_api"
                                    name="pemadam_api">
                                <Label class="form-check-label" for="pemadam_api">Pemadam Api</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pusat_kebugaran"
                                    name="pusat_kebugaran">
                                <Label class="form-check-label" for="pusat_kebugaran">Pusat Kebugaran</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="mini_bar"
                                    name="mini_bar">
                                <Label class="form-check-label" for="mini_bar">Mini Bar</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="masjid"
                                    name="masjid">
                                <Label class="form-check-label" for="masjid">Masjid</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="wastafel_rendah"
                                    name="wastafel_rendah">
                                <Label class="form-check-label" for="wastafel_rendah">Wastafel Rendah</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kloset_rendah"
                                    name="kloset_rendah">
                                <Label class="form-check-label" for="kloset_rendah">Kloset Rendah</Label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                        {{-- @if ($hotel_fascilities == null)
                            
                        @endif --}}
                        {{-- @foreach ($hotel_fascilities as $fas) --}}
                        {{-- <form action="{{ route('hotel_fascility/destroy', $fas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-lg">
                                <i class="bi bi-trash-fill" style="color: #CD0202"></i>
                            </button>
                        </form>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
