@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner2.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Kontak</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Kontak
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="contact-page-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="block-contents mb-30 pt-60">
                <div class="section-title text-center">
                    <h5>Kontak</h5>
                    <span>Siba Cargo</span>
                    <h2>Hubungi <span>Kami</span></h2>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form action="" method="POST" class="row" id="contact-form">
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Masukkan email">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone">No.Handphone/Telpon</label>
                                <input type="text" id="phone" name="handphone" placeholder="Masukkan nomor handphone">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subjek">Subjek</label>
                                <input type="text" id="subjek" name="subjek" placeholder="Masukkan subjek">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="pesan">Pesan</label>
                                <textarea id="pesan" name="pesan" placeholder="Masukkan pesan anda"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <input class="submit-btn" type="submit" value="Kirim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection