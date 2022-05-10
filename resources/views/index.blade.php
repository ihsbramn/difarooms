@extends('layouts.app')

@section('content')
<div class="container"> 
        <div class="row justify-content-center">
            <div class="col">
                <h2 style="text-align: center">Welcome to Difa Rooms</h2>
                @if (Auth::check())
                <div class="card">
                    <div class="card-header">{{ __('Greetings 😁') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>Welcome {{ Auth::user()->name }}</p>
                        @if (Auth::user()->is_admin == 1)
                        <a class="btn btn-light" href="{{ 'admin' }}">Menu Admin</a>
                        @endif
                        <a class="btn btn-light" href="{{ 'hotel' }}">Menu Hotel</a>
                        <a class="btn btn-light" href="{{ 'forum' }}">Menu Forum</a>
                    </div>
                </div>
            </div>
        </div>   
    @else
    @endif
</div>
@endsection
