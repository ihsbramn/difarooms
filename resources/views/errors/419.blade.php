@extends('errors::minimal')

@section('title', __('Page Expired'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Mohon maaf, sesi Anda telah berakhir. Silahkan refresh dan coba lagi.</p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/419.png') }}" alt="Error 419">
@endsection
