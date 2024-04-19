@extends('layouts.index')

@section('title', '| Detail Penjualan')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Penjualan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard_ptgs') }}">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('pembelian') }}">Data Penjualan</a></li>
                        <li class="breadcrumb-item active">Detail Penjualan</li>
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
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Quantity</th>
                                        <th>Subtotoal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailPenjualan as $index => $sale)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $sale->produk->nm_produk ?? 'Nama produk tidak tersedia' }}</td>
                                            <td>{{ $sale->jml_produk }}</td>
                                            <td>Rp {{ number_format($sale->sub_total, 2, ',', '.') }}</td>
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
