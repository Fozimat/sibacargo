@extends('frontend.template')

@section('content')
<section class="hero-wrapper hero-1">
    <div class="hero-slider-active transland-dots">
        <div class="single-slide">
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/slide1.jpg')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">
                                Ingat Logistik <span>Ingat Siba Cargo</span>
                            </h1>
                            <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rem dolores ea excepturi
                                aliquam ex.
                            </p>
                            <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4 animated">Cek Tarif</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center"
                data-animation-in="fadeInRight" data-delay-in="1s">
                <div class="text col-6">
                    <h6>Cargo Logistics Dengan Layanan Pengiriman Terbaik</h6>
                </div>
                <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center"
                    style="background-image: url('assets/img/faq-video.jpg')">
                    <a href="https://www.youtube.com/watch?v=EXZqZ6xu5ck" class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="slide-bg bg-cover" style="background-image: url('assets/img/home1/slide2.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">
                                Solusi Terbaik <span>Pengiriman Barang Anda</span>
                            </h1>
                            <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem magni doloremque
                                atque quae similique nostrum!
                            </p>
                            <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">Lacak Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center"
                data-animation-in="fadeInRight" data-delay-in="1s">
                <div class="text col-6">
                    <h6>Cargo Logistics Dengan Layanan Pengiriman Terbaik</h6>
                </div>
                <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center"
                    style="background-image: url('assets/img/faq-video.jpg')">
                    <a href="https://www.youtube.com/watch?v=EXZqZ6xu5ck" class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
            fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="translandcircle" />
        </symbol>
    </svg>
</section>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    <img src="assets/img/about-air.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">Tentang</h5>
                        <span>Sejak Tahun 2018</span>
                        <h2><span>Perusahaan</span></h2>
                    </div>
                </div>
                <div class="about-info-contents">
                    <p style="text-align: justify; text-justify: inter-word">
                        <span style="color: #0077c3; font-weight: 900">SIBA CARGO </span>merupakan perusahaan jasa
                        pengiriman cepat dalam layanan cargo
                        Laut, Darat, dan Udara. Berpengalaman sejak 2018 dan telah
                        memiliki kantor cabang di Batam, Jakarta, Pekanbaru dan Agen
                        Perwakilan di kota lainnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-service-provide section-padding theme-bg">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Pelayanan</h5>
                    <span>Layanan Kami</span>
                    <h2>Siba <span>Cargo</span></h2>
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
                            <a href="services-details.html">Ekspedisi Murah Via Laut</a>
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
                            <a href="services-details.html">Ekspedisi Murah Via Darat</a>
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
                            <a href="services-details.html">Ekspedisi Murah Container 20/40 ft</a>
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
                            <a href="services-details.html">Ekspedisi Murah Pengiriman Mobil & Motor</a>
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
                            <a href="services-details.html">Ekspedisi Murah Pengiriman Alat Berat</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-chose-us section-padding section-bg">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Mengapa</h5>
                    <span>Memilih Kami</span>
                    <h2>Siba <span>Cargo</span></h2>
                </div>
            </div>
        </div>
        <div class="row mtm-30">
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-user-headset"></i>
                    </div>
                    <div class="contents">
                        <h4>Pelayanan Ramah</h4>
                        <p class="text-justify">
                            Manajemen PT. Wajah Siba Nusanatara selalu berupaya memberikan
                            pelayanan yang ramah, dan meningkatkan kualitas layanan prima.
                            Custommer Services akan membantu Anda memberikan informasi
                            yang jelas dan relevan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-comment-dots"></i>
                    </div>
                    <div class="contents">
                        <h4>Live Chat 24/7</h4>
                        <p class="text-justify">
                            Dengan melihat kebutuhan mendesak dari calon pelanggan, kami
                            hadir dengan layanan online 24 Jam. Kini dimanapun dan
                            kapanpun, Anda dapat bertanya kepada Custommer Services yang
                            siap membantu Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-box"></i>
                    </div>
                    <div class="contents">
                        <h4>Packing Rapi & Aman</h4>
                        <p class="text-justify">
                            Packing adalah salah satu keamanan dalam pengiriman. Kami
                            menyediakan Packing Kardus, Packing Wraping, Packing Babel
                            Wrap, Packing Kayu, dan Packing Kombinasi sesuai keinginan
                            dari calon pelanggan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-sack-dollar"></i>
                    </div>
                    <div class="contents">
                        <h4>Harga Termurah</h4>
                        <p class="text-justify">
                            Kami siap membantu dan memberikan solusi terbaik untuk
                            pengriman Anda sesuai kondisi keuangan yang telah Anda
                            persiapkan. Tidak hanya harga murah yang kami berikan, bahkan
                            Anda bisa mendapatkan Diskon setiap harinya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-clock"></i>
                    </div>
                    <div class="contents">
                        <h4>Pengiriman Cepat</h4>
                        <p class="text-justify">
                            Estimasi menjadi perbandingan bagi calon pelanggan sebelum
                            memilih jasa ekspedisi yang akan digunakan. Kami menyediakan
                            jasa pengiriman kilat dan reguler dengan harga bervariasi
                            setiap tujuan pengiriman yang bisa Anda pilih.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="fal fa-shield-check"></i>
                    </div>
                    <div class="contents">
                        <h4>Bertanggung Jawab</h4>
                        <p class="text-justify">
                            PT. Wajah Siba Nusantara siap bertanggung jawab apabila ada
                            barang kiriman yang rusak atau hilang. Kami juga memfasilitasi
                            dengan adanya Asuransi agar pelanggan tetap merasa nyaman
                            dalam mengirim barang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="video-pop-up-wrapper section-padding bg-cover"
    style="background-image: url('assets/img/full-video-bg2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center d-flex justify-content-center align-items-center">
                <div class="video-play-btn">
                    <a href="https://www.youtube.com/watch?v=EXZqZ6xu5ck" class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection