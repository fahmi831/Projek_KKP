<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dapoer - Website Reservasi</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">DAPOER.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                    Menu <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 align-items-center">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/ruangan') }}">Ruangan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/reservasi') }}">Reservasi</a></li>

                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-primary btn-sm text-white py-2 px-4" href="{{ url('/login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Dapoer</div>
                <div class="masthead-heading text-uppercase">Nikmati Sajian Terbaik</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ url('/reservasi') }}">Reservasi Sekarang</a>
            </div>
        </header>

        <footer class="footer py-4 bg-light text-center fixed-bottom">
            <div class="container">
                <small class="text-muted">kerjain boss kkpnya</small>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
