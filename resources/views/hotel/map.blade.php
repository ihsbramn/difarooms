@extends('layouts.app')
@section('content')

<style>
    #map {
    height: 100%;
    }
</style>

<div class="container">
    <h1>Map Hotel Terdekat</h1>
    <div id="map"></div>

    <script type="text/javascript">
        let map;

        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
          });
        }
        
        window.initMap = initMap;
        
    </script>
    
    <script async
    src="https://maps.googleapis.com/maps/api/js?key={{ config('app.googleapi_key') }}&callback=initMap">
    </script>
</div>

@endsection