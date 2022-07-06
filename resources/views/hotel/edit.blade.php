@extends('layouts.admin')

@section('content')
<br>
<div class="container">

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Hotel Menu Admin</h2>
                <div class="card-body">
                    <p class="text-center" >Edit Hotel</p>
                    <form action="{{ route('hotel/update', $hotel->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                    <div class="form">
                        <div class="form-group">
                            <label for="ht_name">Nama</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $hotel->id }}" hidden>
                            <input type="text" class="form-control" id="ht_name" name="ht_name" value="{{ $hotel->ht_name }}">
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="ht_key">Hotel key (Tripadvisor)</label>
                            <input type="text" class="form-control" id="ht_key" name="ht_key" value="{{ $hotel->ht_key }}">
                        </div>
        
                        <br>
                        
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="ht_thumbnail">Photo Thumbnail</label>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="/storage/uploads/{{ $hotel->ht_thumbnail }}" alt="thumbnail" height="130px">
                                        <p>Current Thumbnail</p>
                                    </div>
                                    <div class="col">
                                        <input type="file" class="form-control" id="ht_thumbnail" name="ht_thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <br>
                        <div class="form-group">
                            <label for="ht_address">Alamat</label>
                            <input type="text" class="form-control " id="ht_address" name="ht_address" value="{{ $hotel->ht_address }}">
                        </div>
        
                        <br>

                        <div class="form-group">
                            <label for="ht_description">Deskripsi</label>
                            <textarea type="text" class="form-control " id="ht_description" name="ht_description" rows="4">{{ $hotel->ht_description }}</textarea>
                        </div>

                        <br>
                        
                        <div class="form-group">
                            <label for="ht_urlvideo">URL Video (Youtube) </label>
                            <input type="text" class="form-control " id="ht_urlvideo" name="ht_urlvideo" value="{{ $hotel->ht_urlvideo }}">
                        </div>

                        <br>


                        <div class="input-group mb-3">
                            <label class="input-group-text" for="ht_accesible">Aksesibel ?</label>
                            <select class="form-select" id="ht_accesible" name="ht_accesible">
                                <option selected>{{ $hotel->ht_accesible }}</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <br>
{{-- 
                        <div class="form-group">
                            <label for="ht_price_estimate">Estimasi Harga</label>
                            <input type="text" class="form-control " id="ht_price_estimate" name="ht_price_estimate" value="{{ $hotel->ht_price_estimate }}">
                        </div>

                        <br> --}}

                        <div class="form-group">
                            <label for="ht_contact">Kontak</label>
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact" value="{{ $hotel->ht_contact }}">
                        </div>

                        <br>
                        
                        <div class="form-group">
                            <label for="ht_embedmaps">Link Embed Gmaps</label>
                            <input type="text" class="form-control " id="ht_embedmaps" name="ht_embedmaps" value="{{ $hotel->ht_embedmaps }}">
                        </div>
        
                        <br>
        
                        <div class="form-group">
                            <label for="ht_latitude">Latitude</label>
                            <input type="text" class="form-control " id="ht_latitude" name="ht_latitude" value="{{ $hotel->ht_latitude }}">
                        </div>
        
                        <br>
                        <div class="form-group">
                            <label for="ht_longitude">Longitude</label>
                            <input type="text" class="form-control " id="ht_longitude" name="ht_longitude" value="{{ $hotel->ht_longitude }}">
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Update</button>
                    <a href="{{ url('hotel/admin') }}" class="btn btn-danger">Back</a>
                </form>
                </div>
            </div>

            <br>
            <div class="card">
                <div class="card-body">
                    <p class="text-center">Data Photo</p>
                    @foreach ($hotel_img as $img )
                    <br>
                        <img src="/storage/uploads/{{ $img->name }}" alt="gambar" height="200px" >
                        <form action="{{ route('hotel_img/destroy',$img->id) }}" method="POST">
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
            <br>
            {{-- add photo  --}}
            <div class="card">
                <div class="card-body">
                    <p class="text-center" >Add Photo</p>
                    <form method="post" action="{{ route('hotel_img/store') }}" enctype="multipart/form-data">
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
                            <input type="text" name="ht_id" id="ht_id" value="{{ $hotel->id }}" hidden>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <p class="text-center" >Add Fascilites</p>
                    <form method="post" action="{{ route('hotel_fascility/store') }}" enctype="multipart/form-data">
                        @csrf
                            <input type="text" name="ht_id" id="ht_id" value="{{ $hotel->id }}" hidden>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ramp" name="ramp">
                                <Label class="form-check-label" for="ramp">Ramp</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="antarjemput" name="antarjemput">
                                <Label class="form-check-label" for="antarjemput">Antar Jemput</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="akses_kursiroda" name="akses_kursiroda">
                                <Label class="form-check-label" for="akses_kursiroda">Akses Kursi Roda</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="toilet_pegangan" name="toilet_pegangan">
                                <Label class="form-check-label" for="toilet_pegangan">Toilet Pegangan</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="parkir_difabel" name="parkir_difabel">
                                <Label class="form-check-label" for="parkir_difabel">Parkir Difabel</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="bantuan_staff" name="bantuan_staff">
                                <Label class="form-check-label" for="bantuan_staff">Bantuan Staff</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pusat_kesehatan" name="pusat_kesehatan">
                                <Label class="form-check-label" for="pusat_kesehatan">Pusat Kesehatan</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="wifi" name="wifi">
                                <Label class="form-check-label" for="wifi">Wifi</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kamarmandi_luas" name="kamarmandi_luas">
                                <Label class="form-check-label" for="kamarmandi_luas">Kamarmandi Luas</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="jalan_pemandu" name="jalan_pemandu">
                                <Label class="form-check-label" for="jalan_pemandu">Jalan Pemandu</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="lift_aksesibel" name="lift_aksesibel">
                                <Label class="form-check-label" for="lift_aksesibel">Lift Aksesibel</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ac" name="ac">
                                <Label class="form-check-label" for="ac">AC</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="restoran" name="restoran">
                                <Label class="form-check-label" for="restoran">Restoran</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="laundry" name="laundry">
                                <Label class="form-check-label" for="laundry">Laundry</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="ruang_tunggu_tamu" name="ruang_tunggu_tamu">
                                <Label class="form-check-label" for="ruang_tunggu_tamu">Ruang Tunggu Tamu</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="cctv" name="cctv">
                                <Label class="form-check-label" for="cctv">CCTV</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="resepsionis_24jam" name="resepsionis_24jam">
                                <Label class="form-check-label" for="resepsionis_24jam">Resepsionis 24 Jam</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kolam_renang" name="kolam_renang">
                                <Label class="form-check-label" for="kolam_renang">Kolam Renang</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pemadam_api" name="pemadam_api">
                                <Label class="form-check-label" for="pemadam_api">Pemadam Api</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="pusat_kebugaran" name="pusat_kebugaran">
                                <Label class="form-check-label" for="pusat_kebugaran">Pusat Kebugaran</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="mini_bar" name="mini_bar">
                                <Label class="form-check-label" for="mini_bar">Mini Bar</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="masjid" name="masjid">
                                <Label class="form-check-label" for="masjid">Masjid</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="wastafel_rendah" name="wastafel_rendah">
                                <Label class="form-check-label" for="wastafel_rendah">Wastafel Rendah</Label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kloset_rendah" name="kloset_rendah">
                                <Label class="form-check-label" for="kloset_rendah">Kloset Rendah</Label>
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <p class="text-center" >Add Roomtype</p>
                    <form method="post" action="{{ route('hotel_roomtype/store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="ht_id" id="ht_id" value="{{ $hotel->id }}" hidden>
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
    <br>
</div>
@endsection