@extends('frontend.template')
@section('title', 'Jadwal Kapal - Siba Cargo')
@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Jadwal Kapal</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Jadwal Kapal
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
                    <h5>Jadwal</h5>
                    <span>Siba Cargo</span>
                    <h2>Keberangkatan <span>Kapal</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0">
                        <h4>Rute Kapal</h4>
                        <div class="request-quote-form">
                            <form action="#" method="POST">
                                @csrf
                                <div class="row d-flex align-item-center">
                                    <div class="col-sm-12 col-12">
                                        <select name="rute" class="wide js-example-basic-single" id="rute" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($rute_kapal as $rute)
                                            <option value="{{ $rute->id }}">{{ $rute->rute }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 offset-sm-9">
                                        <input type="submit" class="theme-btn" value="Cari">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($jadwal_kapal))
            <div class="row mt-5">
                <h4>Jawal Kapal {{ $rute_only[0]}}</h4>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Closing</th>
                                    <th>Berangkat</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwal_kapal as $kapal)
                                <tr>
                                    <td>{{ $kapal->tgl_closing ? $kapal->tgl_closing->isoFormat('D MMMM Y') : '-' }}
                                    </td>
                                    <td>{{ $kapal->tgl_berangkat ? $kapal->tgl_berangkat->isoFormat('D MMMM Y') : '-' }}
                                    </td>
                                    <td>{{ $kapal->keterangan ?? '-' }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center"><strong>Belum ada data</strong>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
            @if(isset($jadwal_kapal))
            <div class="col-lg-12 col-md-12 col-12 mt-2">
                <strong>Penting:</strong>
                <p>* Closing : Waktu terakhir penerimaan barang di kantor Siba Cargo</p>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection