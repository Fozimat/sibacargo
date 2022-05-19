@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner2.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Layanan</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Layanan
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding theme-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5 class="textleft relative">Layanan</h5>
                        <span>Siba Cargo</span>
                        <h2>Kami<span> Melayani</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/air2.jpg')"></div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-airplane-5"></i>
                        </div>
                        <h3><a href="#">Ekspedisi Murah Via Udara</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/ship2.jpg')">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-ship-5"></i>
                        </div>
                        <h3>
                            <a href="#">Ekspedisi Murah Via Laut</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/rail2.jpg')">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-subway"></i>
                        </div>
                        <h3>
                            <a href="#">Ekspedisi Murah Via Darat</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/road2.jpg')">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-truck-2"></i>
                        </div>
                        <h3>
                            <a href="#">Ekspedisi Murah Jasa Pindah Rumah</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/bike2.jpg')">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-food"></i>
                        </div>
                        <h3>
                            <a href="#">Ekspedisi Murah Pengiriman Mobil & Motor</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-our-service">
                    <div class="thumb bg-cover" style="
              background-image: url('assets/img/services/drone-fright2.jpg');
            "></div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-drone-2"></i>
                        </div>
                        <h3>
                            <a href="#">Ekspedisi Murah Project Cargo & Warehousing</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-chose-us section-padding section-bg">
    <div class="container">
        <div class="row mtm-30">
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="section-title-2">
                    <span>
                        <h1>Skala Prioritas</h1>
                    </span>
                    <h2>Tiada hari tanpa bonus dan diskon yang bisa Anda dapatkan seperti :</h2>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-shield-check"></i>
                    </div>
                    <div class="contents">
                        <h4>Layanan Door to Door</h4>
                        <p> Siba Cargo Memberikan layanan Door to Door secara Gratis keseluruh pelanggan kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-shipping-timed"></i>
                    </div>
                    <div class="contents">
                        <h4>Gratis Penjemputan</h4>
                        <p>Anda tinggal duduk manis dirumah, barang anda akan kami jemput langsung ke lokasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="contents">
                        <h4>Gratis Packing Standar</h4>
                        <p>Jadi anda tidak perlu repot lagi melakukan packing, karena kami akan melakukan packing
                            barang anda secara Gratis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="far fa-sack-dollar"></i>
                    </div>
                    <div class="contents">
                        <h4>Nego sampai Deal</h4>
                        <p>Siba Cargo memberikan banyak kemudahan, salah satunya dengan memberikan harga yang lebih
                            murah daripada ekspedisi lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-user-headset"></i>
                    </div>
                    <div class="contents">
                        <h4>Tracking Online</h4>
                        <p>Jadi anda dapat melacak keberadaan paket secara online melalui website Siba Cargo
                            sibacargo.co.id.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection