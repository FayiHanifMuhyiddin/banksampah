@extends('layout.master')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')

<div class="container mt-3">
    <div class="row">
      <div class="col-12 pt-3 justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Detail Kerajinan</h1>
        <hr>
      </div>

      <div class="row">
        <div class="col-md-7">
            <img src='{{ asset("image/".$kerajinan->foto) }}'  alt="..." width="400">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
          <br>
          <br>
          <br>
          <br>
          <h3>{{$kerajinan->nama}}</h3>
          <table class="table table-borderless">
            <tr>
              <th>Jenis</th>
              <td>{{$kerajinan->jenis}}</td>
            </tr>
            <tr>
              <th>Bahan</th>
              <td>{{$kerajinan->bahan}}</td>
            </tr>
            <tr>
              <th>Detail</th>
              <td>{{$kerajinan->detail}}
              </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>
                    {{$kerajinan->harga}}
                </td>
              </tr>
          </table>

          <a href="/keranjang" method="GET" class="btn btn-primary">Tambahkan ke Keranjang</a>

        </div>
      </div>


    </div>
  </div>

@endsection
