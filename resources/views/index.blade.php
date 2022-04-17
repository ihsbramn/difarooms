@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    @endif
</div>
@endsection
