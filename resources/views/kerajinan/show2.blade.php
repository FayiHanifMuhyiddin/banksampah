@extends('layout.master2')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div class="col-12 pt-3 justify-content-end align-center">
        <h1 class="h2 mr-auto">Detail Kerajinan</h1>
        <br>
      </div>

      <div class="row">
        <div class="col-md-7">
            <img src='{{ asset("image/".$kerajinan->foto) }}'  alt="..." width="600">
        </div>
        <div class="col-md-5">
          <br>
          <h2>{{$kerajinan->nama}}</h2>
          <hr>
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
          <hr>
          <div class="pt-3 d-flex justify-content-end align-items-center">
            <a href="/kerajinan-a" class="btn btn-success">Kembali</a>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="{{route('kerajinan.edit', ['kerajinan' => $kerajinan->id])}}"
                class="btn btn-warning">Edit</a> &nbsp; &nbsp;
            &nbsp; &nbsp;
            <form action="{{route ('kerajinan.destroy',
                ['kerajinan'=>$kerajinan->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
           </div>

        </div>
      </div>
    
    
  </div>
</div>



@endsection
