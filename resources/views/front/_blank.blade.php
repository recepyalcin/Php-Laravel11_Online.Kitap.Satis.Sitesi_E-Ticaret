@extends('front.fmaster')

@section('title', 'blank')

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="brands-name"  >
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{route('homepage')}}"> Home</a></li>
                            <li><a href="#"> Profil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    PROFİL
                </div>
            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
