<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        @if (Auth::user()->profile_photo_path)
                            <img src="{{ Storage::url(Auth::user()->profile_photo_path)}}"
                                 height="50" style="border-radius: 10px" alt="">
                        @endif
                    </div>
                    <div class="user-info">

                        <div class="info">
                            @auth
                        <div><a href="#" class="info" style="color:black; font-size: 18px"><strong>{{ Auth::user()->name }}</strong> </a></div>
                    <div> <a href="{{ route('logout') }}" class="info"style=" font-size: 16px">&emsp;&emsp; Logout</a></div>
                            @endauth
                        </div>

                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
                </div>
                <!--end search section-->
            </li>

            <li class="nav-item">
                <a href="{{ route('admin_kategori') }}"><img src="{{asset('assest\admin\icon\kategori.png')}}" height="30">Kategoriler</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_kitap') }}"><img src="{{asset('assest\admin\icon\kitaplar.png')}}" height="30">Kitaplar</a>
            </li>

            <li class="nav-item"> </li>
            <li class="nav-item">
                <a href="{{route('admin_ayar')}}" class="nav-link">
                    <p class="text"><img src="{{asset('assest\admin\icon\ayar.png')}}" height="30">  Ayarlar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin_mesaj')}}" class="nav-link">
                    <p class="text"><img src="{{asset('assest\admin\icon\mesaj.png')}}" height="30"> Mesajlar </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin_users')}}" class="nav-link">

                    <p><img src="{{asset('assest\admin\icon\users.png')}}" height="30">  Kullanıcılar</p>
                </a>
            </li>
            <li class="">
                <a href=""><img src="{{asset('assest\admin\icon\siparis.png')}}" height="30">  Siparişler <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                    <li>
                        <a href="{{route('admin_siparisler')}}"> &nbsp &nbsp &nbsp Tüm Siparişler</a>
                    </li>
                    <li>
                        <a href="{{route('admin_siparis_liste',['durum'=>'Yeni'])}}"> &nbsp &nbsp &nbsp Yeni Siparişler</a>
                    </li>
                    <li>
                        <a href="{{route('admin_siparis_liste',['durum'=>'Onaylandı'])}}">  &nbsp &nbsp &nbsp Onaylanan Siparişler</a>
                    </li>
                    <li>
                        <a href="{{route('admin_siparis_liste',['durum'=>'Kargolandı'])}}"> &nbsp &nbsp &nbsp Kargodaki Siparişler</a>
                    </li>
                    <li>
                        <a href="{{route('admin_siparis_liste',['durum'=>'Tamamlandı'])}}"> &nbsp &nbsp &nbsp Tamamlanan Siparişler</a>
                    </li>
                    <li>
                        <a href="{{route('admin_siparis_liste',['durum'=>'İptal Edildi'])}}"> &nbsp &nbsp &nbsp Kargodaki Siparişler</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>

        </ul>

        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
