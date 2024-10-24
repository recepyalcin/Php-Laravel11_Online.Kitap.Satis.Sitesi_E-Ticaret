@extends('layouts.front.fmaster')

@section('title','Deneme Sayfa')

@section('keywords','Deneme anahtar kelimeler')

@section('description','Deneme açıklama')


@section('fsidebar')
    @include('fsidebar')
@endsection

@section('fslider')
    @include('fslider')
@endsection

@section('content')
    @include('content')
@endsection
