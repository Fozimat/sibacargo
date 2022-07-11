@extends('frontend.template')
@section('title', 'Portfolio - Siba Cargo')
@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Portfolio</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Portfolio
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="portfolio section-padding">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Siba</h5>
                    <span>Histori Kerjaan</span>
                    <h2>Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="row mtm-30 text-center">
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/angkut.jpg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/angkut.jpg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/asdp.jpg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/asdp.jpg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/motor.jpeg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/motor.jpeg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/portofolio.jpeg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/portofolio.jpeg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/portofolio1.jpeg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/portofolio1.jpeg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/portfolio/portofolio2.jpeg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/portfolio/portofolio2.jpeg') }}" class="img-portfolio" alt="image">
                </a>
            </div>
        </div>
    </div>

</section>

@endsection