<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\Kerajinan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class keranjangController extends Controller
{
    public function keranjang(kerajinan $kerajinan)
    {
        return view('cart', ['kerajinan'=>$kerajinan]);
    }

    public function bayar()
    {
        return view('bayar');
    }

    public function pesanan()
    {
        return view('pesanan');
    }


    public function pemesanan()
    {
        return view('pemesanan');
    }
}
