@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
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
                    Manajemen Kami
                </li>
            </ol>
        </nav>
    </div>
</div>

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
                        <span>Siba Cargo</span>
                        <h2>Manajemen<span> Kami</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection