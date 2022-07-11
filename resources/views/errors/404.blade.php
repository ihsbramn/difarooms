@extends('errors::minimal')

@section('title', __('Not Found'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Halaman yang Anda cari tidak tersedia untuk saat ini. </p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/404.png') }}" alt="Error 404">
@endsection
