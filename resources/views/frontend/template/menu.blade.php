<header class="header-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('assets/img/logosiba.png') }}" alt="Transland" />
                    </a>
                </div>
            </div>
            <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                <div class="menu-wrap">
                    <div class="main-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li>
                                <a href="#">Tentang <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('sejarah-perusahaan') }}">Sejarah Perusahaan</a></li>
                                    <li><a href="{{ route('visi') }}">Visi, Misi, dan Tujuan</a></li>
                                    <li><a href="{{ route('cabang') }}">Kantor Cabang dan Agen</a></li>
                                    <li><a href="{{ route('mitra') }}">Mitra Kami</a></li>
                                    <li><a href="{{ route('portfolio') }}">Portofolio</a></li>
                                    <li><a href="{{ route('videos') }}">Videos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Layanan</a>
                            </li>
                            <li><a href="#">Promo</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a target="_blank" href="https://sibacargo.co.id">Tracking</a></li>
                            <li><a target="_blank" href="https://sibacargo.co.id/">Cek Tarif</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                <div class="mobile-nav-wrap">
                    <div id="hamburger"><i class="fal fa-bars"></i></div>
                    <!-- mobile menu - responsive menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li>
                                    <a class="has-arrow" href="#">Tentang</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('sejarah-perusahaan') }}">Sejarah Perusahaan</a></li>
                                        <li><a href="{{ route('visi') }}">Visi, Misi, dan Tujuan</a></li>
                                        <li>
                                            <a href="{{ route('cabang') }}">Kantor Cabang dan Agen</a>
                                        </li>
                                        <li><a href="{{ route('mitra') }}">Mitra Kami</a></li>
                                        <li><a href="{{ route('portfolio') }}">Portofolio</a></li>
                                        <li><a href="{{ route('videos') }}">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Layanan</a></li>
                                <li><a href="#">Promo</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="#">Tracking</a></li>
                                <li><a href="#">Cek Tarif</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>