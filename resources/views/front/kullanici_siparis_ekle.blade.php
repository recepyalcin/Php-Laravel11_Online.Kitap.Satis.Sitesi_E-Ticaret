@extends('front.fmaster')

@section('title', 'Sipariş Ekle')

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
                <div class="col-sm-10">
                    <div class="shopper-informations">
                        <div class="row">
                            <h2 class="title text-center">ÖDENECEK TOPLAM TUTAR: {{$total}}₺</h2>
                            <div class="col-sm-12 clearfix">
                                <div class="col-sm-6">
                                <h4>Sipariş Bilgileri</h4>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Ödeme Bilgileri</h4>
                                </div>

                                <div class="shopper-info">

                                    <div class="form-one">
                                        <form id="checkout-form" action="{{route('user_siparis_kaydet')}}" method="post" >
                                            @csrf
                                            <input class="input" type="text" name="adsoyad" value="{{ Auth::user()->name }}" placeholder="Ad Soyad">
                                            <input class="input" type="email" name="email"  value="{{ Auth::user()->email }}" placeholder="E-mail">
                                            <input class="input" type="text" name="adres"  value="{{ Auth::user()->adres }}" placeholder="Adres">
                                            <input class="input" type="text" name="telefon"  value="{{ Auth::user()->telefon }}" placeholder="Telefon Numarası">

                                            <input type="hidden" name="toplam" value="{{$total}}">
                                            <input class="input" type="text" name="kartisim" value="{{ Auth::user()->name }}" placeholder=" Kart Sahibi Ad Soyad">
                                            <input class="input" type="text" name="kartnumarasi"  value="" placeholder="Kart Numarası">
                                            <input class="input" type="text" name="tarih"  value="" placeholder="Son Kullanma Tarihi mm/yy">
                                            <input class="input" type="text" name="kod"  value="" placeholder="Güvenlik Kodu">

                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-default check_out">Siparişi Tamamla</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>


                            <p> </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
