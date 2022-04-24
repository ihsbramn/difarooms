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
        <div class="col-md-8">
            <div class="card">
                <h4 class="text-center card-header">Hotel Menu Admin</h2>
                <div class="card-body">
                    <a class="btn btn-light" href="{{ 'create' }}">Tambah Hotel</a>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection