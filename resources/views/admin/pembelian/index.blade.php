@extends('layouts.index')

@section('title', '| Data Penjualan')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Penjualan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Beranda</a></li>
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
                            <a href="" class="btn btn-primary mb-3">Export Penjualan (.xlsx)</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 300px">Nama Produkn</th>
                                        <th style="width: 400px">Total Harga</th>
                                        <th style="width: 400px">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penjualan as $item => $penjualan)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $penjualan->produk->nm_produk ?? 'Nama produk tidak tersedia' }}</th>
                                            <th>{{ $penjualan->total_harga }}</th>
                                            <th>Rp {{ number_format($penjualan->subtotal, 2, ',','.') }}</th>
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
