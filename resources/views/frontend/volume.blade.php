@extends('frontend.template')
@section('title', 'Rumus Menghitung Volme dan Kubikasi - Siba Cargo')
@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Rumus Volume dan Kubikasi</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Perhitungan Volume dan Kubikasi
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5 class="textleft relative">Kalkulator</h5>
                        <span>Siba Cargo</span>
                        <h2>Volume<span> & Kubikasi</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mtm-30">
                <h3 style="text-align: justify; text-justify: inter-word" class="mt-3">Cara Menghitung Volume dan
                    Kubikasi</h3>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/volume.png') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
                        {{-- <h4>Personal & Shipment data</h4> --}}
                        <div class="request-quote-form">
                            <form action="#">
                                <div class="row" class="text-left">
                                    <div class="col-12">
                                        <label for="panjang">Panjang</label>
                                        <input type="number" name="panjang" id="panjang" value="0"
                                            placeholder="Panjang (cm)">
                                    </div>
                                    <div class="col-12">
                                        <label for="lebar">Lebar</label>
                                        <input type="number" name="lebar" id="lebar" value="0" placeholder="Lebar (cm)">
                                    </div>
                                    <div class="col-12">
                                        <label for="tinggi">Tinggi</label>
                                        <input type="number" name="tinggi" id="tinggi" value="0"
                                            placeholder="Tinggi (cm)">
                                    </div>
                                    <div class="col-12">
                                        <h4>Hasil Perhitungan</h4>
                                    </div>
                                    <div class="col-12">
                                        <label for="kubikasi">Kubikasi (m3)</label>
                                        <input readonly value="0" type="text" id="kubikasi" name="kubikasi"
                                            placeholder="Kubikasi (m3)">
                                    </div>
                                    <div class="col-12">
                                        <label for="volume_darat_laut">Volume darat dan laut (kg)</label>
                                        <input readonly value="0" type="text" name="volume_darat_laut"
                                            placeholder="Volume darat dan laut (kg)" id="volume_darat_laut">
                                    </div>
                                    <div class="col-12">
                                        <label for="volume_udara">Volume udara (kg)</label>
                                        <input readonly value="0" type="text" name="volume_udara" id="volume_udara"
                                            placeholder="Volume udara (kg)">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@push('script')
<script>
    $('#panjang , #lebar, #tinggi').keyup(function() {
        let panjang = $('#panjang').val();
        let lebar = $('#lebar').val();
        let tinggi = $('#tinggi').val();

        let kubikasi = parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 1000000;
        $('#kubikasi').val(kubikasi.toFixed(2));

        let volume_darat_laut = parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 4000;
        $('#volume_darat_laut').val(Math.round(volume_darat_laut));

        let volume_udara = parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 6000;
        $('#volume_udara').val(Math.round(volume_udara));
    });
</script>
@endpush