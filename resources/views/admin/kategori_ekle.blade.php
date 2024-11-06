@extends('layouts.admin')

@section('title', 'Kategori Ekle')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Kategori Ekle</h1>
            </div>
            <div class="col-lg-12">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">

                    <!-- Main content -->
                    <section class="content">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">

                                <div class="panel panel-default">

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form role="form" action="{{route('admin_kategori_olustur')}}"
                                                      method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Parent</label>
                                                        <select class="form-control" name="parent_id">
                                                            <option value="0" selected="selected">Ana Kategori</option>
                                                           @foreach($datalist as $rs)
                                                               <option value="{{$rs->id}}">{{$rs->ad}}</option>
                                                           @endforeach
                                                        </select>
                                                        <div class="form-group">
                                                            <label>Adı</label>
                                                            <input type="text" name="ad"class="form-control" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                            <input type="text" name="keywords" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Açıklama</label>
                                                            <input type="text" name="aciklama" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Slug</label>
                                                            <input type="text" name="slug" class="form-control" >
                                                        </div>
                                                        <label>Durum</label>
                                                        <select class="form-control" name="durum">
                                                            <option value="0" selected="selected">Durum</option>
                                                            <option>True</option>
                                                            <option>False</option>
                                                        </select>

                                                        <div class="form-group">
                                                            <label>Resim Ekle</label>
                                                            <input type="file">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Kategori Ekle</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                            </div>
                            <!-- /.card-footer-->
                        </div>
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

