@extends('layout.master2')
@section('title','Data Mitra')
@section('menuMitra','active')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Data Mitra</h2>
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
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($mitras as $mitra)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$mitra->nama}}</td>
            <td>{{$mitra->email}}</td>
            <td>{{$mitra->telepon}}</td>
            <td>{{$mitra->alamat}}</td>
            <td>{{$mitra->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
            <td>{{$mitra->tanggal_lahir}}</td>
            {{-- <td class="text-center"><a href="{{route('kerajinan.show2', ['kerajinan' => $kerajinan->id])}}" class="btn btn-success">Detail</a></td> --}}
            <td><a href="{{route('mitra.edit', ['mitra' => $mitra->id])}}" class="btn btn-warning">Edit</a></td>
            {{-- <td><a href="{{route('mitra.destroy', ['mitra' => $mitra->id])}}" class="btn btn-danger">Hapus</a></td> --}}
            <td>
              <form action="{{ route('mitra.destroy',
                ['mitra'=>$mitra->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>

      </table>
    </div>
      <div align="right">
      <a href="{{route('mitra.create')}}" class="btn btn-primary">Tambah Mitra</a></div>
    </div>
  </div>

@endsection
