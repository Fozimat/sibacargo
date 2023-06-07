@section('csrf-token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@push('script')
<script type="text/javascript" src="http://www.datejs.com/build/date.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#cektracking').submit(function(e) {
            e.preventDefault();
            var resi = $('#resi').val();
            $.ajax({
                type: 'post',
                url: '/getResi/'+resi,
                dataType: 'json',
                data: {
                    resi: resi,
                },
                success: function(data) {
                    console.log(data.mtc);
                    if(data.pesanan !== null) {
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
                        
                        $('#result-tracking').empty().append(content);
                    }
                    else {
                        $('#result-tracking').empty().append(`
                            <h4>Resi tidak ditemukan.</h4>
                        `);
                    }
                } 
            });
        });
    });
   
</script>
@endpush

{{-- <h4>Tracking Barang Anda</h4> --}}
<div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3"
    style="padding: 10px;-webkit-box-shadow:0px 0px 0px 0px rgba(109, 109, 109, 0.06);box-shadow: 0px 0px 0px 0px rgba(109, 109, 109, 0.06);">

    <div class="request-quote-form">
        <form id="cektracking">
            <div class="row d-flex align-item-center">

                <div class="col-sm-12 col-12">
                    <label for="kota_asal">Nomor Resi</label>
                    <input type="text" name="resi" id="resi" placeholder="Masukkan nomor resi...">
                </div>


            </div>
            <div class="row d-flex align-item-center">
                <div class="col-sm-12">
                    <button type="submit" class="theme-btn">Lacak</button>
                </div>
            </div>
            <div class="row mt-5 result" id="result-tracking">

            </div>

        </form>
    </div>
</div>