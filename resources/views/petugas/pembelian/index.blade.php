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
                                <a href="" class="btn btn-success mb-3">Export Penjualan (.xlsx)</a>
                                <a href="{{ route('formPembelian') }}" class="btn btn-primary mb-3">Input Pembelian</a>
                            </div>                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th style="width: 300px">Nama Pelanggan</th>
                                        <th style="width: 400px">Tanggal Penjualan</th>
                                        <th style="width: 400px">Total Harga</th>
                                        <th style="width: 400px">Di Buat Oleh</th>
                                        <th style="width: 75px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php($no = 1)
                                    @foreach ($penjualan as $item) --}}
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
