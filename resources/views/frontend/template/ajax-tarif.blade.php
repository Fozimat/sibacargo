@section('csrf-token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@push('script')
<script>
    $(document).ready(function() {
        function rupiah(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1 + x2;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#pengiriman').on('change',function() {
            if(this.value == 'barang') {
                $('#dimensi').removeClass('d-none');
            } else {
                $('#dimensi').addClass('d-none');
            }
            $('#result').empty()
        });
        $('#cektarif').submit(function(e) {
            e.preventDefault();
            var kota_asal = $('#kota_asal').val();
            var kota_tujuan = $('#kota_tujuan').val();
            var pengiriman = $('#pengiriman').val();

            var berat = $('#berat').val();
            var panjang = $('#panjang').val();
            var lebar = $('#lebar').val();
            var tinggi = $('#tinggi').val();
            $.ajax({
                type: 'post',
                url: '/getHarga/'+kota_asal+ '/' + kota_tujuan+ '/' + pengiriman,
                dataType: 'json',
                data: {
                    kota_asal: kota_asal,
                    kota_tujuan: kota_tujuan,
                    pengiriman: pengiriman,
                },
                success: function(data) {
                    if(data.length != 0) {
                        if(pengiriman == 'kendaraan') {
                            var content = `
                            <h4>Tarif Pengiriman Kendaraan ${data[0].daerah_asal.nama} - ${data[0].daerah_tujuan.nama}</h4>
                            <table class="table table-bordered table-striped">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Asal</th>
                                                    <th>Tujuan</th>
                                                    <th>Servis</th>
                                                    <th>Jenis Kendaraan</th>
                                                    <th>Harga</th>
                                                    <th>Estimasi (Hari)</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                        `;
                            for(i = 0; i < data.length; i++) {
                                content += `
                                        <tr>
                                            <td>${data[i].daerah_asal.nama}</td>
                                            <td>${data[i].daerah_tujuan.nama}</td>
                                            <td>${data[i].servis.nama}</td>
                                            <td>${data[i].kendaraan_id}</td>
                                            <td>${rupiah(data[i].harga)}</td>
                                            <td>${data[i].estimasi}</td>
                                        </tr>
                                `; 
                            };
                            content += `
                                            </tbody>
                                        </table>`;
                            content += `
                            <div class="col-lg-12 col-md-12 col-12 mt-2">
                                <strong>Penting:</strong>
                                <p>* Harga sewaktu-waktu dapat berubah</p>
                                <p>* Estimasi berlaku dari keberangkatan Truck/Kapal</p>
                                <p>* Hubungi kami <a href="{{ route('kontak') }}" target='_blank' class="text-primary">Klik
                                        Disini</a></p>
                            </div>
                            `;
                        } else if(pengiriman == 'barang') {
                            if(berat <= data[0].berat_minimal) {
                                berat = data[0].berat_minimal;
                            }
                            var aktual = Math.round(parseInt(data[0].harga) * parseInt(berat));
                            var volume_darat_laut_kg = Math.round((parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 4000));
                            var volume_darat_laut = Math.round((parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 4000) * parseInt(data[0].harga));
                            var volume_udara_kg = Math.round((parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 6000));
                            var volume_udara = Math.round((parseInt(panjang) * parseInt(lebar) * parseInt(tinggi) / 6000) * parseInt(data[0].harga));
                            var kubikasi_m = ((panjang * lebar * tinggi) / 1000000);
                            var kubikasi = ((panjang * lebar * tinggi) / 1000000) * parseInt(data[0].harga);
                            var content = `
                            <h4>Tarif Pengiriman Barang ${data[0].daerah_asal.nama} - ${data[0].daerah_tujuan.nama}</h4>
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Servis</th>
                                        <th>Berat Minimum</th>
                                        <th>Harga (Kg)</th>
                                        <th>Estimasi (Hari)</th>
                                    </tr>
                                </thead>
                            <tbody>
                            `;
                            for(i = 0; i < data.length; i++) {
                                content += `
                                        <tr>
                                            <td>${data[i].daerah_asal.nama}</td>
                                            <td>${data[i].daerah_tujuan.nama}</td>
                                            <td>${data[i].servis.nama}</td>
                                            <td>${data[i].berat_minimal} Kg</td>
                                            <td>${rupiah(data[i].harga)}</td>
                                            <td>${data[i].estimasi}</td>
                                        </tr>
                                `; 
                            };
                            var berat_diambil = berat < volume_udara_kg ? volume_udara_kg : berat;
                            content += `
                                            </tbody>
                                        </table>`;
                            content += `
                            <div class="col-lg-12 col-md-12 col-12 mt-2">
                                <strong>Berat Aktual: ${berat} Kg  ${berat <= data[0].berat_minimal ? '(Kena minimum)' : ''} </strong> <br>
                                Volume Darat/Laut: P x L x T / 4.000 = <strong>${volume_udara_kg} Kg</strong> <br>
                                Volume Udara: P x L x T / 6.000 = <strong>${volume_darat_laut_kg} Kg</strong> <br>
                                Kubikasi: P x L x T / 1.0000.000 = <strong>${kubikasi_m} m<sup>3<sup> </strong> <br>
                                Berat yang diambil =  <strong>${berat < volume_udara_kg ? volume_udara_kg + ' Kg' : berat + ' Kg'} </strong> (diambil nilai yang paling besar antara berat volume dan berat aktual)
                                <h6>Total Biaya: ${berat_diambil} x ${data[0].harga} =  ${rupiah(berat_diambil * data[0].harga)}</h6>
                                </div>
                            `;
                            content += `
                            <div class="col-lg-12 col-md-12 col-12 mt-2">
                                <hr>
                                <strong>Penting:</strong>
                                <p>* Harga sewaktu-waktu dapat berubah</p>
                                <p>* Estimasi berlaku dari keberangkatan Truck/Kapal</p>
                                <p>* Hubungi kami <a href="{{ route('kontak') }}" target='_blank' class="text-primary">Klik
                                        Disini</a></p>
                            </div>
                            `;
                        } else if(pengiriman == 'elektronik') {
                            var content = `
                            <h4>Tarif Pengiriman Elektronik ${data[0].daerah_asal.nama} - ${data[0].daerah_tujuan.nama}</h4>
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Servis</th>
                                        <th>Jenis</th>
                                        <th>Harga (Unit)</th>
                                        <th>Estimasi (Hari)</th>
                                    </tr>
                                </thead>
                            <tbody>
                            `;
                            for(i = 0; i < data.length; i++) {
                                content += `
                                        <tr>
                                            <td>${data[i].daerah_asal.nama}</td>
                                            <td>${data[i].daerah_tujuan.nama}</td>
                                            <td>${data[i].servis.nama}</td>
                                            <td>${data[i].nama}</td>
                                            <td>${rupiah(data[i].harga)}</td>
                                            <td>${data[i].estimasi}</td>
                                        </tr>
                                `; 
                            };
                            content += `
                                            </tbody>
                                        </table>`;
                            content += `
                            <div class="col-lg-12 col-md-12 col-12 mt-2">
                                <hr>
                                <strong>Penting:</strong>
                                <p>* Harga sewaktu-waktu dapat berubah</p>
                                <p>* Estimasi berlaku dari keberangkatan Truck/Kapal</p>
                                <p>* Hubungi kami <a href="{{ route('kontak') }}" target='_blank' class="text-primary">Klik
                                        Disini</a></p>
                            </div>
                            `;
                            
                        }
                        $('#result').empty().append(content);
                    } else {
                        $('#result').empty().append(`
                            <h4>Tarif Tidak Tersedia, Silakan hubungi Admin</h4>
                            <p>* Hubungi kami <a href="{{ route('kontak') }}" target='_blank' class="text-primary">Klik
                                        Disini</a></p>
                        `);
                    }
                } 
            });
        });
    });
   
</script>
@endpush

<h4>Informasi Tarif Pengiriman</h4>
<div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3"
    style="padding: 10px;-webkit-box-shadow:0px 0px 0px 0px rgba(109, 109, 109, 0.06);box-shadow: 0px 0px 0px 0px rgba(109, 109, 109, 0.06);">

    <div class="request-quote-form">
        <form id="cektarif">
            <div class="row d-flex align-item-center">

                <div class="col-sm-4 col-12">
                    <label for="kota_asal">Kota Asal</label>
                    <select name="kota_asal" class="wide js-example-basic-single" id="kota_asal" required>
                        <option value="">-- Pilih --</option>
                        @foreach ($kabupaten_kota as $kab_kota)
                        <option value="{{ $kab_kota->id }}">{{ $kab_kota->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-4 col-12">
                    <label for="kota_tujuan">Kota Tujuan</label>
                    <select name="kota_tujuan" class="wide js-example-basic-single" id="kota_tujuan" required>
                        <option value="">-- Pilih --</option>
                        @foreach ($kabupaten_kota as $kab_kota)
                        <option value="{{ $kab_kota->id }}">{{ $kab_kota->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-4 col-12">
                    <label for="pengiriman">Pengiriman</label>
                    <select name="pengiriman" class="wide js-example-basic-single" id="pengiriman" required>
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
            </div>
            <div class="row d-flex align-item-center d-none dimensi" id="dimensi">
                <div class="col-sm-3 col-12">
                    <label for="berat">Berat (Kg)</label>
                    <input type="number" name="berat" id="berat" value="0">
                </div>

                <div class="col-sm-3 col-12">
                    <label for="panjang">Panjang (Cm)</label>
                    <input type="number" name="panjang" id="panjang" value="0">
                </div>

                <div class="col-sm-3 col-12">
                    <label for="lebar">Lebar (Cm)</label>
                    <input type="number" name="lebar" id="lebar" value="0">
                </div>

                <div class="col-sm-3 col-12">
                    <label for="tinggi">Tinggi (Cm)</label>
                    <input type="number" name="tinggi" id="tinggi" value="0">
                </div>
            </div>
            <div class="row d-flex align-item-center">
                <div class="col-sm-12">
                    <button type="submit" class="theme-btn">Cek Tarif</button>
                </div>
            </div>
            <div class="row mt-5 result" id="result">

            </div>

        </form>
    </div>
</div>