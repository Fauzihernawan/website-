<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Penjualan;
use App\Charts\pendapatBulananChart;

class AdminController extends Controller
{
    public function index (pendapatBulananChart $chart) 
    {
        $produkCount = Produk::count();
        $userCount = User::count();
        $data['chart'] = $chart->build();
        return view('admin.dashboard.index', $data, ['produk_count' => $produkCount, 'user_count' => $userCount]);
    }

    public function pembelian()
    {
        $pembelian = Penjualan::all();
        //  dd($pembelian);
        return view('admin.pembelian.index', compact('pembelian'));
    }
}
