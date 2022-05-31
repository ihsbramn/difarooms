@extends('layouts.app')

@section('content')
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
        
                        {{-- <div class="form-group">
                            <div class="custom-file">
                                <label for="ht_filename">Photo</label>
                                <br>
                                <input type="file" class="form-control" id="ht_filename" name="ht_filename" value="{{ $hotel->ht_filename }}">
                            </div>
                        </div>
        
                        <br> --}}
                        
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

                        <div class="form-group">
                            <label for="ht_fascility">Fasilitas Hotel</label>
                            <textarea type="text" class="form-control " id="ht_fascility" name="ht_fascility" rows="4">{{ $hotel->ht_fascility }}</textarea>
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

                        <div class="form-group">
                            <label for="ht_accesible_detail">Fasilitas Aksesibilitas</label>
                            <textarea type="text" class="form-control " id="ht_accesible_detail" name="ht_accesible_detail" rows="4">{{ $hotel->ht_accesible_detail }}</textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ht_price_estimate">Estimasi Harga</label>
                            <input type="text" class="form-control " id="ht_price_estimate" name="ht_price_estimate" value="{{ $hotel->ht_price_estimate }}">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ht_contact">Kontak</label>
                            <input type="text" class="form-control " id="ht_contact" name="ht_contact" value="{{ $hotel->ht_contact }}">
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ht_roomtype">Tipe Kamar</label>
                            <input type="text" class="form-control " id="ht_roomtype" name="ht_roomtype" value="{{ $hotel->ht_roomtype }}">
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
                    <p class="text-center">Delete Photo</p>
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
        </div>
    </div>  
</div>
@endsection