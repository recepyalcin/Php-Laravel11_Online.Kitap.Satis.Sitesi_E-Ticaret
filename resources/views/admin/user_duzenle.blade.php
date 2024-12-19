@extends('layouts.admin')

@section('title', 'Kullanıcı Düzenle')
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
                <h1 class="page-header">Kullanıcı Düzenle</h1>
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
                                                <form role="form" action="{{route('admin_user_guncelle',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">

                                                        <div class="form-group">
                                                            <label >Ad Soyad</label>
                                                            <input type="text" id="name" name="name"  value="{{$data->name}}" class="form-control"   >
                                                        </div>
                                                        <div class="form-group">
                                                            <label >E-mail</label>
                                                            <input type="email" name="email" value="{{$data->email}}" class="form-control"   >
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Telefon</label>
                                                            <input type="text" name="telefon"  value="{{$data->telefon}}" class="form-control"   >
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Adres</label>
                                                            <input type="text" name="adres" value="{{$data->adres}}" class="form-control"   >
                                                        </div>

                                                        <div class="form-group">
                                                            <label  >Resim</label>
                                                            <input type="file" name="image"  class="form-control">

                                                            @if ($data->profile_photo_path)
                                                                <img src="{{ Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->

                                                    <button type="submit"  class="btn btn-primary">Kullanıcı Güncelle</button>

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

