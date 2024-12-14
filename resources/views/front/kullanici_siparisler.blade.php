@extends('front.fmaster')

@section('title', 'Siparişlerim')

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
                        <h2 class="title text-center">SİPARİŞLERİM</h2>
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">

                                <thead>
                                <tr class="cart_menu">
                                    <td class="image">Resim</td>
                                    <td class="product">Kitap</td>
                                    <td class="price">Fiyat</td>
                                    <td class="quantity">Miktar</td>
                                    <td class="total">Toplam</td>
                                    <td class="durum">Durum</td>
                                    <td class="action">İşlem</td>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $total=0;
                                @endphp


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
                                        <td class="cart_price">
                                            <p>{{$rs->kitap->satis_fiyat}} ₺</p>
                                        </td>

                                        <td class="cart_quantity">

                                            <div class="cart_quantity_button">
                                                <form action="{{route('user_sepet_guncelle',['id' => $rs->id])}}"
                                                      method="post">
                                                    @csrf
                                                    <input name="miktar" type="number" value="{{$rs->miktar}}" min="1"
                                                           max="{{$rs->kitap->miktar}}" onchange="this.form.submit()">
                                                </form>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">{{ $rs->kitap->satis_fiyat * $rs->miktar}} ₺</p>
                                        </td>
                                        <td>{{ $rs->durum}}</td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete"
                                               href="{{route('user_sepet_sil', ['id' => $rs->id])}}"
                                               onclick="return confirm('Silmek istediğinizden emin misiniz?')"><i
                                                    class="fa fa-times"></i></a>
                                        </td>


                                        </td>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section> <!--/#cart_items-->
            </div>


        </div>
        </div>
    </section>
    <p> </p>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
