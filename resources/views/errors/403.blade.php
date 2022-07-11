@extends('errors::minimal')

@section('title', __('Forbidden'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Anda tidak memiliki izin untuk mengakses halaman ini </p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/403.png') }}" alt="Error 404">
@endsection
