@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Hotel Menu Admin</h2>
                <div class="card-body">
                    <p class="text-center" >Tambah Hotel</p>
                    <form action="{{ route('/hotel/store') }}" id="create" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form">
                        <div class="form-group">
                            <label for="ht_name">Nama</label>
                            <input type="text" class="form-control" id="ht_name" name="ht_name">
                        </div>
        
                        <br>

                        <div class="form-group">
                            <label for="ht_key">Hotel key (Tripadvisor)</label>
                            <input type="text" class="form-control" id="ht_key" name="ht_key">
                        </div>
        
                        <br>
        
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="ht_thumbnail">Photo Thumbnail</label>
                                <br>
                                <input type="file" class="form-control" id="ht_thumbnail" name="ht_thumbnail">
                            </div>
                        </div>
        
                        <br>
                        
                        <div class="form-group">
                            <label for="ht_address">Alamat</label>
                            <input type="text" class="form-control " id="ht_address" name="ht_address">
                        </div>
        
                        <br>

                        <div class="form-group">
                            <label for="ht_description">Deskripsi</label>
                            <textarea type="text" class="form-control " id="ht_description" name="ht_description" rows="4"></textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ht_urlvideo">URL Video (Youtube) </label>
                            <input type="text" class="form-control " id="ht_urlvideo" name="ht_urlvideo">
                        </div>

                        {{-- <br>

                        <div class="form-group">
                            <label for="ht_fascility">Fasilitas Hotel</label>
                            <textarea type="text" class="form-control " id="ht_fascility" name="ht_fascility" rows="4"></textarea>
                        </div> --}}

                        <br>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="ht_accesible">Aksesibel ?</label>
                            <select class="form-select" id="ht_accesible" name="ht_accesible">
                                <option selected>Pilih...</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <br>

                        {{-- <div class="form-group">
                            <label for="ht_accesible_detail">Fasilitas Aksesibilitas</label>
                            <textarea type="text" class="form-control " id="ht_accesible_detail" name="ht_accesible_detail" rows="4"></textarea>
                        </div>

                        <br> --}}

                        {{-- <div class="form-group">
                            <label for="ht_price_estimate">Estimasi Harga</label>
                            <input type="text" class="form-control " id="ht_price_estimate" name="ht_price_estimate">
                        </div>

                        <br> --}}

                        <div class="form-group">
                            <label for="ht_contact">Kontak</label>
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact">
                        </div>

                        {{-- <br>

                        <div class="form-group">
                            <label for="ht_roomtype">Tipe Kamar</label>
                            <input type="text" class="form-control " id="ht_roomtype" name="ht_roomtype">
                        </div> --}}

                        <br>
                        
                        <div class="form-group">
                            <label for="ht_embedmaps">Link Embed Gmaps</label>
                            <input type="text" class="form-control " id="ht_embedmaps" name="ht_embedmaps">
                        </div>
        
                        <br>
        
                        <div class="form-group">
                            <label for="ht_latitude">Latitude</label>
                            <input type="text" class="form-control " id="ht_latitude" name="ht_latitude">
                        </div>
        
                        <br>
                        <div class="form-group">
                            <label for="ht_longitude">Longitude</label>
                            <input type="text" class="form-control " id="ht_longitude" name="ht_longitude">
                        </div>
        
                        <br>
        
                        
                    </div>
                    <button href="submit" class="btn btn-dark">Post !</button>
                    <a href="{{ url('hotel/admin') }}" class="btn btn-danger">Back</a>
                </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection