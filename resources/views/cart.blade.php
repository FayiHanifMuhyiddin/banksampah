@extends('layout.master')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div align="Center">
        <h2 class="mr-auto">Keranjang</h2>
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
            <th>Nama</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Metode Pembayaran</th>
            <th>Jasa Kirim</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Figura motif daun</td>
            <td>Pigura</td>
            <td>Kertas</td>
            <td><select class="form-control" name="jenis" id="jenis">
                <option value="pigura"
                {{ old('jenis')=='pigura' ? 'selected': '' }} >
                Cash On Delivery
                </option>
                <option value="lainnya"
                {{ old('jenis')=='lainnya' ? 'selected': '' }} >
                Transfer Bank
                </option>
              </select></td>
            <td><select class="form-control" name="jenis" id="jenis">
                <option value="tas"
                {{ old('jenis')=='tas' ? 'selected': '' }} >
                SiCepat (Rp10.000)
                </option>
                <option value="vas"
                {{ old('jenis')=='vas' ? 'selected': '' }} >
                JNE (Rp10.000)
                </option>
                <option value="pigura"
                {{ old('jenis')=='pigura' ? 'selected': '' }} >
                JNT (Rp10.000)
                </option>
                <option value="lainnya"
                {{ old('jenis')=='lainnya' ? 'selected': '' }} >
                Ninja Express (Rp10.000)
                </option>
              </select></td>
            <td>Rp25.000</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Vas 6</td>
            <td>Vas</td>
            <td>Plastik</td>
            <td><select class="form-control" name="jenis" id="jenis">
                <option value="pigura"
                {{ old('jenis')=='pigura' ? 'selected': '' }} >
                Cash On Delivery
                </option>
                <option value="lainnya"
                {{ old('jenis')=='lainnya' ? 'selected': '' }} >
                Transfer Bank
                </option>
              </select></td>
            <td><select class="form-control" name="jenis" id="jenis">
                <option value="tas"
                {{ old('jenis')=='tas' ? 'selected': '' }} >
                SiCepat (Rp10.000)
                </option>
                <option value="vas"
                {{ old('jenis')=='vas' ? 'selected': '' }} >
                JNE (Rp10.000)
                </option>
                <option value="pigura"
                {{ old('jenis')=='pigura' ? 'selected': '' }} >
                JNT (Rp10.000)
                </option>
                <option value="lainnya"
                {{ old('jenis')=='lainnya' ? 'selected': '' }} >
                Ninja Express (Rp10.000)
                </option>
              </select></td>
            <td>Rp15.000</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button></td>
          </tr>
        </tbody>
        <!-- Modal -->
      </table>

    </div>
    <br>
    <br>
      <div align="right">
      <a href="{{route('kerajinan.index')}}" class="btn border">Lanjut Belanja</a> &nbsp;
      <a href="/bayar" class="btn btn-success">Bayar</a></div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus item dari keranjang?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ya</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
@endsection
