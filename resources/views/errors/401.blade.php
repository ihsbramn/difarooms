@extends('errors::minimal')

@section('title', __('Unauthorized'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Akun anda ditolak untuk mengakses halaman ini</p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/401.png') }}" alt="Error 401">
@endsection

