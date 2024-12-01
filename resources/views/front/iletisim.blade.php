@extends('front.fmaster')

@section('title', 'İletişim -'. $ayar->baslik)

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">

                {{$ayar->iletisim}}

            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
