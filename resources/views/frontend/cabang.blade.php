@extends('frontend.template')
@section('title', 'Kantor Cabang dan Agen - Siba Cargo')
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
                    Kantor Cabang dan Agen
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5 class="textleft relative">Tentang</h5>
                        <span>Siba Cargo</span>
                        <h2>Kantor Cabang<span> dan Agen</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/pusat.jpg') }}')">
                    </div>
                    <div class="content">
                        <h4>Pusat</h4>
                        <p>Jl. Kijang Lama Pergudangan Metro Melayu Kota Piring, Kota Tanjungpinang</p>
                        <p><a target="_blank" href="https://api.whatsapp.com/send/?phone=6282288183338"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 822 8818 3338</a> (Galuh)</p>
                        <p><a target="_blank" href="https://api.whatsapp.com/send/?phone=6282385699955"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 823 8569 9955</a> (Ella)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/pinang.jpg') }}')"></div>
                    <div class="content">
                        <h4>Tanjungpinang</h4>
                        <p>Jl. Raja Haji Fisabilillah, Km. 8 Atas, Kota Tanjungpinang, Prov. Kepulauan Riau, Indonesia,
                            29125</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281270300077"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 812 7030 0077</a> (Zilla)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282171476767"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 821 7147 6767</a> (Helda)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/batam.jpg') }}')"></div>
                    <div class="content">
                        <h4>Batam</h4>
                        <p>Komplek Ruko Mega Legenda Blok C3-12 B Batam, Kepulauan Riau Indonesia</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=628116945656"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 811 6945 656</a> (Widya)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281261863535"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 812 6186 3535</a> (Hotline)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282287091919"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 822 8709 1919</a> (Widya)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/pekanbaru.jpg') }}')"></div>
                    <div class="content">
                        <h4>Pekanbaru</h4>
                        <p>Jl. Ambon Ruko No. 6 Tengkerang Timur Kec. Tenayan Raya Kota Pekanbaru</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281364977393"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 813 6497 7393</a> (Hotline)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282178859900"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 821 7885 9900</a> (Romero)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/jakarta.jpg') }}')"></div>
                    <div class="content">
                        <h4>Jakarta</h4>
                        <p>JL. Lodan Raya Dua Blok A16 No. 2 RT.6/RW.4 Ancol, Kec. Pademangan Jakarta Utara</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285273540077"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 852 7354 0077</a> (Sri)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=628116664470"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 811 6664 470</a> (Putri)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-branch-card">
                    <div class="country-flag bg-cover"
                        style="background-image: url('{{ asset('assets/img/cabang/jogja.jpg') }}')"></div>
                    <div class="content">
                        <h4>Yogyakarta</h4>
                        <p>Perum. Putri Adi Citra B4, Jl. Sukun Ngiringin,Condong Catur, Depok, Sleman, D.I Yogyakarta
                        </p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285273540077"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 852 7354 0077</a> (Sri)</p>
                        <p> <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281270300077"><i
                                    class="fab fa-whatsapp mr-10"></i>+62 812 7030 0077</a> (Zilla)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection