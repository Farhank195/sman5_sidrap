<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="img/Banner-TOP-SMAN5-Sidrap-4.png" alt="">
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}" class="{{ request()->is('index') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a></li>
                <li><a href="{{ route('sarana') }}" class="{{ request()->is('sarana') ? 'active' : '' }}">Sarana & Prasarana</a></li>
                <li><a href="{{ route('kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak Kami</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>