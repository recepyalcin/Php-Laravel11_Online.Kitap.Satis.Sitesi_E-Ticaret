@extends('front.fmaster')

@section('title','Ana Sayfa')

@section('keywords','Deneme anahtar kelimeler')

@section('description','Deneme açıklama')

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
