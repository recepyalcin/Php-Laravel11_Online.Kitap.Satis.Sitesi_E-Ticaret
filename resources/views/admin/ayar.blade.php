@extends('layouts.admin')

@section('title', 'Ayar Düzenle')
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
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">

                    <!-- Main content -->
                    <section class="content">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="page-header">Ayarları Düzenle</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">

                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form role="form" action="{{route('admin_ayar_guncelle')}}"
                                                              method="post">
                                                            @csrf

                                                            <div class="form-group">
                                                                <!--Basic Tabs   -->
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        Basic Tabs
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <ul class="nav nav-tabs">
                                                                            <li class="active"><a href="#genel"
                                                                                                  data-toggle="tab">Genel</a>
                                                                            </li>
                                                                            <li><a href="#smtp" data-toggle="tab">Smtp
                                                                                    E-mail</a>
                                                                            </li>
                                                                            <li><a href="#sosyalmedya"
                                                                                   data-toggle="tab">Sosyal Medya</a>
                                                                            </li>
                                                                            <li><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a>
                                                                            </li>
                                                                            <li><a href="#iletisim" data-toggle="tab">İletişim</a>
                                                                            </li>
                                                                            <li><a href="#referanslar"
                                                                                   data-toggle="tab">Referanslar</a>
                                                                            </li>
                                                                        </ul>

                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade in active"
                                                                                 id="genel">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">

                                                                                        </div>

                                                                                        <input type="hidden" id="id"
                                                                                               name="id"
                                                                                               value="{{$data->id}}"
                                                                                               class="form-control">

                                                                                        <div class="form-group">
                                                                                            <label>Başlık</label>
                                                                                            <input type="text"
                                                                                                   name="baslik"
                                                                                                   value="{{$data->baslik}}"
                                                                                                   class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Keywords</label>
                                                                                            <input type="text"
                                                                                                   name="keywords"
                                                                                                   value="{{$data->keywords}}"
                                                                                                   class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Açıklama</label>
                                                                                            <input type="text"
                                                                                                   name="aciklama"
                                                                                                   value="{{$data->aciklama}}"
                                                                                                   class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Şirket</label>
                                                                                            <input type="text"
                                                                                                   name="sirket"
                                                                                                   value="{{$data->sirket}}"
                                                                                                   class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Adres</label>
                                                                                            <input type="text"
                                                                                                   name="adres"
                                                                                                   class="form-control"
                                                                                                   value="{{$data->adres}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Telefon</label>
                                                                                            <input type="text"
                                                                                                   name="telefon"
                                                                                                   value="{{$data->telefon}}"
                                                                                                   class="form-control">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>email</label>
                                                                                            <input type="text"
                                                                                                   name="email"
                                                                                                   value="{{$data->email}}"
                                                                                                   class="form-control">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label>Durum</label>
                                                                                            <select class="form-control "
                                                                                                    name="durum"
                                                                                                    style="width: 100%;">
                                                                                                <option selected="selected">{{$data->durum}}</option>
                                                                                                <option>True</option>
                                                                                                <option>False</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="smtp">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">


                                                                                            <div class="form-group">
                                                                                                <label>Smtp
                                                                                                    Server</label>
                                                                                                <input type="text"
                                                                                                       name="smtpserver"
                                                                                                       value="{{$data->smtpserver}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Smtp
                                                                                                    Email</label>
                                                                                                <input type="text"
                                                                                                       name="smtpemail"
                                                                                                       value="{{$data->smtpemail}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Smtp
                                                                                                    Şifre</label>
                                                                                                <input type="password"
                                                                                                       name="smtpsifre"
                                                                                                       value="{{$data->smtpsifre}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Smtpport</label>
                                                                                                <input type="number"
                                                                                                       name="smtpport"
                                                                                                       value="{{$data->smtpport}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="sosyalmedya">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">

                                                                                            <div class="form-group">
                                                                                                <label>Facebook</label>
                                                                                                <input type="text"
                                                                                                       name="facebook"
                                                                                                       value="{{$data->facebook}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Instagram</label>
                                                                                                <input type="text"
                                                                                                       name="instagram"
                                                                                                       value="{{$data->instagram}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Twitter</label>
                                                                                                <input type="text"
                                                                                                       name="twitter"
                                                                                                       value="{{$data->twitter}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Youtube</label>
                                                                                                <input type="text"
                                                                                                       name="youtube"
                                                                                                       value="{{$data->youtube}}"
                                                                                                       class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="tab-pane fade" id="hakkimizda">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">

                                                                                            <div class="form-group">
                                                                                                <textarea class="col-lg-12" rows="10"
                                                                                                        id="hakkimizda"
                                                                                                        name="hakkimizda"  >{{$data->hakkimizda}}</textarea>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade"
                                                                                 id="iletisim">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">
                                                                                            <div class="form-group">
                                                                                                <textarea class="col-lg-12" rows="10"
                                                                                                        id="iletisim"
                                                                                                        name="iletisim">{{$data->iletisim}}</textarea>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="tab-pane fade"
                                                                                 id="referanslar">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading">

                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="table-responsive">
                                                                                            <div class="form-group">
                                                                                                <textarea class="col-lg-12" rows="10"
                                                                                                        id="referanslar"
                                                                                                        name="referanslar">{{$data->referanslar}}</textarea>


                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                        <!--End Basic Tabs   -->


                                                                    </div>
                                                                </div>
                                                                <script>
                                                                    $(document).ready(function () {
                                                                        $('#hakkimizda').summernote();
                                                                        $('#iletisim').summernote();
                                                                        $('#referanslar').summernote();
                                                                    });
                                                                </script>


                                                                <button type="submit"
                                                                        class="btn btn-primary">
                                                                    Ayar
                                                                    Güncelle
                                                                </button>
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

                                    <!-- /.card -->
                                </div>
                            </div>
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

