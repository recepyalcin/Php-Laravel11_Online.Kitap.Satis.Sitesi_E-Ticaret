@extends('layouts.admin')

@section('title', 'Admin Sipariş Listesi')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Sipariş Listesi</h1>
            </div>
            <div class="col-lg-12">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">

                    <section class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default">
                                    @include('front.mesaj')

                                    <div class="panel-body">
                                        <div class="table-responsive">

                                            <table class="table table-striped table-bordered table-hover"
                                                   id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Kullanıcı</th>
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
                                                        <td>
                                                            <a href="{{route('admin_user_roller',['id' => $rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                                                {{ $rs->user->name}}
                                                            </a>
                                                        </td>
                                                        <td>{{ $rs->ad_soyad}}</td>
                                                        <td>{{ $rs->telefon}}</td>
                                                        <td>{{ $rs->email}}</td>
                                                        <td>{{ $rs->adres}}</td>
                                                        <td>{{ $rs->toplam}}</td>
                                                        <td>{{ $rs->created_at}}</td>
                                                        <td style="text-align: center">{{ $rs->durum}}</td>
                                                        <td style="text-align: center"><a href="{{route('admin_siparis_goster', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=10 left=100 width=1100,height=800')"><img src="{{asset('assest/admin/icon/siparis.png')}}" height="30" alt=""></a></td>
                                                    </tr>
                                                @endforeach

                                                </tbody>

                                            </table>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="dataTables_info" id="dataTables-example_info"
                                                         role="alert" aria-live="polite" aria-relevant="all"></div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--End Advanced Tables -->
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                        <!-- /.card-footer-->

                        <!-- /.card -->

                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            </div>

            <!--End Page Header -->
        </div>
    </div>

    <!-- end page-wrapper -->
@endsection

