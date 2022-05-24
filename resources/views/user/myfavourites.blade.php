@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h4 class="text-center card-header">My Favourites Hotel</h2>
                <div class="card-body">

                    @foreach ($fav as $data )
                        
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
                                <td>{{ $data->fv_hotel_name }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('/hotel/show',$data->fv_hotel_id) }}">Show</a>
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