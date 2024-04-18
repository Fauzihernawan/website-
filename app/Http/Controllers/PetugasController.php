<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.dashboard.index');
    }

    public function pembelian()
    {
        $pembelian = Penjualan::all();
        //  dd($pembelian);
        return view('petugas.pembelian.index', compact('pembelian'));
    }

    public function tambahPembelian()
    {
        $produk = Produk::all();
        return view('petugas.pembelian.form', compact('produk'));
    }

    public function simpanPembelian(Request $request)
    {
        $request->validate([
            'nm_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'tgl_penjualan' => 'required',
            'produk_id' => 'required|array', // Jika ini diharapkan menjadi array
            'total_harga' => 'required|array', // Jika ini diharapkan menjadi array
        ]);
        
        $pelanggan = Pelanggan::create([
            'nm_pelanggan' => $request->nm_pelanggan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        
        $penjualan = Penjualan::create([
            'pelanggan_id' => $pelanggan->id,
            'tgl_penjualan' => $request->tgl_penjualan,
            'total_harga' => 0,
        ]);
        
        $totalPrice = 0;

        foreach ($request->produk_id as $key => $produkId) {
            $produk = Produk::findOrFail($produkId);
            $jumlahBeli = $request->total_harga[$key];
            $subtotal = $produk->harga * $jumlahBeli;
           // Buat detail penjualan
            $saleDetail = DetailPenjualan::create([
                'penjualan_id' => $penjualan->id,
                'produk_id' => $produkId,
                'jml_produk' => $jumlahBeli,
                'sub_total' => $subtotal,
            ]);
        
            // Kurangi stok produk
            $produk->stok -= $jumlahBeli;
            $produk->save();  
            $totalPrice += $subtotal;
        }
        
        // Perbarui harga penjualan dengan total harga dari semua detail penjualan
        $penjualan->update(['harga' => $totalPrice]);        
        return redirect()->route('pembelian');
           
    }    

    public function produk()
    {
        $dataProduk = Produk::all();
        return view('petugas.produk.index', compact('dataProduk'));
    }
}
