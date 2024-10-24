<!DOCTYPE html>
<html>
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


    @yield('css')
    @yield('javascript')
</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    @include('layouts.admin._header')
    @include('layouts.admin._sidebar')
    @yield('content')


</body>

</html>
