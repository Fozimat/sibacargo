@extends('backend.template')

@section('title')
Postingan
@endsection

@push('style')
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/simple-datatables/style.css') }}">
@endpush

@push('script')
<script src="{{ asset('admin-assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
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
                    <h3>Kategori</h3>
                    @if(session('flash'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('flash') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif()
                </div>


                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Postingan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('postingan.create') }}" class="btn btn-primary rounded-pill">Tambah Postingan</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th>Tanggal Posting</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postingan as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->penulis }}</td>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->kategori->nama_kategori }}</td>
                                <td>{{ $p->tanggal_posting }}</td>
                                <td>{{ $p->judul }}</td>
                                <td>
                                    <a href="{{ route('postingan.edit', $p->id) }}"
                                        class="btn btn-success rounded-pill">ubah</a>
                                    <form class="d-inline" action="{{ route('postingan.destroy', $p->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                                            class="btn btn-danger rounded-pill">hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection