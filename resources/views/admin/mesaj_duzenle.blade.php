<!-- Core CSS - Include with every page -->
<link rel="stylesheet" href="{{ asset('assest\admin/plugins/bootstrap/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assest\admin\font-awesome\css\font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('assest\admin/plugins/pace/pace-theme-big-counter.css') }}">
<link rel="stylesheet" href="{{ asset('assest\admin/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assest\admin/css/main-style.css') }}">
<!-- Page-Level CSS -->
<link rel="stylesheet" href="{{ asset('assest\admin/plugins/morris/morris-0.4.3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assest\admin\plugins\dataTables\dataTables.bootstrap.css') }}">

    <div class="content-wrapper">
        <form role="form"
              action="{{route('admin_mesaj_guncelle',['id'=>$data->id])}}"
              method="post">
            @csrf
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">

                        <!-- Page Header -->
                        <div class="col-lg-12">
                            <h1 class="page-header">Mesaj Detayı</h1>
                        </div>
                        @include('front.mesaj')
                        <div class="col-lg-12">
                            <!-- Content Wrapper. Contains page content -->
                            <div class="content-wrapper">

                                <!-- Main content -->
                                <section class="content">

                                    <!-- Default box -->
                                    <div class="card">
                                        <div class="card-body">

                                            <table class="table table-striped table-bordered table-hover"
                                                   id="dataTables-example">
                                                <tr>
                                                    <th>Id</th> <td>{{ $data->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>İsim</th><td>{{ $data->isim}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>  <td>{{ $data->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>  <td>{{ $data->telefon}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Konu</th><td>{{ $data->konu}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Mesaj</th>   <td>{{ $data->mesaj}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Yönetici Notu</th>
                                                    <td>
                                                        <textarea id="not" name="not" >{{ $data->not}} </textarea>

                                                    </td>
                                                </tr>
                                                <td></td>
                                                <td>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Mesajı Güncelle</button>
                                                    </div>
                                                </td>

                                            </table>
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
                    <!-- end page-wrapper -->
                </div>
            </div>

        </div>
        </form>
    </div>
