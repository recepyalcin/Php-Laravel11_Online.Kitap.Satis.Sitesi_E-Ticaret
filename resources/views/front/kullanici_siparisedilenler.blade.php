@extends('front.fmaster')

@section('title', 'Sipariş Detayları')

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
                <section id="cart_items">
                    <div class="col-sm-10">
                        <h2 class="title text-center">SİPARİŞ DETAYLARI</h2>
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">

                                <thead>
                                <tr class="cart_menu">
                                    <td class="image">Resim</td>
                                    <td class="product">Kitap</td>
                                    <td class="price" style="text-align: center"> Fiyat</td>
                                    <td class="quantity" style="text-align: center">Miktar</td>
                                    <td class="total" style="text-align: center">Toplam</td>
                                    <td class="status" style="text-align: center">Durum</td>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach ( $datalist as $rs)

                                    <tr>
                                        <td class="cart_product">
                                            @if ($rs->kitap->resim)
                                                <img src="{{ Storage::url($rs->kitap->resim)}}" height="50" alt="">
                                            @endif
                                        </td>
                                        <td class="cart_description">
                                            <h4>
                                                <a href="{{route('kitap',['id' => $rs->kitap->id,'slug' => $rs->kitap->slug ])}}">
                                                    {{ $rs->kitap->ad}}</a></h4>

                                        </td>
                                        <td class="cart_price" style="text-align: center">
                                            <p>{{$rs->kitap->satis_fiyat}} ₺</p>
                                        </td>

                                        <td class="cart_quantity" style="text-align: center">
                                            <p>{{$rs->miktar}} </p>
                                        </td>
                                        <td class="cart_total" style="text-align: center">
                                            <p class="cart_total_price">{{$rs->tutar}} ₺</p>
                                        </td>
                                        <td class="cart_description" style="text-align: center">
                                            <h4>{{ $rs->durum}}</a></h4>

                                        </td>

                                        @endforeach
                                    </tr>

                                </tbody>

                            </table>
                            <table class="table table-condensed">

                                <tbody>


                                    <tr>
                                        <td style="width: 60%">

                                        </td>

                                        <td class="cart_total">
                                            <p class="cart_total_price"><b>TOPLAM = {{$rs->siparis->toplam}}</b> ₺</p>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </section> <!--/#cart_items-->

            </div>
        </div>


    </section>
    <p></p>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
