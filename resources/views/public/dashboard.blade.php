<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karang Taruna KOMPAK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #E8F4FA;
            /* Warna latar belakang lembut */
        }

        .navbar {
            background-color: #007BFF;
            /* Biru Navbar */
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: #FFD700 !important;
            /* Warna saat hover */
        }

        .hero {
            height: 70vh;
            background: url('path/to/background.jpg') center center no-repeat;
            background-size: cover;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #0056b3;
            /* Biru gelap untuk hero section */
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeInUp 2s;
        }

        .slide {
            height: 300px;
            background: url('path/to/slide.jpg') center center no-repeat;
            background-size: cover;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .organization img {
            max-height: 500px;
        }

        .footer {
            background-color: #003d7a;
            /* Biru gelap footer */
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .btn-primary {
            background-color: #0056b3;
            /* Biru untuk tombol */
            border-color: #0056b3;
        }

        .btn-primary:hover {
            background-color: #003d7a;
            /* Biru lebih gelap saat hover */
            border-color: #003d7a;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="path/to/logo.png" alt="Karang Taruna KOMPAK">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#organization">Struktur Keorganisasian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Dashboard -->
    <section id="dashboard" class="hero">
        <div class="container">
            <h1 class="animate__animated animate__fadeIn animate__delay-1s">Karang Taruna KOMPAK</h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-2s">Selamat Datang di Website Kami</p>
        </div>
    </section>

    <section class="container my-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide"></div>
                    <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                        <h5>Event 1</h5>
                        <p>Deskripsi Event 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide"></div>
                    <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                        <h5>Event 2</h5>
                        <p>Deskripsi Event 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide"></div>
                    <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
                        <h5>Event 3</h5>
                        <p>Deskripsi Event 3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Dokumentasi</h2>
        <div class="row">
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-2s">
                <div class="card">
                    <img src="path/to/documentation1.jpg" class="card-img-top" alt="Dokumentasi 1">
                    <div class="card-body">
                        <p class="card-text">Deskripsi Dokumentasi 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-3s">
                <div class="card">
                    <img src="path/to/documentation2.jpg" class="card-img-top" alt="Dokumentasi 2">
                    <div class="card-body">
                        <p class="card-text">Deskripsi Dokumentasi 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-4s">
                <div class="card">
                    <img src="path/to/documentation3.jpg" class="card-img-top" alt="Dokumentasi 3">
                    <div class="card-body">
                        <p class="card-text">Deskripsi Dokumentasi 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Lokasi Kami</h2>
        <div id="map" style="height: 300px;" class="animate__animated animate__fadeIn animate__delay-2s"></div>
    </section>

    <!-- Struktur Keorganisasian -->
    <section id="organization" class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Struktur Keorganisasian</h2>
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group animate__animated animate__fadeIn animate__delay-2s">
                    <li class="list-group-item">Anggota 1</li>
                    <li class="list-group-item">Anggota 2</li>
                    <li class="list-group-item">Anggota 3</li>
                    <li class="list-group-item">Anggota 4</li>
                    <li class="list-group-item">Anggota 5</li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="path/to/structure.jpg" class="img-fluid organization animate__animated animate__fadeIn animate__delay-3s" alt="Struktur Organisasi">
            </div>
        </div>
    </section>

    <!-- Event -->
    <section id="events" class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Event</h2>
        <div class="row">
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-2s">
                <div class="card">
                    <img src="path/to/event1.jpg" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Event 1</h5>
                        <p class="card-text">Deskripsi Event 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-3s">
                <div class="card">
                    <img src="path/to/event2.jpg" class="card-img-top" alt="Event 2">
                    <div class="card-body">
                        <h5 class="card-title">Event 2</h5>
                        <p class="card-text">Deskripsi Event 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-4s">
                <div class="card">
                    <img src="path/to/event3.jpg" class="card-img-top" alt="Event 3">
                    <div class="card-body">
                        <h5 class="card-title">Event 3</h5>
                        <p class="card-text">Deskripsi Event 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section id="about" class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Tentang Kami</h2>
        <h4 class="animate__animated animate__fadeIn animate__delay-2s">Visi</h4>
        <p class="animate__animated animate__fadeIn animate__delay-3s">Visi Kami adalah...</p>
        <h4 class="animate__animated animate__fadeIn animate__delay-4s">Misi</h4>
        <p class="animate__animated animate__fadeIn animate__delay-5s">Misi Kami adalah...</p>
    </section>

    <!-- Kontak -->
    <section id="contact" class="container my-5">
        <h2 class="animate__animated animate__fadeIn animate__delay-1s">Kontak Kami</h2>
        <p class="animate__animated animate__fadeIn animate__delay-2s">Alamat: Jalan Contoh No.123, Kota ABC</p>
        <p class="animate__animated animate__fadeIn animate__delay-3s">Email: karangtaruna@kompak.com</p>
        <p class="animate__animated animate__fadeIn animate__delay-4s">Telepon: (021) 12345678</p>
        <div id="contact-map" style="height: 300px;" class="animate__animated animate__fadeIn animate__delay-5s"></div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 Karang Taruna KOMPAK. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Inisialisasi Google Maps
        function initMap() {
            var location = {
                lat: -6.200000,
                lng: 106.816666
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });

            var contactMap = new google.maps.Map(document.getElementById('contact-map'), {
                zoom: 10,
                center: location
            });
            var contactMarker = new google.maps.Marker({
                position: location,
                map: contactMap
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>

</html>