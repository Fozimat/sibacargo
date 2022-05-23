@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Mitra Kami</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Mitra Kami
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5 class="textleft relative">Tentang</h5>
                        <span>Siba Cargo</span>
                        <h2>Mitra<span> Kami</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mtm-30 text-center">
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/1.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/2.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/3.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/4.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/5.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/6.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/7.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/8.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/9.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/10.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/11.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/brand/12.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection