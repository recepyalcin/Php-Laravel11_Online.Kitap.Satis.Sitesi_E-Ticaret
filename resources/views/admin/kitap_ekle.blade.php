@extends('layouts.admin')

@section('title', 'Kitap Ekle')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Kitap Ekle</h1>
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
                                                <form role="form" action="{{route('admin_kitap_kaydet')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <select class="form-control" name="kategori_id">
                                                            <option value="0" selected="selected">Ana Kategori</option>
                                                            @foreach($datalist as $rs)
                                                                <option value="{{$rs->id}}">{{$rs->ad}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-group">
                                                            <label>Adı</label>
                                                            <input name="ad" class="form-control" >
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
                                                            <label>Yazarı</label>
                                                            <input type="text" name="yazar" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Yayınevi</label>
                                                            <input name="yayinevi" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Basım Yılı</label>
                                                            <input name="basim_yili" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Türü</label>
                                                            <input name="tur_id" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alış Fiyatı</label>
                                                            <input type="text" name="alis_fiyat" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Satış Fiyatı</label>
                                                            <input type="text" name="satis_fiyat" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Stok</label>
                                                            <input type="number" name="stok" value="0" class="form-control"   >
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Detay</label>
                                                            <textarea id="summernote" name="detay" ></textarea>
                                                            <script type="text/javascript">
                                                                $(document).ready(function() {
                                                                    $('#summernote').summernote();
                                                                });
                                                            </script>
                                                        </div>
                                                        <label>Durum</label>
                                                        <select class="form-control" name="durum">
                                                            <option value="0" selected="selected">Durum</option>
                                                            <option>True</option>
                                                            <option>False</option>
                                                        </select>
                                                        <div class="form-group">
                                                            <label>Slug</label>
                                                            <input type="text" name="slug" class="form-control" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Resim Ekle</label>
                                                            <input type="file" name="resim" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Kitap Ekle</button>
                                                    </div>
                                                </form>
                                            </div></div>
                                        </div>
                                    </div>
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

