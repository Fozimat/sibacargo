@extends('backend.template')

@section('title')
Postingan
@endsection

@push('script')
<script src="{{ asset('admin-assets/vendors/ckeditor/ckeditor.js') }}"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Postingan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Postingan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('postingan.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" id="judul"
                                                    class="form-control @error('judul') is-invalid @enderror"
                                                    name="judul" value="{{ old('judul') }}">
                                                @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="penulis">Penulis</label>
                                                <input type="text" id="penulis"
                                                    class="form-control @error('penulis') is-invalid @enderror"
                                                    name="penulis" value="{{ old('penulis') }}">
                                                @error('penulis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_kategori">Kategori</label>
                                                <select class="form-select" id="id_kategori" name="id_kategori">
                                                    @foreach ($kategori as $k)
                                                    <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('id_kategori')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_posting">Tanggal Posting</label>
                                                <input type="datetime-local" id="tanggal_posting"
                                                    class="form-control @error('tanggal_posting') is-invalid @enderror"
                                                    name="tanggal_posting" value="{{ old('tanggal_posting') }}">
                                                @error('tanggal_posting')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Tanggal Posting</label>
                                                <input class="form-control" type="file" id="gambar" name="gambra">
                                                @error('tanggal_posting')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <div id="editor">

                                                </div>
                                                @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
@endsection