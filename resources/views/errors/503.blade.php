@extends('errors::minimal')

@section('title', __('Service Unavailable'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Mohon maaf, server sementara tidak dapat melayani permintaan Anda. Mohon coba lagi nanti.</p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/503.png') }}" alt="Error 503">
@endsection
