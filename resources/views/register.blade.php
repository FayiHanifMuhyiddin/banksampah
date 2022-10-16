@extends('layout.master')

<style type="text/css">
    body
    {
        background-image: url("../image/background.png");
        background-repeat: no-repeat;  
        background-size: cover;
    }
</style>
@section('content')
    <div class="container">
        <div class="col-md-4 offset-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Daftar Si Dalang</h3>
                </div>
                <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Kata sandi</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Kata sandi">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi kata sandi</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Kata sandi">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Daftar</button>
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
