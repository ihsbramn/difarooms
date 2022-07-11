@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row mt-3 mx-2">
            <h1 style="font-weight: 800; font-size: 40px;">Tambah Hotel</h1>
        </div>
        
        <form action="{{ route('/hotel/store') }}" id="create" method="post" enctype="multipart/form-data">
            <div class="row bg-white mx-3 shadow" style="border-radius: 12px">
                @csrf
                <div class="form px-5 py-4">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_name">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ht_name" name="ht_name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_key">Hotel key (Tripadvisor)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ht_key" name="ht_key">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_address">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_address" name="ht_address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_description">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control " id="ht_description" name="ht_description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_contact">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_contact">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact">
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
                            <input type="text" class="form-control " id="ht_embedmaps" name="ht_embedmaps">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_urlvideo">URL Video (Youtube) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_urlvideo" name="ht_urlvideo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_latitude">Latitude</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="ht_latitude" name="ht_latitude">
                        </div>
                        <label class="col-sm-2 col-form-label text-center" for="ht_longitude">Longitude</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="ht_longitude" name="ht_longitude">
                            <input type="text" class="form-control " id="ht_author" name="ht_author"
                                value="{{ Auth::user()->name }}" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid d-md-flex justify-content-md-end mt-3 me-3">
                <button href="submit" class="btn btn-dark btn-lg px-5" style="background: #47A2D6; border-radius: 12px; border-color: #47A2D6;">Post !</button>
            </div>
        </form>
    </div>
@endsection
