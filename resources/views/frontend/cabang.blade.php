@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner2.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Kantor Agen dan Cabang</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Kantor Cabang dan Agen
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5 class="textleft relative">Tentang</h5>
                        <span>Siba Cargo</span>
                        <h2>Kantor Cabang<span> dan Agen</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/batam.jpg') }}')"></div>
                    <div class="content">
                        <h4>Batam</h4>
                        <p>Komplek Ruko Mega Legenda Blok C3-12 B Batam, Kepulauan Riau Indonesia</p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/karimun.jpg') }}')"></div>
                    <div class="content">
                        <h4>TB. Karimun</h4>
                        <p>Jl. Kampung Baru , RT/RW 006/003, Kel. Sungai Pasir Kec. Meral Kab. Karimun, Kepri</p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/pekanbaru.jpg') }}')"></div>
                    <div class="content">
                        <h4>Pekanbaru</h4>
                        <p>Jl. Ambon Ruko No. 6 Tengkerang Timur Kec. Tenayan Raya Kota Pekanbaru</p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/jakarta.jpg') }}')"></div>
                    <div class="content">
                        <h4>Jakarta</h4>
                        <p>JL. Lodan Raya Dua Blok A16 No. 2 RT.6/RW.4 Ancol, Kec. Pademangan Jakarta Utara</p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/jogja.jpg') }}')"></div>
                    <div class="content">
                        <h4>Yogyakarta</h4>
                        <p>Perum. Putri Adi Citra B4, Jl. Sukun Ngiringin,Condong Catur, Depok, Sleman, D.I Yogyakarta
                        </p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/surabaya.jpg') }}')"></div>
                    <div class="content">
                        <h4>Surabaya</h4>
                        <p>Jalan Pasar Turi Pintu H, Surabaya, Provinsi Jawa Timur, Indonesia</p>
                        <p>+61 (625) 07520-6644 & 6655</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection