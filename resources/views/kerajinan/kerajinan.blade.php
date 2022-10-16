@extends('layout.master')
@section('title','Kerajinan')
@section('menuKerajinan','active')

@section('content')

<div class="container">
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form class="d-flex">
      <input class="form-control me-2" type="search" name="search" value="{{old('search')}}" placeholder="Cari produk kerajinan berdasarkan nama" aria-label="Search">
      <button class="btn btn-success" type="submit">Cari</button>
    </form>
    </div>
    <div class="col-md-2"></div>
</div>
<div class="row mt-5">
    <div class="col-md-2 bg-light">
        <ul class="list-group mr-2">
            <li class="list-group-item bg-success text-center font-weight-bold"></i> JENIS KERAJINAN</li>
            <a href="/kerajinan-cari/tas" class="btn list-group-item">Tas</a>
            <a href="/kerajinan-cari/vas" class="btn list-group-item">Vas</a>
            <a href="/kerajinan-cari/pigura" class="btn list-group-item">Pigura</a>
            <a href="/kerajinan-cari/lainnya" class="btn list-group-item">Lainnya</a>
        </ul>
        <br>
        <ul class="list-group mr-2">
            <li class="list-group-item bg-success text-center font-weight-bold">BAHAN KERAJINAN</li>
            <a href="/kerajinan-cari/plastik" class="btn list-group-item">Plastik</a>
            <a href="/kerajinan-cari/kertas" class="btn list-group-item">Kertas</a>
            <a href="/kerajinan-cari/lainnyaa" class="btn list-group-item">Lainnya</a>
        </ul>
    </div>
    <div class="col-md-10">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/carousel4.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/carousel5.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/carousel6.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row mt-5">
    <h4 class="text-center font-weight-bold">Produk Terbaru</h4>
</div>
<div class="row">
  @forelse ($kerajinans as $kerajinan)
    <div class="card p-2 m-2" style="width: 16rem;">
      <img src='{{ asset("image/".$kerajinan->foto) }}' class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">{{$kerajinan->nama}}</h5>
        {{-- <p class="card-text">{{$kerajinan->detail}}</p><hr> --}}
        <a href="{{route('kerajinan.show', ['kerajinan' => $kerajinan->id])}}" method="GET" class="btn btn-primary">Detail</a>
        <a href="#" class="btn btn-danger">Rp {{$kerajinan->harga}},-</a>
      </div>
    </div>
  @empty
    <h6 class="text-center">Tidak ada data...</h6>
  @endforelse
</div>

</div>

@endsection