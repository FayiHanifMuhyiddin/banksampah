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
                    <h3 class="text-center">Masuk Si Dalang</h3>
                </div>
                <form action="{{ route('login') }}" method="post">
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
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="" class="zmdi zmdi-lock"><strong>Kata sandi</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Masuk</button>
                    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a> sekarang!</p>

                <div align="right">
                <a href="/forget-password">Lupa kata sandi</a> </div>
            </div>
                </form>
            </div>
        </div>
    </div>
@endsection

