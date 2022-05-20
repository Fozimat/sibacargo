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
            <div class="block-contents pt-20">
                <div class="section-title text-center">
                    <h5>Kontak</h5>
                    <span>Siba Cargo</span>
                    <h2>Hubungi <span>Kami</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-branch-card">
                        <div class="country-flag bg-cover"
                            style="background-image: url('{{ asset('assets/img/cabang/pinang.jpg') }}')"></div>
                        <div class="content">
                            <h4>Kantor Pusat</h4>
                            <p class="text-justify">Jl. Raja Haji Fisabilillah, Km. 8 Atas,
                                Kota Tanjungpinang, Prov. Kepulauan Riau,
                                Indonesia, 29125
                            </p>
                            <p><a target="_blank" href="https://api.whatsapp.com/send/?phone=6282288183338"><i
                                        class="fab fa-whatsapp mr-10"></i>+62 822 8818 3338</a></p>
                            <p><a href="#"><i class="fas fa-envelope mr-10"></i>sibacargo@gmail.com</a></p>
                            <div class="branch-links">
                                <a href="{{ route('cabang') }}">semua cabang <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3186964282736!2d104.48791981429696!3d0.9067492630925243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d96d4a4feb273d%3A0xe4d9c50b59a3de18!2sSIBA%20CARGO!5e0!3m2!1sid!2sid!4v1653019438269!5m2!1sid!2sid"
                        style="border:0;margin-top: 90px;width: 100%;min-height: 415px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form action="{{ route('store.pesan') }}" method="POST" class="row" id="contact-form">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input required type="text" id="nama_lengkap" name="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email">Email</label>
                                <input required type="email" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone">No.Handphone/Telpon</label>
                                <input required type="number" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subjek">Subjek</label>
                                <input required type="text" id="subjek" name="subjek">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="pesan">Pesan</label>
                                <textarea id="pesan" name="pesan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <button class="submit-btn" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection