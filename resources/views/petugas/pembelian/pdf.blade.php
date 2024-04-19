<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Transaksi Penjualan</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
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
    <p><strong>Total Harga:</strong>Rp. {{ number_format($totalHarga->total_harga, 2, ',', '.') }}</p>
</body>

</html>
