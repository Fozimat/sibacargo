<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('assets/img/logosiba.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Tentang</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Sejarah Perusahaan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Visi, Misi, dan Tujuan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Kantor Cabang dan Agen</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Manajemen Kami</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Legalitas Perusahaan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Mitra Kami</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Videos</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-life-preserver"></i>
                        <span>Layanan</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Barang Pindahan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Mobil dan Motor</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Alat Kesehatan</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Bahan Cair</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Elektronik</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Sparepart</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Material</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Container</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Alat Berat</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Proyek Cargo</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-cup-fill"></i>
                        <span>Promo</span>
                    </a>
                </li>

                <li class="sidebar-item  {{ request()->is('admin/blog*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-caret-up-square-fill"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item  {{ request()->is('admin/blog/kategori*') ? 'active' : '' }}">
                            <a href="{{ route('kategori.index') }}">Kategori</a>
                        </li>
                        <li class="submenu-item {{ request()->is('admin/blog/postingan*') ? 'active' : '' }}">
                            <a href="{{ route('postingan.index') }}">Posting</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-compass-fill"></i>
                        <span>Tracking</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Cek Tarif</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-patch-check-fill"></i>
                        <span>Kontak</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('logout') }}" class='sidebar-link' onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="bi bi-power"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>