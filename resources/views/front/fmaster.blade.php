<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ asset('assest\front\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assest\front\css\/price-range.css') }}">


    <script src="{{ asset('assest\front\js\html5shiv.js') }}"></script>
    <script src="{{ asset('assest\front\js\respond.min.js') }}"></script>
    <script src="{{ asset('assest\front\js\jquery.js') }}"></script>
    <script src="{{ asset('assest\front\js\price-range.js') }}"></script>
    <script src="{{ asset('assest\front\js\query.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assest\front\js\bootstrap.min.js') }}"></script>
    <script src="{{ asset('assest\front\js\jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assest\front\js\main.js') }}"></script>


</head><!--/head-->

<body>
<!--/header-->

@yield('fheader')

<!--slider-->
@yield('fslider')

<!--sidebar-->
@yield('fsidebar')

<!--content-->
@yield('content')

<!--footer-->
@yield('ffooter')



<script src="{{ asset('assest\front\js\jquery.js') }}"></script>
<script src="{{ asset('assest\front\js\bootstrap.min.js') }}"></script>
<script src="{{ asset('assest\front\js\jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assest\front\js\price-range.js') }}"></script>
<script src="{{ asset('assest\front\js\query.prettyPhoto.js') }}"></script>
<script src="{{ asset('assest\front\js\main') }}"></script>

</body>
</html>
