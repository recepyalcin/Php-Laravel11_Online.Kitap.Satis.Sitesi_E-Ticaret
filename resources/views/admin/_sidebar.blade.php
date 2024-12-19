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
                <a href="{{ route('admin_kategori') }}"><img src="{{asset('assest\admin\icon\kategori.png')}}" height="22">Kategoriler</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_kitap') }}"><img src="{{asset('assest\admin\icon\kitaplar.png')}}" height="22">Kitaplar</a>
            </li>

            <li class="nav-item"> </li>
            <li class="nav-item">
                <a href="{{route('admin_ayar')}}" class="nav-link">
                    <p class="text"><img src="{{asset('assest\admin\icon\ayar.png')}}" height="20">  Ayarlar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin_mesaj')}}" class="nav-link">
                    <p class="text"><img src="{{asset('assest\admin\icon\mesaj.png')}}" height="20"> Mesajlar </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin_users')}}" class="nav-link">

                    <p><img src="{{asset('assest\admin\icon\users.png')}}" height="20">  Kullanıcılar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">

                    <p><img src="{{asset('assest\admin\icon\bilgi.png')}}" height="20">  Bilgi</p>
                </a>
            </li>

        </ul>

        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
