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
                        <label class="col-sm-2 col-form-label" for="ht_name" style="font-weight: 400; font-size: 16px;">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ht_name" name="ht_name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_key" style="font-weight: 400; font-size: 16px;">Hotel key (Tripadvisor)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ht_key" name="ht_key">
                            <div id="textHelp" class="form-text"  style="font-weight: 400; font-size: 14px;">cara mendapatkan hotel key : <span><a href="https://xotelo.com/how-to-get-hotel-key.html">cara mendapatkan link</a></span></div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_address" style="font-weight: 400; font-size: 16px;">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_address" name="ht_address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_description" style="font-weight: 400; font-size: 16px;">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control " id="ht_description" name="ht_description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_contact" style="font-weight: 400; font-size: 16px;">Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_accesible" style="font-weight: 400; font-size: 16px;">Aksesibel</label>
                        <div class="col-sm-10 text-align-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ht_accesible" id="ht_accesible"
                                    value="Ya">
                                <label class="form-check-label" for="ht_accesible" style="font-weight: 400; font-size: 16px;">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ht_accesible" id="ht_accesible"
                                    value="Tidak">
                                <label class="form-check-label" for="ht_accesible" style="font-weight: 400; font-size: 16px;">Tidak</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row custom-file">
                        <label class="col-sm-2 col-form-label" for="ht_thumbnail" style="font-weight: 400; font-size: 16px;">Photo Thumbnail</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="ht_thumbnail" name="ht_thumbnail">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_embedmaps" style="font-weight: 400; font-size: 16px;">Link Embed Gmaps</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_embedmaps" name="ht_embedmaps">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_urlvideo" style="font-weight: 400; font-size: 16px;">URL Video (Youtube) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="ht_urlvideo" name="ht_urlvideo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="ht_latitude" style="font-weight: 400; font-size: 16px;">Latitude</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="ht_latitude" name="ht_latitude">
                        </div>
                        <label class="col-sm-2 col-form-label text-center" for="ht_longitude" style="font-weight: 400; font-size: 16px;">Longitude</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="ht_longitude" name="ht_longitude">
                            <input type="text" class="form-control " id="ht_author" name="ht_author"
                                value="{{ Auth::user()->name }}" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid d-md-flex justify-content-md-end mt-3 me-3">
                <button href="submit" class="btn btn-dark btn-lg px-5" style="background: #47A2D6; border-radius: 12px; border-color: #47A2D6;">Submit</button>
            </div>
        </form>
    </div>
@endsection
