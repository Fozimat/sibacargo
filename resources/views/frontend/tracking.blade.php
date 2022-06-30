@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Tracking</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Tracking
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
                    <h5>Tracking</h5>
                    <span>Siba Cargo</span>
                    <h2>Lacak <span>Barang Anda</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <iframe frameborder="0" scrolling="no" src="https://fa1f-180-252-53-106.ngrok.io/aplikasi/tracking/"
                        style="height: 1000px; overflow:scroll; width:
                        100%"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection