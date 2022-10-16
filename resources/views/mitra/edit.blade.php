@extends('layout.master')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8 col-xl-6">
          <h1>Edit Data Mitra</h1>
          <hr>
    
          <form action="{{ route('mitra.update',['mitra'=>$mitra->id]) }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text"
              class="form-control @error('nama') is-invalid @enderror"
              id="nama" name="nama" value="{{ old('nama') ?? $mitra->nama }}">
              @error('nama')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
    
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text"
              class="form-control @error('email') is-invalid @enderror"
              id="email" name="email" value="{{ old('email') ?? $mitra->email }}">
              @error('email')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
    
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="number"
              class="form-control @error('telepon') is-invalid @enderror"
              id="telepon" name="telepon" value="{{ old('telepon') ?? $mitra->telepon }}">
              @error('telepon')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" rows="3"
              name="alamat">{{ old('alamat') ?? $mitra->alamat }}</textarea>
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin"
                  id="laki_laki" value="L"
                  {{ (old('jenis_kelamin') ?? $mitra->jenis_kelamin) =='L' ? 'checked': '' }} >
                  <label class="form-check-label" for="laki_laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin"
                  id="perempuan" value="P"
                  {{ (old('jenis_kelamin') ?? $mitra->jenis_kelamin) =='P' ? 'checked': '' }} >
                  <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                @error('jenis_kelamin')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
              id="tanggal_lahir" name="tanggal_lahir" value="{{ $mitra->tanggal_lahir }}">
              @error('tanggal_lahir')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-2">Edit Mitra</button>
          </form>

        </div>
    </div>
</div>
</div>

@endsection