@extends('frontend.template')
@section('title', 'SIBA CARGO - Jasa Ekspedisi Murah')
@section('content')
<section class="hero-wrapper hero-1">
    <div class="hero-slider-active transland-dots">
        <div class="single-slide">
            <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home/slider_baru1.png')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">
                                Makin Banyak <span>Makin Murah</span>
                            </h1>
                            <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Barang yang ingin dikirim lebih banyak dan dalam jumlah yang besar, Dapatkan Harga
                                Spesial dari <strong>SIBA</strong>
                            </p>
                            <a href="{{ route('kontak') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">Hubungi Kami</a>
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
            <div class="slide-bg bg-cover" style="background-image: url('assets/img/home/slider_baru2.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">
                                Ekspedisi Murah <span>dan Berkualitas</span>
                            </h1>
                            <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Cari yang selalu bisa diandalkan? <strong>SIBA CARGO</strong> maju paling depan.
                            </p>
                            <a target="_blank" href="https://sibacargo.co.id/" data-animation-in="fadeInRight"
                                data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Cek Tarif</a>
                            <a href="{{ route('tracking') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4 animated">Lacak Paket</a>
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


<section class="portfolio section-padding ">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Siba</h5>
                    <span>Dapatkan Harga Special</span>
                    <h2>Promo</h2>
                </div>
            </div>
        </div>
        <div class="row mtm-30">
            <div class="single-price-bar active mb-30">
                <div class="row">
                    <div class="col-md-6 col-12 col-lg-4">
                        <img class="mySlides" src="{{ asset('assets/img/promo/9bth9.png') }}" style="width:100%">
                        <img class="mySlides" src="{{ asset('assets/img/promo/9bth19.png') }}" style="width:100%">
                        <img class="mySlides" src="{{ asset('assets/img/promo/9bth-kepri.jpeg') }}" style="width:100%">
                        <img class="mySlides" src="{{ asset('assets/img/promo/9bth-pinang.jpeg') }}" style="width:100%">
                    </div>
                    <div class="col-md-6 col-12 col-lg-8">
                        <h2>Promo Ceria September 9.9 dari Batam ke Seluruh Indonesia</h2>
                        <p style="text-align: justify; text-justify: inter-word">Emang deh yaaa Siba Cargo paling paham
                            kebutuhan kalian. Coba deh perhatiin, kali ini Siba
                            Cargo punya Promo Ceria September 9.9 dari Batam ke seluruh kota besar di Indonesia
                            😁😎
                            Kamu bisa banget gunakan promo ini untuk kirim barang pribadimu atau barang jualan ke
                            customer kaliaaan. </p>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=628116664470"
                            class="theme-btn minimal-btn mt-30">yuk, kirim sekarang<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>

                </div>
            </div>
            <div class="single-price-bar active mb-30">
                <div class="row">
                    <div class="col-md-6 col-12 col-lg-8">
                        <h2>Promo Ceria September 9.9 Pengiriman dari Tanjungpinang ke Seluruh Indonesia</h2>
                        <p style="text-align: justify; text-justify: inter-word">Dengan tarif kirim yang murah dan
                            berani diadu, Siba Cargo tetap berkomitmen untuk memberikan
                            pelayanan terbaiknya.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282178859900"
                            class="theme-btn minimal-btn mt-30 mb-30">yuk, kirim sekarang<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col-md-6 col-12 col-lg-4">
                        <img class="mySlides2" src="{{ asset('assets/img/promo/9tnj19.png') }}" style="width:100%">
                        <img class="mySlides2" src="{{ asset('assets/img/promo/9tnj9.png') }}" style="width:100%">
                        <img class="mySlides2" src="{{ asset('assets/img/promo/9tpi-bth.jpeg') }}" style="width:100%">
                        <img class="mySlides2" src="{{ asset('assets/img/promo/9tpi-kepri.jpeg') }}" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="single-price-bar active mb-30">
                <div class="row">
                    <div class="col-md-6 col-12 col-lg-4">
                        <img class="mySlides3" src="{{ asset('assets/img/promo/9pku-tpi-bth.jpeg') }}"
                            style="width:100%">
                        <img class="mySlides3" src="{{ asset('assets/img/promo/9pku-kepri.jpeg') }}" style="width:100%">
                        {{-- <img class="mySlides3" src="{{ asset('assets/img/promo/9pku-si.png') }}"
                            style="width:100%"> --}}
                    </div>
                    <div class="col-md-6 col-12 col-lg-8">
                        <h2>Promo Ceria September 9.9 Pengiriman dari Pekanbaru ke Seluruh Indonesia
                        </h2>
                        <p style="text-align: justify; text-justify: inter-word">Kamu bisa banget gunakan promo ini
                            untuk kirim barang dengan jauh lebih hemat dari Pekanbaru ke seluruh kota besar di
                            Indonesia, apalagi kamu
                            bisa banget dapat
                            tambahan diskon lhooo 😁😁😁</p>
                        <a href="https://api.whatsapp.com/send/?phone=6281364977393" target="_blank"
                            class="theme-btn minimal-btn mt-30">yuk, kirim sekarang<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-price-bar active mb-30">
                <div class="row">
                    <div class="col-md-6 col-12 col-lg-8">
                        <h2>Promo Ceria September 9.9 Pengiriman dari Jakarta ke Seluruh Indonesia</h2>
                        <p style="text-align: justify; text-justify: inter-word">
                            Kamu bisa banget gunakan promo ini untuk kirim barang pindahan, proyek, usaha dengan jauh
                            lebih hemat dari jakarta ke seluruh kota besar di Indonesia</p>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281270300077"
                            class="theme-btn minimal-btn mt-30 mb-30">yuk, kirim sekarang<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col-md-6 col-12 col-lg-4">
                        <img class="mySlides4" src="{{ asset('assets/img/promo/9jakarta-tpi-bth.jpeg') }}"
                            style="width:100%">
                        <img class="mySlides4" src="{{ asset('assets/img/promo/9jkt-kepri.jpeg') }}" style="width:100%">
                        {{-- <img class="mySlides4" src="{{ asset('assets/img/promo/9jkt-si.png') }}"
                            style="width:100%"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    <img src="{{ asset('assets/img/about.png') }}" alt="" />
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
                        <span style="color: #0077c3; font-weight: 900">PT. Wajah SIBA Nusantara </span>merupakan
                        perusahaan jasa pengiriman barang di indonesia yang berlokasi di Jakarta, Bekasi, Bandung,
                        Tanjungpinang, Bintan, Batam dan lainnya serta memiliki perwakilan agen/ cabang
                        di seluruh kota besar di indonesia. Yang berorientasi pada kepuasaan pelanggan dan selalu
                        berusaha memenuhi permintaan pasar dalam hal pelayanan jasa pengiriman murah dan harga
                        pengiriman yang terjangkau dengan pelayanan terbaik.
                    </p>
                    <p style="text-align: justify; text-justify: inter-word">
                        <span style="color: #0077c3; font-weight: 900">SIBA CARGO </span>terdiri dari
                        sumber daya manusia yang berpengalaman dan konsisten di bidang jasa pengiriman/ expedisi cargo
                        dengan dukungan tenaga yang profesional dan terlatih menjadikan barang kiriman anda tiba di
                        tujuan dengan cepat dan aman.
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
                    <h5>Ekspedisi </h5>
                    <h2>Kami <span>Melayani</span></h2>
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
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/drone-fright2.jpg');">
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
                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/road2.jpg')">
                    </div>
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

<section class="d-flex justify-content-center align-items-center" style="background-color: #0077C3;min-height: 140px;">
    <div class="container">
        <div class="row pt-20 pb-20">
            <div class="col-md-10">
                <h2 class="text-white mt-3">Konsultasi Online 24 Jam Nonstop, Mulai Obrolan ?</h2>
            </div>
            <div class="col-md-2">
                <a href="javascript:void" class="theme-btn mt-2 whatsapp-live-chat">Live Chat</a>
            </div>
        </div>
    </div>
</section>


<section class="blog-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="block-contents">
                <div class="section-title">
                    <h5 class="textleft">Informasi</h5>
                    <h2>Blog &amp; <span>Berita</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($postingan_terbaru as $post)
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-news-box">
                    <div class="featured-thumb bg-cover"
                        style="background-image: url('{{ asset('postingan/'.$post->gambar) }}')">
                        <div class="post-cat">
                            <a href="#">{{ $post->kategori->nama_kategori }}</a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="meta d-flex">
                            <div class="author me-2">
                                <i class="fal fa-user"></i><a href="#">{{ $post->penulis }}</a>
                            </div>
                            |
                            <div class="date ms-2">
                                <i class="fal fa-calendar-alt"></i>
                                <span>{{ $post->tanggal_posting->isoFormat('dddd, D
                                    MMMM Y') }}</span>
                            </div>
                        </div>
                        <h3><a href="{{ route('blog.detail', $post->slug) }}">{{ $post->judul }}</a></h3>
                        <a class="read-btn" href="{{ route('blog.detail', $post->slug) }}">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .bg_content {
        display: table;
        width: 100%;
        height: 500px;
        background: url('{{ asset("assets/img/bg_parallax.jpg") }}') center center no-repeat fixed;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }
</style>

<div class="bg_content magnific">
    <div>
        <h2>Video<strong> SIBA CARGO</strong></h2>
        <p>
            Kenali kami lebih dekat dan lihatlah apa yang telah kami kerjakan untuk memberikan solusi
            pengiriman yang ramah, aman, dan nyaman.
        </p>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex justify-content-center align-items-center">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=EXZqZ6xu5ck" class="popup-video play-video mt-3"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="brand-showcase-wrapper section-padding bg-contain bg-center"
    style="background-image: url('assets/img/dot_map.png')">
    <div class="container">
        <div class="col-md-12">
            <div class="block-contents mb-60">
                <div class="section-title text-center">
                    <h5 class="text-center">Partners</h5>
                    <span>clients</span>
                    <h2>Mereka <span>yang mempercayai kami</span></h2>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/1.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/2.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/3.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/4.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/5.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/6.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/7.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/8.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/9.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/10.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/11.jpg" alt="transland">
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12">
                <div class="single-brand-logo">
                    <img src="assets/img/brand/12.jpg" alt="transland">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection