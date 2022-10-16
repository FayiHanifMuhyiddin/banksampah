<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda(){
        return view('beranda');
    }
    public function produk(){
        return view('produk');
    }
    public function kerajinan(){
        return view('kerajinan');
    }
    public function banksampah(){
        return view('banksampah');
    }
    public function tentang(){
        return view('tentang');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function profil(){
        return view('user');
    }
    public function user(){
        return view('user');
    }
}
