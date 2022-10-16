@extends('layout.master')
@section('title','Profil')

@section('content')

<div class="container mt-3">
    <div class="row">
      <div class="col-12">

      <div  class="pt-3 d-flex justify-content-end ">
        <h1 align="left" class="h2 mr-auto">Profil saya</h1>
      </div>
      <hr>
      <ul>
      <div class="row">
              <div class="col-md-5">
              <img src="../user/mia.png"' height="300" width="300" alt='foto'>
              </div>

      <div class="col-md-6">
          <table class="table table-m border">

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
              <br>
            <tbody>
              <tr>
                <td class="table-success" width="200px">Nama</td>
                <td>Lailatul Islamia</td>
              </tr>
              <tr>
                <td class="table-success">Jenis kelamin</td>
                <td>Perempuan</td>
              </tr>
              <tr>
                <td class="table-success">Tanggal lahir</td>
                <td>17 Oktober 2001</td>
              </tr>
              <tr>
                <td class="table-success">Alamat</td>
                <td>JL. KH Syahroni, No. 29, Sekar Mojo, Purwosari, Pasuruan, Jawa Timur 67162</td>
              </tr>
              <tr>
                <td class="table-success">Email</td>
                <td>lailatulislamia@gmail.com</td>
              </tr>
              <tr>
              <tr>
                <td class="table-success">Nomor HP</td>
                <td>081546787652</td>
              </tr>

            </tbody>

          </table>
      </div>
      </div>
      </ul>
      </div>
    </div>
</div>
<br>
@endsection
