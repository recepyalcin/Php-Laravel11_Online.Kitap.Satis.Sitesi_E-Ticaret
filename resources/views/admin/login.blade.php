<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin\font-awesome\css\font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/plugins/pace/pace-theme-big-counter.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\admin/css/main-style.css') }}">

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <img src="{{asset('assest\admin\img\logo.png')}}" alt=""/>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin_logincheck') }}" method="post">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control"
                                       placeholder="Password">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-primary btn-block">Giriş</button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="{{asset('assest\admin\plugins\jquery-1.10.2.js')}}"></script>
<script src="{{asset('assest\admin\plugins\bootstrap\bootstrap.js')}}"></script>
<script src="{{asset('assest\admin\plugins\metisMenu\jquery.metisMenu.js')}}"></script>

</body>

</html>
