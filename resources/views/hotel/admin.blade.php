@extends('layouts.app')
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
                <h4 class="text-center card-header">Hotel Menu Admin</h2>
                <div class="card-body">
                    <a class="btn btn-light" href="{{ 'create' }}">Tambah Hotel</a>
                    <a class="btn btn-light" href="{{ url('admin') }}">back</a>
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
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <form action="{{ route('hotel/destroy',$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> 
                                        Hapus
                                    </button>
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