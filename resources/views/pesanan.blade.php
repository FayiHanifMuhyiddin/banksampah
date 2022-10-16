@extends('layout.master')
@section('title','Pembayaran')
@section('menuKeranjang','active')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Pesanan Saya</h2>
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
            <th>Nomor Transaksi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Metode Pembayaran</th>
            <th>Jasa Kirim</th>
            <th>Status</th>
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
            <td>Dikemas</td>
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
            <td>Dikirim</td>
            <td>Rp15.000</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<br>
<br>
@endsection
