
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">
        <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
        <title>Radar Bogor | Administrator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <style>
            .form-control-dark {
                border-color: var(--bs-gray);
            }
            .form-control-dark:focus {
                border-color: #fff;
                box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
            }

                .text-small {
                font-size: 85%;
            }

            .dropdown-toggle:not(:focus) {
                outline: 0;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <img src="{{ asset('assets/img/radarbogor.png') }}" alt="" style="width: 150px; height: 50px;" class="bg bg-black">
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('dashboard') }}" class="nav-link px-2 link-secondary">Dashboard</a></li>
                    <li><a href="{{ route('listRuangan.index') }}" class="nav-link px-2">Ruangan</a></li>
                    <li><a href="#" class="nav-link px-2">Booking</a></li>
                    <li><a href="{{ route('listPenggunaAdministrasi.index') }}" class="nav-link px-2">Pengguna(Admin)</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary me-2">Home</a>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </header>

                <div class="container">
                    @yield('content')
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
