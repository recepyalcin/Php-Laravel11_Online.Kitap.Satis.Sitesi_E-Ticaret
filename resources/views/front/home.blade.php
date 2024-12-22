@php
    $ayar=\App\Http\Controllers\HomeController::getayar();
@endphp
@extends('front.fmaster')

@section('title', $ayar->baslik)

@section('keywords' ){{$ayar->keywords}} @endsection

@section('description') {{$ayar->aciklama}} @endsection

@section('fheader')
    @include('front.fheader')
@endsection

@section('fslider')
    @include('front.fslider')
@endsection

@section('fsidebar')
    @include('front.fsidebar')
@endsection

@section('content')
    @include('front.content')
@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
