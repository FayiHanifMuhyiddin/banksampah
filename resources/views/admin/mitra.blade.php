@extends('layout.master2')
@section('title','Data Mitra')
@section('menuMitra','active')

@section('content')

<div class="container mt-3">
    <div class="row">
      <div class="col-12">
  
      <div class="py-4 justify-content-end align-items-center">
        <h3>Dashboard Menu Mitra</h3>
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
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($mitras as $mitra)
          <tr>
            <th>{{$loop->iteration}}</th>
            {{-- <td> <a href="{{ route('mahasiswas.show',['mahasiswa'=>$mahasiswa->id]) }}"> {{$mahasiswa->nim}} </a></td> --}}
            {{-- <td> <a href="{{ url('/mahasiswas/'.$mahasiswa->id) }}"> {{$mahasiswa->nim}} </a></td> --}}
            <td>{{$mitra->nama}}</td>
            <td>{{$mitra->email}}</td>
            <td>{{$mitra->telepon}}</td>
            <td>{{$mitra->alamat}}</td>
            {{-- <td>{{$mitra->alamat == '' ? 'N/A' : $mitra->alamat}}</td> --}}
            <td>{{$mitra->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
            <td>{{$mitra->tanggal_lahir}}</td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>
      </table>
      </div>
    </div>
  </div>
@endsection