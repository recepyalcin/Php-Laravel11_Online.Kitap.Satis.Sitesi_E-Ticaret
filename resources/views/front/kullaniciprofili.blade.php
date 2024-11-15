@extends('front.fmaster')

@section('title', 'Kullanıcı Profili')

@section('fheader')
    @include('front.fheader')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    @include('front.kullanicimenu')
                </div>
                <div class="col-sm-10 padding-right">
                    @include('profile.show')
                </div>
            </div>
        </div>

    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
