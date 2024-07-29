<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atma Kitchen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #F0F0F0;" data-bs-theme="">
    <header>
        <nav class="navbar mx-auto navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex flex-grow-1 justify-content-end">
                    <div class="btn-group">
                        <a class="btn btn-outline-dark dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
                        <ul class="dropdown-menu dropdown-menu-end p-3" style="width: 400px;" aria-labelledby="dropdownMenu">
                            <h5>Pengaturan</h5>
                            <p></p>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="">Edit Profile</a></li>
                            <!-- <li><a class="dropdown-item" href="">Logout</a></li> -->
                            <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <div class="list-group">
                        <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action {{ Request::is('/') ? 'active' : '' }}" aria-current="true">Profile</a>
                        <a href="{{ url('/anggota') }}" class="list-group-item list-group-item-action {{ Request::is('anggota') ? 'active' : '' }}" aria-current="true">Anggota</a>
                        <a href="{{ url('/proker') }}" class="list-group-item list-group-item-action {{ Request::is('proker') ? 'active' : '' }}" aria-current="true">Kegiatan</a>

                    </div>
                </div>
            </nav>
            @yield('content')

        </div>
    </div>


    <footer class="mt-auto">
        <nav class="navbar justify-content-between mt-4 bg-dark">
            <div class="container" style="height: 40px;">
                <p class="text-light">© Karang Taruna KOMPAK</p>
            </div>
        </nav>
    </footer>
    <script src="https://kit.fontawesome.com/098cbe1db3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>