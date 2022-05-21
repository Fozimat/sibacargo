@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner2.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Sejarah Perusahaan</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Sejarah Perusahaan
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
                    <img src="{{ asset('assets/img/about.png') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">Tentang</h5>
                        <span>Siba Cargo</span>
                        <h2>Sejarah <span>Perusahaan</span></h2>
                    </div>
                    <p style="text-align: justify; text-justify: inter-word">
                        Sejarah-pun
                        dimulai, Kala itu <span style="font-weight: 900">SIBA CARGO</span> sudah berdiri dan menjalankan
                        bisnis pengiriman barang
                        (expedisi)
                        sejak tahun 2009. Berawal dr badan hukum berbentuk CV dan sekarang sudah diupgrade menjadi <span
                            style="font-weight: 900"> PT.
                            WAJAH SIBA NUSANTARA.</span>
                    </p>
                    <p style="text-align: justify; text-justify: inter-word">
                        Hingga saat ini kami sangat concern dan fokus membangun dan memperluas area jangkauan area
                        jangkauan ke titik-titik daerah pelosok seluruh indonesia dan selalu mencari terobosan utk
                        menekan biaya pengiriman lebih murah, karrna semakin murah biaya pengiriman maka semakin murah
                        harga jual barang/produk tersebut ke daerah yang dikirim.
                    </p>
                </div>
            </div>
            <h3 style="text-align: justify; text-justify: inter-word" class="mt-3">Mendukung Kesuksesan Bisnis dan
                Pekerjaan Anda, Percayakan Pengiriman Barang Cargo Anda
                Kepada Kami.
            </h3>
            <p style="text-align: justify; text-justify: inter-word">
                Kami telah dipercaya menangani pengiriman berbagai jenis barang seperti material telekomunikasi,
                material Spart Part Migas, barang pindahan rumah tangga, pengiriman mobil & alat berat dan berbagai
                macam barang general cargo baik menggunakan cargo darat, cargo laut, maupun cargo udara. Karena mereka
                percaya, SIBA CARGO adalah yang terbaik di bidangnya.
            </p>
        </div>

    </div>
</section>
@endsection