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
            console.log('hihi');
            console.log(rute);
            $.ajax({
                type: 'post',
                url: '/getJadwal/'+rute,
                dataType: 'json',
                data: {
                    rute: rute,
                },
                success: function(data) {
                    console.log(data);
                    
                } 
            });
        });
    });
   
</script>
@endpush

{{-- <h4>Tracking Barang Anda</h4> --}}
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
                    <button type="submit" class="theme-btn">Cek Jadwal Kapal</button>
                </div>
            </div>
        </form>
    </div>
</div>