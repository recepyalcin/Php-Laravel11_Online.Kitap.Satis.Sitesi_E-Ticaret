<div class="left-sidebar">
    <h2>Kullanıcı Profili</h2>
    <div class="brands-name"  >
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{route('myprofile')}}"> Profilim</a></li>
        <li><a href="{{route('user_siparisler')}}"> Siparişlerim</a></li>
        <li><a href="#"> Yorumlarım</a></li>
        <li><a href="{{route('user_sepet')}}"> Sepetim</a></li>
        <li><a href="#"> Mesajlarım</a></li>
        <li><a href="{{route('logout')}}"> Çıkış</a></li>
        @php
            $userRoles = Auth::user()->rollers()->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif

    </ul>
</div>
</div>
