@extends('frontend.template')
@section('title', 'FAQ - Siba Cargo')
@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>FAQ</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    FAQ
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
                    <h5>FAQ</h5>
                    <span>Siba Cargo</span>
                    <h2>Pertanyaan & <span>Jawaban</span></h2>
                </div>
            </div>
            <div class="row equal">
                <div class="col-lg-12 col-12">
                    <div class="faq-accordion-2">
                        <div class="accordion no-border" id="accordion">
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                        Apa saja kelebihan Siba Cargo?
                                    </button>
                                </h4>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        Free penjemputan, Free pengantaran, Free packing standard, Free surat jalan
                                        kepolisian (kendaraan)
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                        Bagaimana cara pembayaran di Siba Cargo?
                                    </button>
                                </h4>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        Metode pembayaran di Siba Cargo menggunakan Cash, Transfer Bank, COD, QRIS
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                        Bagaimana cara mengecek resi?
                                    </button>
                                </h4>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>- Anda bisa mangecek langsung melalui website Siba Cargo lalu menginputkan
                                            nomor resi di <a href="https://sibalogistik.com/tracking"><strong>link
                                                    berikut</strong></a></p>
                                        <p> Atau</p>
                                        <p>- Anda bisa menghubungi Customer Service Siba Cargo <a target="_blank"
                                                href="https://api.whatsapp.com/send/?phone=628117774470"><strong>(0811
                                                    7774
                                                    470)</strong></a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                        Bagaimana cara menyampaikan keluhan dan saran?
                                    </button>
                                </h4>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        Anda bisa menghubungi Customer Service Siba Cargo <a target="_blank"
                                            href="https://api.whatsapp.com/send/?phone=628117774470"><strong>(0811 7774
                                                470)</strong></a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                        Bagaimana cara mengganti alamat saat barang sudah dikirimkan?
                                    </button>
                                </h4>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>- Anda bisa menghubungi Customer Service Siba Cargo <a target="_blank"
                                                href="https://api.whatsapp.com/send/?phone=628117774470"><strong>(0811
                                                    7774
                                                    470)</strong></a></p>
                                        <p>- Kirim Nomor Resi</p>
                                        <p>- Kirim Alamat Baru</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        Bagaimana ketentuan perhitungan volume barang/paket?
                                    </button>
                                </h4>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion" style="">
                                    <div class="accordion-body">
                                        <p>Perhitungan volume via laut & darat</p>
                                        <p>* P x L x T : 4.000</p>
                                        <p>Perhitungan volume via udara</p>
                                        <p>* P x L x T : 6.000</p>
                                        <p>Kubikasi</p>
                                        <p>* P x L x T : 1.000.000</p>
                                        <p>Anda dapat menghitung volume dan kubikasi <a href="#">disini</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection