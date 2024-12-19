<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin\font-awesome\css\font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/pace/pace-theme-big-counter.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/main-style.css') }}">
    <!-- Page-Level CSS -->
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/morris/morris-0.4.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin\plugins\dataTables\dataTables.bootstrap.css') }}">

    @yield('css')
    @yield('javascript')
</head>
<!--  wrapper -->
<div class="col-lg-6">
    <!--    Context Classes  -->
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="page-header">Kullanıcı Bilgileri</h3>
        </div>
        <table class="table table-striped table-bordered table-hover"
               id="dataTables-example">
            <tbody>

            <tr class="odd gradeX">
                <thead>
            <tr>
                <th style="width: 20%">Id</th>
                <td>{{ $data->id}}</td>
            </tr>
            <tr>
                <th>Ad Soyad</th>
                <td>{{ $data->name}}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{ $data->email}}</td>
            </tr>

            <tr>
                <th>Roller</th>
                <td>
                    <table>
                        @foreach($data->rollers as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>
                                    <a href="{{route('admin_user_rol_sil', ['userid' => $data->id,'rolid'=>$row->id])}}"
                                       onclick="return confirm('Silmek istediğinize emin misiniz?')"> <img
                                            src="{{asset('assest/admin/icon/sil.png')}}" height="25" alt=""></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>


                </td>
            </tr>

            <tr>
                <th>Rol Ekle</th>
                <td>
                    <form role="form" action="{{route('admin_user_rol_ekle',['id'=>$data->id])}}"
                          method="post" enctype="multipart/form-data">
                        @csrf

                        <select name="rolid">
                            @foreach($datalist as $rs)
                                <option value="{{ $rs->id}}">{{ $rs->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Rol Ekle</button>
                    </form>

                </td>
            </tr>


            </tbody>

        </table>
    </div>
</div>

