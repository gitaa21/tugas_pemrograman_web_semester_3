<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{asset('css/bootstrap.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        {{-- Font Awesome Icon --}}
    <link rel="stylesheet" href="{{'fontawesome/css/all.min.css'}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}"><i class="fa fa-users"></i> User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('buku.index')}}"><i class="fa-solid fa-book"></i> Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('anggota.index')}}"><i class="fa-solid fa-address-book"></i> Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('kategori.index')}}"><i class="fa fa-tags"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('peminjaman.index')}}"><i class="fa-solid fa-file"></i> Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.password')}}"><i class="fa-solid fa-key"></i> Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.logout')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>{{$title}}</h1>
        @yield('content')
    </div>
</body>

</html>