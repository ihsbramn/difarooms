@extends('errors::minimal')

@section('title', __('Server Error'))

@section('code')
    <p style="font-weight: 500; font-size: 24px; color: #D90707;">Error!</p>
    <p style="font-weight: 600; font-size: 20px; color: #000000;">Mohon maaf, terdapat gangguan teknis ketika memproses permintaan Anda </p>
@endsection

@section('image')
    <img src="{{ URL::asset('/img/500.png') }}" alt="Error 404">
@endsection
