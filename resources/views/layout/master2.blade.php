<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> --}}

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">

    <title>@yield('title','Sistem Informasi')</title>
    <style>
        /* body{
          background-image: url("../image/bg.jpg");
          background-repeat: repeat;
          
        } */

        .row .card:hover{
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.4);
            transform: scale();
        }
        
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top position-relative mb-2">
        <div class="container">
            <a class="navbar-brand" href="/home">MENU ADMIN  <img src="../image/logotextall.png" height="50" alt="logo"></a>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item">
                        <a class="nav-link @yield('menuDashboard')" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Kerajinan
                          </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" class="nav-link @yield('menuKerajinan')" href="/kerajinan-a">Data Kerajinan</a></li>
                            <li><a class="dropdown-item" class="nav-link @yield('menuKerajinan')" href="/kerajinan/create">Tambah Kerajinan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menuPesanan')" href="/pesanan">Pesanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Mitra
                          </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" class="nav-link @yield('menuMitra')" href="/mitra">Data Mitra</a></li>
                            <li><a class="dropdown-item" class="nav-link @yield('menuMitra')" href="/mitra/create">Tambah Mitra</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="/logout" class="btn btn-success"><img src="../image/user.png" width="30" alt="user"> Log Out</a>
        </div>
    </nav>
    
    @yield('content')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>