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
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Ad Soyad</th>
                                            <th>Telefon</th>
                                            <th>E-mail</th>
                                            <th>Adres</th>
                                            <th>Toplam</th>
                                            <th>Tarih</th>
                                            <th>Durum</th>
                                            <th style="width: 5px" colspan="2"> Detay</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as $rs)
                                            <tr>
                                                <td>{{ $rs->id}}</td>
                                                <td>{{ $rs->ad_soyad}}</td>
                                                <td>{{ $rs->telefon}}</td>
                                                <td>{{ $rs->email}}</td>
                                                <td>{{ $rs->adres}}</td>
                                                <td>{{ $rs->toplam}}</td>
                                                <td>{{ $rs->created_at}}</td>
                                                <td style="text-align: center">{{ $rs->durum}}</td>
                                                <td style="text-align: center"><a href="{{route('user_siparis_goster', ['id' => $rs->id])}}" ><img src="{{asset('assest/admin/icon/siparis.png')}}" height="30" alt=""></a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.card-body -->
                    </div>
                    </div>
                </section> <!--/#cart_items-->
            </div>




        </div>

    </section>
    <p> </p>

@endsection

@section('ffooter')
    @include('front.ffooter')
@endsection
