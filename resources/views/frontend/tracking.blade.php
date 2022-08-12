@extends('frontend.template')
@section('title', 'Tracking - Siba Cargo')
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
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0">
                        <h4>Nomor Resi</h4>
                        <div class="request-quote-form">
                            <form action="{{ route('tracking.process') }}" method="POST">
                                @csrf
                                <div class="row d-flex align-item-center">
                                    <div class="col-sm-12 col-12">
                                        <input type="text" name="resi">
                                    </div>
                                    <div class="col-sm-3 offset-sm-9">
                                        <input type="submit" class="theme-btn" value="Lacak">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($resi))
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Resi</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Kota Pengiriman</th>
                                    <th>Kota Tujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $resi->resi }}</th>
                                    <td>{{ $resi->waktu_pesan->isoFormat('D MMMM Y') }}</td>
                                    <td>{{ $resi->daerahAsal->nama }}</td>
                                    <td>{{ $resi->daerahTujuan->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-5">
                            <thead class="table-dark">
                                <tr>
                                    <th>Pengirim</th>
                                    <th>Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>{{ $resi->kustomer->nama }}</strong></td>
                                    <td><strong>{{ $resi->nama_penerima }}</strong></td>
                                </tr>
                                <tr>
                                    <td>{{ $resi->kustomer->alamat_detail }}</td>
                                    <td>{{ $resi->alamat_detail_tujuan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-5">
                            <thead class="table-dark">
                                <tr>
                                    <th colspan="2">Perjalanan Paket {{ $resi->resi }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mtc as $resi)
                                <tr>
                                    <td style="width: 180px;"><strong>{{ $resi->tanggal_update->isoFormat('D MMMM Y') }}
                                    </td>
                                    <td><strong>{{ $resi->status_manifest->nama }}</strong></strong></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{{ $resi->status_manifest->keterangan }}
                                        <strong>{{ $resi->penerima }}</strong>
                                        <strong>{{ $resi->tanggal_jalan ? $resi->tanggal_jalan->isoFormat('D MMMM Y') :
                                            '' }}</strong>
                                        <strong>{{ $resi->estimasi ? '/ Estimasi '.$resi->estimasi : '' }}</strong>
                                        <strong>{{ $resi->asal_tujuan ? '/ '.$resi->asal_tujuan : ''
                                            }}</strong> {!! $resi->penerima ?
                                        '<a href="#" target="_blank">(Lihat Bukti Pengiriman)</a>' : '' !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <strong>Mohon Perhatian:</strong>
                    <p>* Estimasi berlaku setelah kapal/truck berangkat</p>
                    <p>* Jika tidak ada pergerakan silahkan hubungi kami <a href='https://wa.me/6282171476767'
                            target='_blank' class="text-primary">Klik Disini</a></p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection