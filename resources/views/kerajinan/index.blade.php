@extends('layout.master2')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Data Produk Kerajinan</h2>
        <br>
      </div>
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
            <th class="text-center">No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Harga</th>
            <th>Tanggal ditambahkan</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($kerajinans as $kerajinan)
          <tr>
            <th class="text-center">{{$loop->iteration}}</th>
            <td>{{$kerajinan->nama}}</td>
            <td>{{$kerajinan->jenis}}</td>
            <td>{{$kerajinan->bahan}}</td>
            <td>Rp {{$kerajinan->harga}},00</td>
            <td>{{$kerajinan->updated_at}}</td>
            <td class="text-center"><a href="{{route('kerajinan.show2', ['kerajinan' => $kerajinan->id])}}" class="btn btn-success">Detail</a></td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>

      </table>
    </div>
      <div align="right">
      <a href="{{route('kerajinan.create')}}" class="btn btn-primary">Tambah Produk</a></div>
    </div>
  </div>

@endsection
