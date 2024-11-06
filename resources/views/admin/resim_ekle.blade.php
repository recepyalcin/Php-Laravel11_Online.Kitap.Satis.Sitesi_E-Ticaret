@extends('layouts.admin')

@section('title', 'Resim Galerisi')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->

            <div class="col-lg-12">
                <!-- Content Wrapper. Contains page content -->
                <div class="col-lg-12">
                    <h2 class="page-header">Resim Ekle - {{$data->ad}}</h2>
                </div>
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
                                                <form role="form" action="{{route('admin_resim_kaydet',['kitap_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">

                                                        <div class="form-group">
                                                            <label>Resim Adı</label>
                                                            <input id="baslik" name="baslik" class="form-control" >
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Resim Ekle</label>
                                                            <input type="file" name="resim" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Resim Ekle</button>
                                                    </div>
                                                </form>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Başlık</th>
                                                        <th>Resim</th>
                                                        <th>İşlem</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ( $resimler as $rs)
                                                        <tr>
                                                            <td>{{ $rs->id}}</td>
                                                            <td>{{ $rs->baslik}}</td>
                                                            <td>
                                                                @if ($rs->resim)
                                                                    <img src="{{ Storage::url($rs->resim)}}" height="60" alt="">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin_resim_sil', ['id' => $rs->id,'kitap_id'=>$data->id])}}"  onclick="return confirm('Silmek istediğinizden emin misiniz?')" >
                                                                    <img src="{{asset('assest\admin\icon\sil.png')}}" height="30"></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
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

