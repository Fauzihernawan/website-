@extends('layouts.index')

@section('title', '| Form Produk')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard_ptgs') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('produk') }}">Produk</a></li>
                        <li class="breadcrumb-item active">Form Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <form action="{{ route('pembelian.tambah.simpan') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nm_pelanggan">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nm_pelanggan" name="nm_pelanggan">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="tgl_penjualan">Tanggal</label>
                                <input type="date" class="form-control" id="tgl_penjualan" name="tgl_penjualan">
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">
                                Pilih Produk
                            </h6>
                        </div>
                        <div class="card-body" id="saleForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produk">Produk</label>
                                        <select class="form-control" id="produk" name="produk_id[]" required>
                                            <option value="">Pilih Produk</option>
                                            @foreach ($produk as $prod)
                                                <option value="{{ $prod->id }}">{{ $prod->nm_produk }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_harga">Jumlah Beli</label>
                                        <input type="number" class="form-control" id="total_harga" name="total_harga[]"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" id="addSaleItemSection">
                            <a href="{{ route('pembelian') }}" class="btn btn-secondary">Kembali</a>
                            <button type="button" class="btn btn-primary" id="addSaleItem">Tambah Produk</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>                   
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addSaleItem').addEventListener('click', function() {
            var saleForm = document.getElementById('saleForm');
            var newSaleItem = saleForm.cloneNode(true);
            saleForm.parentNode.insertBefore(newSaleItem, document.getElementById('addSaleItemSection'));
            // Reset the input values for the newly added sale item
            newSaleItem.querySelectorAll('input').forEach(input => input.value = '');
            newSaleItem.querySelectorAll('select').forEach(select => select.value = '');
        });
    </script>
@endsection
