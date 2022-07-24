@extends('errors::minimal')

@section('title', __('Too Many Requests'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Mohon maaf, Anda mengirimkan terlalu banyak permintaan pada server kami. Mohon coba lagi nanti.</p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/429.png') }}" alt="Error 429">
@endsection
