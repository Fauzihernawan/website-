@extends('layouts.index')

@section('title', '| Data Pembelian')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembelian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard_ptgs') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Penjualan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            {{-- <a href="{{ route('kategori.tambah') }}" class="btn btn-primary mb-3">Tambah Kategori</a> --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('formPembelian') }}" class="btn btn-primary mb-3">Input Pembelian</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 300px">Nama Pelanggan</th>
                                        <th style="width: 400px">Tanggal Penjualan</th>
                                        <th style="width: 400px">Total Harga</th>
                                        <th style="width: 250px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembelian as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->pelanggan->nm_pelanggan }}</td>
                                            <td>{{ $item->tgl_penjualan }}</td>
                                            <td>Rp {{ number_format($item->total_harga, 2, ',', '.') }}</td>
                                            <td>
                                                <button type="button" onclick="window.location='{{ route('pembelianDetail', $item->id) }}'" class="btn btn-info"> Detail</button>
                                                <a href="{{ route('cetakPdf', $item->id) }}" class="btn btn-info">Pdf</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
