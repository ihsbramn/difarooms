@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-center">Welcome Admin</h1>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Welcome {{ Auth::user()->name }}</p>
                    <a class="btn btn-light" href="{{ 'hotel/admin' }}">Kelola Hotel</a>
                    <a class="btn btn-light" href="">Kelola Forum</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
