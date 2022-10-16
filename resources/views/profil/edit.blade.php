@extends('layout.master')
@section('title','Edit Profil')

@section('content')

<div class="container">

    <h1>hi</h1>
    {{-- <div class="row">
        <div class="col-md-8 col-xl-6">
          <h1>Edit Profil</h1>
          <hr>
    
          <form action="{{ route('kerajinan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text"
              class="form-control @error('nama') is-invalid @enderror"
              id="nama" name="nama" value="{{ old('nama') }}">
              @error('nama')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
    
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
    
            <div class="form-group">
              <label for="detail">Detail Produk</label>
              <textarea class="form-control" id="detail" rows="3"
              name="detail">{{ old('detail') }}</textarea>
            </div>

            <div class="form-group">
                <label for="harga">Harga Produk</label>
                <input type="number"
                class="form-control @error('harga') is-invalid @enderror"
                id="harga" name="harga" value="{{ old('harga') }}">
                @error('harga')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <br>
            <div class="form-group">
                <label for="foto">Foto Produk</label>
                @csrf
                <div class="form-group">
                  <label for="berkas">Upload gambar</label>
                  <br>
                  <input type="file" accept="image/*" class="form-control @error('foto')is-invalid @enderror"
                    id="foto" name="foto" value="{{old('foto')}}">
                  @error('foto')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
              <br>

            <button type="submit" class="btn btn-primary mb-2">Tambah Produk</button>
          </form>

        </div>
    </div>
</div> --}}
</div>

@endsection