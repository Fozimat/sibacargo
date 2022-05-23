@extends('frontend.template')

@section('content')

<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Visi, Misi, dan Tujuan</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Visi, Misi, dan Tujuan
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Siba</h5>
                    <span>Tentang Kami</span>
                    <h2>Visi, Misi, <span>Tujuan</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0 ps-lg-5">
                    <div class="about-info-contents">
                        <h3 style="color: #0077c3;">Visi</h3>
                        <p style="text-align: justify; text-justify: inter-word">
                            Menjadikan SIBA Cargo & Courier perusahaan jasa pengiriman barang termurah, terpercaya, dan
                            terbaik di indonesia dengan pelayanan prima yang profesional menjangkau seluruh wilayah
                            pelosok nusantara.
                        </p>
                        <h3 style="color: #0077c3;">Misi</h3>
                        <ul>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Fokus memperluas
                                jaringan area jangkauan ke titik-titik
                                pelosok nusantara.</li>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Menerapkan
                                system dan prosedure pelayanan 3T ( Termurah,
                                Terpercaya, dan Terbaik ) secara profesional dan bertanggung jawab.
                            </li>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Selalu mencari
                                terobosan dan solusi-solusi pengiriman untuk
                                menekan biaya pengiriman lebih murah, karna semakin murah biaya pengiriman maka semakin
                                murah harga jual barang / produk tersebut.</li>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Selalu inovatif
                                mengeluarkan program-program untuk kenyamanan
                                dan kemudahan pelanggan dengan memanfaatkan sistem dan jaringan kita yang terpadu di
                                seluruh indonesia.
                            </li>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Memberikan
                                kualitas jasa yang terbaik dengan harga yang
                                kompetitif.
                            </li>
                            <li
                                style="list-style: disc; text-align: justify;text-justify: inter-word;margin-left: 20px;">
                                Kepercayaan
                                pelanggan menjadi prioritas utama kami yang harus
                                dipertanggungjawabkan dalam bentuk kepuasan dan jaminan pengiriman.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection