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
                        <h4>Informasi Tarif Pengiriman</h4>
                        <div class="request-quote-form">
                            <form action="{{ route('tarif.process') }}" method="POST">
                                @csrf
                                <div class="row d-flex align-item-center">
                                    <div class="col-sm-4 col-12">
                                        <label for="kota_asal">Kota Asal</label>
                                        <select name="kota_asal" class="wide js-example-basic-single" id="kota_asal"
                                            required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kabupaten_kota as $kab_kota)
                                            <option value="{{ $kab_kota->id }}">{{ $kab_kota->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label for="kota_tujuan">Kota Tujuan</label>
                                        <select name="kota_tujuan" class="wide js-example-basic-single" id="kota_tujuan"
                                            required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kabupaten_kota as $kab_kota)
                                            <option value="{{ $kab_kota->id }}">{{ $kab_kota->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label for="pengiriman">Pengiriman</label>
                                        <select name="pengiriman" class="wide js-example-basic-single" id="pengiriman"
                                            required>
                                            <option value="">-- Pilih --</option>
                                            <option value="kendaraan">Kendaraan</option>
                                            <option value="barang">Barang</option>
                                            <option value="elektronik">Elektronik</option>
                                            <option value="container">Container</option>
                                            <option value="lcl">LCL</option>
                                            <option value="carter">Carter</option>
                                            <option value="udara">Udara</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" class="theme-btn" value="Cek Tarif">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($query) && $pengiriman == 'barang')
            <div class="row mt-5">
                <h4>Tarif Pengiriman Barang</h4>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Berat Minimal</th>
                                    <th>Harga</th>
                                    <th>Estimasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($query as $q)
                                <tr>
                                    <td>{{ $q->daerahAsal->nama }}</td>
                                    <td>{{ $q->daerahTujuan->nama }}</td>
                                    <td>{{ $q->berat_minimal. " Kg" }}</td>
                                    <td>{{ number_format($q->harga,0,',','.') }}</td>
                                    <td>{{ $q->estimasi. " Hari" }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td>{{ $asal[0] }}</td>
                                    <td>{{ $tujuan[0] }}</td>
                                    <td colspan="3" class="text-center">Data tidak ditemukan. Silahkan hubungi Marketing
                                        Siba Cargo. <a href="{{ route('kontak') }}" target='_blank'
                                            class="text-primary">Klik
                                            Disini</a></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

            @if(isset($query) && $pengiriman == 'kendaraan')
            <div class="row mt-5">
                <h4>Tarif Pengiriman Kendaraan</h4>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Harga</th>
                                    <th>Estimasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($query as $q)
                                <tr>
                                    <td>{{ $q->daerahAsal->nama }}</td>
                                    <td>{{ $q->daerahTujuan->nama }}</td>
                                    <td>{{ $q->kendaraan_id }}</td>
                                    <td>{{ number_format($q->harga,0,',','.') }}</td>
                                    <td>{{ $q->estimasi. " Hari" }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td>{{ $asal[0] }}</td>
                                    <td>{{ $tujuan[0] }}</td>
                                    <td colspan="3" class="text-center">Data tidak ditemukan. Silahkan hubungi Marketing
                                        Siba Cargo. <a href="{{ route('kontak') }}" target='_blank'
                                            class="text-primary">Klik
                                            Disini</a></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

            @if(isset($query) && $pengiriman == 'elektronik')
            <div class="row mt-5">
                <h4>Tarif Pengiriman Barang Elektronik</h4>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Jenis Barang</th>
                                    <th>Unit</th>
                                    <th>Harga</th>
                                    <th>Estimasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($query as $q)
                                <tr>
                                    <td>{{ $q->daerahAsal->nama }}</td>
                                    <td>{{ $q->daerahTujuan->nama }}</td>
                                    <td>{{ $q->nama }}</td>
                                    <td>{{ $q->unit }}</td>
                                    <td>{{ number_format($q->harga,0,',','.') }}</td>
                                    <td>{{ $q->estimasi. " Hari" }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td>{{ $asal[0] }}</td>
                                    <td>{{ $tujuan[0] }}</td>
                                    <td colspan="3" class="text-center">Data tidak ditemukan. Silahkan hubungi Marketing
                                        Siba Cargo. <a href="{{ route('kontak') }}" target='_blank'
                                            class="text-primary">Klik
                                            Disini</a></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

            @if(isset($query))
            <div class="col-lg-12 col-md-12 col-12 mt-2">
                <strong>Penting:</strong>
                <p>* Harga sewaktu-waktu dapat berubah</p>
                <p>* Estimasi berlaku dari keberangkatan Truck/Kapal</p>
                <p>* Hubungi kami <a href="{{ route('kontak') }}" target='_blank' class="text-primary">Klik
                        Disini</a></p>
            </div>
            @endif

        </div>
    </div>
</section>

@endsection