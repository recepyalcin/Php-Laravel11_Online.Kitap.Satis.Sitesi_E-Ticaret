@extends('layouts.admin')

@section('title', 'Kategoriler')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Kategori Listesi</h1>
            </div>
            <div class="col-lg-12">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">

                    <section class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default">

                                    <div class="card">
                                        <td>&emsp; <button type="button" class="btn btn-outline btn-success"><a href="{{route('admin_kategori_ekle')}}"> <h5><b>Kategori Ekle</b></h5> </a></button></td>
                                    </div>
                                    <div class="panel-body">
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
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover"
                                                   id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th style="width:10%",>Id</th>
                                                    <th style="width:10%">Parent</th>
                                                    <th style="width:40%">Adı</th>
                                                    <th style="width:20%">Resim</th>
                                                    <th style="width:10%">Durum</th>
                                                    <th style="width:10%">Düzenle</th>
                                                    <th style="width:10%">Sil</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($datalist as $rs)

                                                    <tr class="odd gradeX">
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->parent_id}}</td>
                                                        <td>{{$rs->ad}}</td>
                                                        <td>{{$rs->resim}}</td>
                                                        <td>{{$rs->durum}}</td>

                                                        <td><button type="button" class="btn btn-outline btn-warning"><a href="{{route('admin_kategori_duzenle', ['id' => $rs->id])}}"> Düzenle</a></button></td>
                                                        <td><button type="button" class="btn btn-outline btn-danger"><a href="{{route('admin_kategori_sil', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')"  >Sil</a></button></td>

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

