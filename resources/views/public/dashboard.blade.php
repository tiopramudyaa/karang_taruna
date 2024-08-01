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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset($karangTaruna->logo) }}" alt="Karang Taruna KOMPAK">
            {{ $karangTaruna->nama }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Dashboard</a>
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
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset($karangTaruna->background) }}'); background-size: cover; background-position: center;">
        <div class="text-center text-white">
            <h1>Karang Taruna {{ $karangTaruna->nama }}</h1>
            <p>Your dashboard content goes here.</p>
            <!-- Add your dashboard components here -->
        </div>
    </div>

    <!-- <section class="container my-5">
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
    </section> -->

    <section id="about" class="container my-5">
        <h2 class="text-center animate__animated animate__fadeIn animate__delay-1s">Tentang Kami</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card animate__animated animate__fadeIn animate__delay-2s">
                    <div class="card-body">
                        <h4 class="card-title">Visi</h4>
                        <ul class="list-unstyled">
                            @foreach ($visi as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card animate__animated animate__fadeIn animate__delay-3s">
                    <div class="card-body">
                        <h4 class="card-title">Misi</h4>
                        <ul class="list-unstyled">
                            @foreach ($misi as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container my-5">
        <h2 class="text-center animate__animated animate__fadeIn animate__delay-1s">Event</h2>
        <div class="row">
            @foreach ($proker as $item)
            <div class="col-md-4 animate__animated animate__fadeIn animate__delay-4s">
                <div class="card" style="background-color: lightblue;">
                    <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_proker }}</h5>
                        <p class="card-text">{{ Str::limit($item->deskripsi, 100, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- ppppp -->
    <section id="documentation" class="container my-5">
        <h2 class="text-center">Dokumentasi</h2>
        <div id="documentationCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php
                $chunkedImages = $images->chunk(4); // Membagi gambar dalam grup 4
                @endphp
                @foreach ($chunkedImages as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $image)
                        <div class="col-md-3 mb-3">
                            <img src="{{ asset($image->path) }}" class="d-block w-100" alt="Dokumentasi">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#documentationCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#documentationCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- ppppp -->

    <!-- Struktur Keorganisasian
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
    </section> -->

    <!-- Event -->
    <section id="contact" class="container my-5">
        <h2 class="text-center animate__animated animate__fadeIn animate__delay-1s">Kontak Kami</h2>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 mb-4 animate__animated animate__fadeIn animate__delay-2s">
                <div class="d-flex align-items-center">
                    <i class="fas fa-map-marker-alt fa-2x mr-3"></i>
                    <div>
                        <h5>Alamat</h5>
                        <p>{{ $karangTaruna->alamat }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeIn animate__delay-3s">
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope fa-2x mr-3"></i>
                    <div>
                        <h5>Email</h5>
                        <p>{{ $karangTaruna->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeIn animate__delay-4s">
                <div class="d-flex align-items-center">
                    <i class="fas fa-phone fa-2x mr-3"></i>
                    <div>
                        <h5>Telepon</h5>
                        <p>{{ $karangTaruna->telp }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uncomment this section if you want to include a map -->
        <!--
        <div id="contact-map" style="height: 300px;" class="animate__animated animate__fadeIn animate__delay-5s"></div>
        -->
    </section>

    <section class="container my-5">

        <!-- <h2 class="text-center animate__animated animate__fadeIn animate__delay-1s">Lokasi Kami</h2> -->
        <div id="map" style="height: 300px;" class="animate__animated animate__fadeIn animate__delay-2s"></div>
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
            // Lokasi yang ingin ditampilkan di peta
            var location = {
                lat: -6.200000,
                lng: 106.816666
            }; // Ganti dengan koordinat lokasi Anda

            // Inisialisasi peta
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12, // Zoom level
                center: location // Titik pusat peta
            });

            // Menambahkan marker di lokasi
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Lokasi Kami'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>

</html>