<?php

namespace App\Http\Controllers;

use App\Charts\pendapatBulananChart;
use App\Models\Produk;
use App\Models\User;

class AdminController extends Controller
{
    public function index (pendapatBulananChart $chart) 
    {
        $produkCount = Produk::count();
        $userCount = User::count();
        $data['chart'] = $chart->build();
        return view('admin.dashboard.index', $data, ['produk_count' => $produkCount, 'user_count' => $userCount]);
    }
}
