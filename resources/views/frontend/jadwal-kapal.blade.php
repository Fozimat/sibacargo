@extends('frontend.template')
@section('title', 'Jadwal Kapal - Siba Cargo')
@section('csrf-token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@push('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#cekjadwal').submit(function(e) {
            e.preventDefault();
            var rute = $('#rute').val();
            console.log(rute);
            $.ajax({
                type: 'post',
                url: '/getJadwalKapal/'+rute,
                dataType: 'json',
                data: {
                    rute: rute,
                },
                success: function(data) {
                    console.log(data);
                    if(data.jadwal_kapal !== null) {
                        var content = '';
                        content = `
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
                                            <th>${data.pesanan.resi}</th>
                                            <td>${data.pesanan.waktu_pesan}</td>
                                            <td>${data.pesanan.daerah_asal.nama}</td>
                                            <td>${data.pesanan.daerah_tujuan.nama}</td>
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
                                            <td><strong>${data.pesanan.kustomer.nama}</strong></td>
                                            <td><strong>${data.pesanan.nama_penerima}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>${data.pesanan.kustomer.alamat_detail}</td>
                                            <td>${data.pesanan.alamat_detail_tujuan}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table mt-5">
                                    <thead class="table-dark">
                                        <tr>
                                            <th colspan="2">Perjalanan Paket ${data.pesanan.resi}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        `;
                                        for(i = 0; i < data.mtc.length; i++) {
                                            content += `
                                            <tr>
                                                <td style="width: 180px;"><strong>${data.mtc[i].tanggal_update}
                                                </td>
                                                <td><strong>${data.mtc[i].status_manifest.nama}</strong></strong></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>${data.mtc[i].status_manifest.keterangan}
                                                    <strong>${data.mtc[i].penerima != null ? data.mtc[i].penerima : ''}</strong>
                                                    <strong>${data.mtc[i].tanggal_jalan != null ? data.mtc[i].tanggal_jalan : ''}</strong>
                                                    <strong>${data.mtc[i].estimasi != null ? data.mtc[i].estimasi : ''}</strong>
                                                    <strong>${data.mtc[i].asal_tujuan != null ? data.mtc[i].asal_tujuan : ''}</strong> 
                                                    ${data.mtc[i].penerima != null ? '<a href="#" target="_blank">(Lihat Bukti Pengiriman)</a>' : '' }
                                                </td>
                                            </tr>
                                            `;
                                        }
                                    content += `
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    `;
                        
                        $('#result-jadwal').empty().append(content);
                    }
                    else {
                        $('#result-jadwal').empty().append(`
                            <tr>
                                <td colspan="4" class="text-center"><strong>Belum ada jadwal</strong>
                                </td>
                            </tr>
                        `);
                    }  
                } 
            });
        });
    });
   
</script>
@endpush
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
                            <form action="#" method="POST" id="cekjadwal">
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
                                        <button type="submit" class="theme-btn">Cek Jadwal</button>
                                    </div>
                                </div>
                                <div class="row mt-5 result" id="result-jadwal">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection