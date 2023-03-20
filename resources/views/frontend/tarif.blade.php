@extends('frontend.template')
@section('title', 'Tarif - Siba Cargo')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Tarif</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Tarif
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="contact-page-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="block-contents pt-20">
                <div class="section-title text-center">
                    <h5>Tarif</h5>
                    <span>Siba Cargo</span>
                    <h2>Cek Tarif<span> Pengiriman</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0">
                        @include('frontend.template.ajax-tarif')
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

@endsection