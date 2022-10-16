@extends('layout.master2')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')

<div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit kerajinan</h1>
        <hr>

        <form action="{{route('kerajinan.update',['kerajinan'=> $kerajinan->id])}}" method="POST">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="nama">Nama Kerajinan</label>
            <input type="text"
            class="form-control @error('nama') is-invalid @enderror"
            id="nama" name="nama" value="{{ old('nama') ?? $kerajinan->nama }}">
            @error('nama')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <br>

          <div class="form-group">
            <label for="jenis">Jenis Produk</label>
            <select class="form-control" name="jenis" id="jenis">
              <option value="tas"
              {{ old('jenis')=='tas' ? 'selected': '' }} >
              Tas
              </option>
              <option value="vas"
              {{ old('jenis')=='vas' ? 'selected': '' }} >
              Vas
              </option>
              <option value="pigura"
              {{ old('jenis')=='pigura' ? 'selected': '' }} >
              Pigura
              </option>
              <option value="lainnya"
              {{ old('jenis')=='lainnya' ? 'selected': '' }} >
              Lainnya
              </option>
            </select>
            @error('jenis')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <br>

          <div class="form-group">
            <label for="bahan">Bahan Produk</label>
            <select class="form-control" name="bahan" id="bahan">
              <option value="plastik"
              {{ old('bahan')=='plastik' ? 'selected': '' }} >
              Plastik
              </option>
              <option value="kertas"
              {{ old('bahan')=='kertas' ? 'selected': '' }} >
              Kertas
              </option>
              <option value="lainnya"
              {{ old('bahan')=='lainnya' ? 'selected': '' }} >
              Lainnya
              </option>
            </select>
            @error('bahan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <br>

          <div class="form-group">
            <label for="detail">Detail Produk</label>
            <textarea class="form-control" id="detail" rows="3"
            name="detail">{{ old('detail')  ?? $kerajinan->detail }}</textarea>
          </div>
          <br>

          <div class="form-group">
            <label for="harga">Harga Produk</label>
            <input type="number"
            class="form-control @error('harga') is-invalid @enderror"
            id="harga" name="harga" value="{{ old('harga') ?? $kerajinan->harga}}">
            @error('harga')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <br>

          <div class="form-group">
            <label for="foto">Foto Produk</label>
          </div>
            <form action="/kerajinan/{{$kerajinan->id}}/update" method="POST"
                enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="foto">Upload gambar</label>
                <br>
                <input type="file" class="form-control-file" id="foto" name="foto">
            @error('foto')
                <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ URL::previous() }}" class="btn btn-secondary"> <i class="fas fa-arrow-left"></i>Kembali</a>
        </form>

      </div>
    </div>
  </div>

@endsection
