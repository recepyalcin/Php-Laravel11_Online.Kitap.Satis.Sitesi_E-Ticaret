@extends('front.fmaster')

@section('title', 'Hakkımızda -'. $ayar->baslik)

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">

                {{$ayar->hakkimizda}}

            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
