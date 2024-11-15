@php
    $ayar=\App\Http\Controllers\HomeController::getayar();
@endphp
@section('fheader')
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> {{$ayar->telefon}}</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> {{$ayar->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                @if ($ayar->facebook != null) <li><a href="{{$ayar->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li> @endif
                                @if ($ayar->twitter != null) <li><a href="{{$ayar->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li> @endif
                                @if ($ayar->instagram != null) <li><a href="{{$ayar->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li> @endif
                                @if ($ayar->youtube != null) <li><a href="{{$ayar->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li> @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{route('homepage')}}"><img src="{{asset('assest\front\images\logo.png')}}" height="40" /><img src="{{asset('assest\admin\icon\kitaplar.png')}}" height="50" /></a>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">


                                @auth
                                    <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                @endauth
                                @guest()
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="{{route('admin_login')}}"><i class="fa fa-lock"></i> Login</a></li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{route('homepage')}}" class="active">Home</a></li>
                                <li><a href="{{route('homepage')}}" >Hakkımızda</a></li>
                                <li><a href="{{route('homepage')}}" >Kampanyalar</a></li>
                                <li><a href="{{route('homepage')}}" >Yeni Kitaplar</a></li>
                                <li><a href="{{route('homepage')}}" >Referanslar</a></li>
                                <li><a href="{{route('homepage')}}" >SSS</a></li>
                                <li><a href="{{route('homepage')}}" >İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
@endsection
