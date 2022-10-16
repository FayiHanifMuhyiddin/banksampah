@extends('layout.master')
@section('title','Pembayaran')
@section('menuKeranjang','active')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Pemesanan</h2>
      </div>
      <hr>
      @if (session()->has('pesan'))
      <div class="alert alert-success">
          {{session()->get('pesan')}}
      </div>
      @endif
      @if (session()->has('hapus'))
      <div class="alert alert-danger">
          {{session()->get('hapus')}}
      </div>
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Metode Pembayaran</th>
            <th>Jasa Kirim</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img src='{{ asset("produk/pigura1.png") }}'  alt="..." width="100"></td>
            <td>Figura motif daun</td>
            <td>Pigura</td>
            <td>Kertas</td>
            <td>Cash On Delivery</td>
            <td>JNT (Rp10.000)</td>
            <td>Rp25.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src='{{ asset("produk/vas6.png") }}'  alt="..." width="100"></td>
            <td>Vas 6</td>
            <td>Vas</td>
            <td>Plastik</td>
            <td>Cash On Delivery</td>
            <td>SiCepat (Rp10.000)</td>
            <td>Rp15.000</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><b>Total</b></td>
            <td><b>Rp60.000</b></td>
          </tr>
        </tbody>

      </table>
    </div>
      <div align="right">
      <a href="/keranjang" class="btn border">Kembali</a> &nbsp;
      <a href="/pesanan-saya" class="btn btn-success">Konfirmasi Pembayaran</a></div>
    </div>
  </div>
@endsection
