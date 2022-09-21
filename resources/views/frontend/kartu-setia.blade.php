@extends('frontend.template')
@section('title', 'Kartu Setia - Siba Cargo')

@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Kartu Setia Siba</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Info</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Kartu Setia Siba
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-lg-start">
                <div class="about-img">
                    <img src="{{ asset('assets/img/kartu-setia/kartu setia.png') }}" alt="" />
                    <h2><u>Gold</u></h2>
                    <div>
                        <p>1. Potongan transaksi 5% pada semua layanan Siba Cargo Group.</p>
                        <p>2. Mendapatkan gift saat ulang tahun (Kartu ucapan, bucket).</p>
                        <p>3. Mendapatkan gift saat hari besar keagamaan (kue lebaran/air kaleng/parsel).</p>
                        <p>4. Mendapatkan pelayanan prioritas (CS Sampai jam 20.00 pm).</p>
                        <p>5. Dapat menggunakan kartu gold untuk bertransaksi di tenant-tenant yang sudah bekerja sama
                            dengan Siba Cargo.</p>
                        <p>6. Bagi pemegang kartu gold yang berhasil mencatatkan transaksi jumlah mnmal 50 juta Rupiah,
                            berhak mendapatkan voucher untuk menginap di hotel yang sudah ditentukan.</p>
                        <p>7. Setiap transaksi minimal Rp500.000, pemegang kartu mendapatkan 1 poin yang jika
                            dikumpulkan
                            sampai 20 poin atau lebih, koin tersebut dapat digunakan untuk bertransaksi di tenant-tenant
                            yang sudah bekerja sama dengan Siba Cargo 1 poin sama dengan Rp 2.000.</p>
                    </div>
                    <div class="single-price-bar active">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="package-name">
                                    <h3>Cara mendapatkannya:</h3>
                                </div>
                            </div>
                            <div class="col-xl-12 pe-xl-0">
                                <div class="package-features">
                                    <p>Berhasil mencatatkan transaksi minimal 25 kali atau senilai 50.000.000 Rupiah
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">Info</h5>
                        <span>Siba</span>
                        <h2>Kartu <span>Setia</span></h2>
                    </div>
                    <h2><u>Platinum</u></h2>
                    <div>
                        <p>1. Potongan transaksi 10% pada semua layanan Siba Cargo Group.</p>
                        <p>2. Cashback 5% untuk 100 kali transaksi per 6 bulan.</p>
                        <p>3. Cashback 10% untuk 150 kali transaksi per 6 bulan.</p>
                        <p>4. Cashback 15% untuk 200 kali transaksi per 6 bulan.</p>
                        <p>5. Mendapatkan gift saat ulang tahun (kartu ucapan, kue ulang tahun, bucket).</p>
                        <p>6. Mendapatkan gift saat hari besar keagamaan (kue lebaran/air kaleng/parsel).</p>
                        <p>7. Mendapatkan pelayanan prioritas (CS sampai 00.00 am).</p>
                        <p>8. Dapat menggunakan kartu platinum untuk transaksi di tenant-tenant yang sudah bekerja sama
                            dengan Siba Cargo.</p>
                        <p>9. Setiap transaksi minimal Rp500.000, pemegang kartu mendapatkan 1 poin yang jika
                            dikumpulkan sampai 20 poin atau lebih, koin tersebut dapat digunakan untuk bertransaksi di
                            tenant-tenant yang sudah bekerja sama dengan Siba Cargo 1 poin sama dengan Rp 5.000.</p>
                        <p>10. Pemegang kartu Paltinum berhak menggunakan satu ruangan VIP yang ada di kantor Siba Cargo
                            sebagai working space.</p>
                        <p>11. Setiap pemegang kartu platinum berhasil mencatatkan transaksi sejumlah minimal 100 juta
                            rupiah berhak mendapatkan voucher untuk menginap di hotel yang sudah ditentukan dan logam
                            mulia emas.
                        </p>
                    </div>
                    <div class="single-price-bar active">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="package-name">
                                    <h3>Cara mendapatkannya:</h3>
                                </div>
                            </div>
                            <div class="col-xl-12 pe-xl-0">
                                <div class="package-features">
                                    <p>Berhasil mencatatkan transaksi minimal 50 kali atau senilai 100.000.000 Rupiah
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-xl-12">
                <h4>NOTE</h4>
                <p>1. Siba Kartu Setia memiliki masa berlaku selama 1 tahun sejak kartu tersebut diterbitkan.</p>
                <p>2. Jika Siba kartu Setia (Platinum & Gold) hilang, maka harap melapor kepada Customer Service Siba
                    Cargo.</p>
            </div>
        </div>

    </div>
</section>
@endsection