<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin\font-awesome\css\font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/pace/pace-theme-big-counter.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/main-style.css') }}">
    <!-- Page-Level CSS -->
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/morris/morris-0.4.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin\plugins\dataTables\dataTables.bootstrap.css') }}">

    @yield('css')
    @yield('javascript')
</head>
<!--  wrapper -->
<div class="col-lg-6">
    <!--    Context Classes  -->
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="page-header">Sipariş Bilgileri</h3>
            @include('front.mesaj')
        </div>
        <form role="form" action="{{route('admin_siparis_guncelle',['id'=>$data->id])}}" method="post">
            @csrf
            <table class="table table-striped table-bordered table-hover"
                   id="dataTables-example">

                <tr>
                    <th>Id</th>
                    <td>{{ $data->id}}</td>
                </tr>
                <tr>
                    <th>Kullanıcı</th>
                    <td>{{ $data->user->name}}</td>
                </tr>
                <tr>
                    <th>Ad Soyad</th>
                    <td>{{ $data->ad_soyad}}</td>
                </tr>
                <tr>
                    <th>Adres</th>
                    <td>{{ $data->adres }}</td>
                </tr>
                <tr>
                    <th>Telefon</th>
                    <td>{{ $data->telefon}}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{{ $data->email}}</td>
                </tr>
                <tr>
                    <th>Toplam</th>
                    <td>{{ $data->toplam}}</td>
                </tr>
                <tr>
                    <th>Ip</th>
                    <td>{{ $data->IP}}</td>
                </tr>
                <tr>
                    <th>Oluşturma Tarihi</th>
                    <td>{{ $data->created_at}}</td>
                </tr>
                <tr>
                    <th>Güncelleme Tarihi</th>
                    <td>{{ $data->updated_at}}</td>
                </tr>
                <tr>
                    <th>Durum</th>
                    <td>
                        <select name="durum">
                            <option selected>{{ $data->durum}}</option>
                            <option>Onaylandı</option>
                            <option>İptal Edildi</option>
                            <option>Kargolandı</option>
                            <option>Tamamlandı</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Yönetici Notu:</th>
                    <td><textarea name="not" rows="3" cols="30" value="{{ $data->not}}"> {{ $data->not}} </textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Siparişi Güncelle</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>

        <div class="panel-heading">
            <h4 class="page-header" style="text-align: center">Sipariş Detayı</h4>
        </div>
        <table class="table table-striped table-bordered table-hover"
               id="dataTables-example">
            <thead>
            <tr>
                <th>Kitap</th>
                <th></th>
                <th class="text-center">Fiyat</th>
                <th class="text-center">Miktar</th>
                <th class="text-center">Tutar</th>
                <th class="text-center">Durum</th>
                <th>Note</th>
            </tr>
            </thead>
            <tbody>
            @php
                $total=0;
            @endphp
            @foreach ( $datalist as $rs)
                <form role="form" action="{{route('admin_siparis_item_guncelle',['id'=>$rs->id])}}" method="post">
                    @csrf
                    <tr>
                        <td class="thumb">
                            @if ($rs->kitap->resim)
                                <img src="{{ Storage::url($rs->kitap->resim)}}" height="30" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('kitap',['id' => $rs->kitap->id,'slug' => $rs->kitap->slug ])}}">
                                {{ $rs->kitap->ad}}</a>
                        </td>

                        <td>{{ $rs->kitap->satis_fiyat}}</td>
                        <td> {{$rs->miktar}}</td>
                        <td>{{ $rs->tutar}} ₺</td>

                        <td><select name="durum">
                                <option selected>{{ $rs->durum}}</option>
                                <option>Onaylandı</option>
                                <option>İptal Edildi</option>
                                <option>Kargolandı</option>
                                <option>Tamamlandı</option>
                            </select>
                        </td>
                        <td><textarea name="not" cols="15"> {{ $rs->not}} </textarea></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </td>

                   </tr>
                </form>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th class="empty" colspan="2"></th>
                <th>TOPLAM</th>
                <th colspan="2" class="sub-total">{{$data->toplam}} ₺</th>
            </tr>

            </tfoot>
        </table>
    </div>
</div>

