@extends('layout.master')
@section('title','Tentang Kami')
@section('menuTentangKami','active')

@section('content')
<div class="container">
    <h3 class="text-center">Tim Pengembang</h3>
    <hr>
    <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="../tentang/mia.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4>Lailatul Islamia</h4>
                  <h6>S1 Pendidikan Teknik Informatika</h6>
                  <h6>190533646806</h6>
                  <p class="text-secondary mb-1">CEO Si Dalang</p>
                  <p class="text-muted font-size-sm">Kota Pasuruan</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="../tentang/fayi.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4>Fayi' Hanif Muhyiddin</h4>
                    <h6>S1 Pendidikan Teknik Informatika</h6>
                    <h6>190533646850</h6>
                    <p class="text-secondary mb-1">Full Stack Developer</p>
                    <p class="text-muted font-size-sm">Kabupaten Kebumen</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="../tentang/rizki.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4>Mohammad Rizki Pratama</h4>
                    <h6>S1 Pendidikan Teknik Informatika</h6>
                    <h6>190533646892</h6>
                    <p class="text-secondary mb-1">Back End Developer</p>
                    <p class="text-muted font-size-sm">Kota Cirebon</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
    
</div>
@endsection