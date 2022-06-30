@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Karir</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Karir
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
                    <span>Lowongan Kerja</span>
                    <h2>Karir</h2>
                </div>
            </div>
        </div>
        <div class="row mtm-30 text-center">
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/karir/sales-exe.png') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/karir/sales-exe.png') }}" alt="image">
                </a>
                <a href="mailto:siba.admn@gmail.com">
                    <h5>Sales
                        Executive</h5>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/karir/cs.jpeg') }}" data-toggle="lightbox" data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/karir/cs.jpeg') }}" alt="image">
                </a>
                <a href="mailto:siba.admn@gmail.com">
                    <h5>Customer Service</h5>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <a href="{{ asset('assets/img/karir/akuntan.jpeg') }}" data-toggle="lightbox"
                    data-gallery="example-gallery">
                    <img src="{{ asset('assets/img/karir/akuntan.jpeg') }}" alt="image">
                </a>
                <a href="mailto:siba.admn@gmail.com">
                    <h5>Akuntan</h5>
                </a>
            </div>

        </div>
    </div>

</section>

@endsection