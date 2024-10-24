@extends('layouts.front.fmaster')

@section('title','Deneme Sayfa')

@section('keywords','Deneme anahtar kelimeler')

@section('description','Deneme açıklama')


@section('fsidebar')
    @include('front.fsidebar')
@endsection

@section('fslider')
    @include('front.fslider')
@endsection

@section('content')
    @include('front.content')
@endsection
