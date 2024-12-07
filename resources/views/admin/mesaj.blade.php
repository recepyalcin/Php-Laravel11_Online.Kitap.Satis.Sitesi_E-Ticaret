@extends('layouts.admin')

@section('title', 'Mesajlar')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Mesaj Listesi</h1>
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
                                            <div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>
                                                            <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label></div></div></div>
                                            <table class="table table-striped table-bordered table-hover"
                                                   id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th style="text-align: center">Id</th>
                                                    <th style="text-align: center">İsim</th>
                                                    <th style="text-align: center">E-Mail</th>
                                                    <th style="text-align: center">Telefon</th>
                                                    <th style="text-align: center">Konu</th>
                                                    <th style="text-align: center">Mesaj</th>
                                                    <th style="text-align: center">Yönetici Notu</th>
                                                    <th style="width: 5px; text-align: center" colspan="3" > Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($datalist as $rs)

                                                    <tr class="odd gradeX">
                                                        <td style="text-align: center">{{$rs->id}}</td>
                                                        <td>{{$rs->isim}}</td>
                                                        <td>{{$rs->email}}</td>
                                                        <td>{{$rs->telefon}}</td>
                                                        <td>{{$rs->konu}}</td>
                                                        <td>{{$rs->mesaj}}</td>
                                                        <td>{{$rs->not}}</td>
                                                        <td>{{$rs->durum}}</td>


                                                        <td style="text-align: center"><a href="{{route('admin_mesaj_duzenle', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')"> <img src="{{asset('assest\admin\icon\duzenle.png')}}" height="25"  alt=""> </a></td>
                                                        <td style="text-align: center"><a href="{{route('admin_mesaj_sil', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" ><img src="{{asset('assest\admin\icon\sil.png')}}" height="30" alt=""></a></td>

                                                    </tr>
                                                @endforeach

                                                </tbody>

                                            </table>
                                            <div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all"></div></div>
                                                <div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination">
                                                            <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                                                            <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                            <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                                                            <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul>
                                                    </div>
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
                            Footer
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

