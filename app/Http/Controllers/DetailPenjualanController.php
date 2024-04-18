<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;


class DetailPenjualanController extends Controller
{
    public function detailPenjualan($id)
    {
        $Detailpenjualan = DetailPenjualan::where('penjualan_id', $id)->get();
        return view ('admin.penjualan.index', compact('Detailpenjualan'));
    }
}
