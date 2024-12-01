@extends('front.fmaster')

@section('title', 'Referanslar -'. $ayar->baslik)

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">

                {{$ayar->referanslar}}

                <div class="col-sm-4">
                        <a href="https://www.kitapyurdu.com/"><img src="{{asset('assest\front\images\ky.jpg')}}" height="100" /></a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.dr.com.tr/"><img src="{{asset('assest\front\images\dr.png')}}" height="100" /></a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.kitapsec.com/"><img src="{{asset('assest\front\images\ks.jpg')}}" height="100" /></a>
                </div>

            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
