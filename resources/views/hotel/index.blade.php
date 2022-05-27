@extends('layouts.app')


@section('head')

@endsection
@section('up_body')

@endsection

@section('lower_body')
<script>
var markersOnMap = [
        {
        placeName: ' <b>The Trans Luxury Hotel</b>',
        LatLng: [{
            lat: -6.9270467,
            lng: 107.6340791
        }]
    }
];

</script>
@endsection

@section('content')
<div class="container">

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

        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
        @endif

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">Hotel Menu </h2>
                <div class="card-body">

                    <div id="map" style="height: 500px;">INI MAP</div>

                    <script src="{{ asset('js/maps.js') }}"></script>
                    <script src="{{ asset('js/markercluster.js') }}"></script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
                    </script>
                    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

                    @foreach ($hotel as $data )
                        
                    <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama Hotel</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->ht_name }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('/hotel/show',$data->id) }}">Show</a>
                                    <form action="{{ route('/favourites/store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fv_user_id" name="fv_user_id" value="{{ Auth::user()->id }}" hidden>
                                            <input type="text" class="form-control" id="fv_hotel_id" name="fv_hotel_id" value="{{ $data->id }}" hidden>
                                            <input type="text" class="form-control" id="fv_hotel_name" name="fv_hotel_name" value="{{ $data->ht_name }}" hidden>
                                            <input type="text" class="form-control" id="fv_count" name="fv_count" value="1" hidden>
                                        </div>
                                        <br>
                                        <button href="submit" class="btn btn-dark">Tambah ke Favorit</button>
                                        </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection 