@extends('layouts.admin')

@section('title', 'Kitap Düzenle')
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
                <h1 class="page-header">Kitap Düzenle</h1>
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
                                                <form role="form" action="{{route('admin_kitap_guncelle', ['id'=>$data->id])}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <select class="form-control" name="kategori_id">

                                                            @foreach($datalist as $rs)
                                                                <option value="{{$rs->id}}"
                                                                        @if ($rs->id == $data->kategori_id) selected="selected" @endif>{{$rs->ad}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-group">
                                                            <label>Adı</label>
                                                            <input name="ad" value="{{$data->ad}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Açıklama</label>
                                                            <input type="text" name="aciklama" value="{{$data->aciklama}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Yazarı</label>
                                                            <input type="text" name="yazar" value="{{$data->yazar}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Yayınevi</label>
                                                            <input name="yayinevi" value="{{$data->yayinevi}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Basım Yılı</label>
                                                            <input name="basim_yili" value="{{$data->basim_yili}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Türü</label>
                                                            <input name="tur_id" value="{{$data->tur_id}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alış Fiyatı</label>
                                                            <input type="text" name="alis_fiyat" value="{{$data->alis_fiyat}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Satış Fiyatı</label>
                                                            <input type="text" name="satis_fiyat" value="{{$data->satis_fiyat}}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Stok</label>
                                                            <input type="number" name="stok" value="{{$data->stok}}" class="form-control"   >
                                                        </div>
                                                        <label >Detay</label>
                                                        <textarea id="summernote" name="detay" value="{{$data->detay}}" ></textarea>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#summernote').summernote();
                                                            });
                                                        </script>
                                                        </div>
                                                        <label>Durum</label>
                                                        <select class="form-control" name="durum">
                                                            <option value="0" selected=value="{{$data->durum}}" >Durum</option>
                                                            <option>True</option>
                                                            <option>False</option>
                                                        </select>
                                                        <div class="form-group">
                                                            <label>Slug</label>
                                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Resim Ekle</label>
                                                            <input type="file" name="resim" value="{{$data->resim}}" class="form-control">
                                                            @if ($data->resim)
                                                                <img src="{{ Storage::url($data->resim)}}" height="100" alt="">
                                                            @endif
                                                        </div>
                                                        <button type="submit"  class="btn btn-primary">Kitap Güncelle</button>


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

                        <!-- /.card -->
                        </div>

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

