<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Karang Taruna KOMPAK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Karang Taruna KOMPAK">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="organization.html">Struktur Keorganisasian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.html">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Kontak -->
    <section class="container my-5">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jl. XYZ No.123, Kota ABC</p>
        <p>Telepon: (021) 12345678</p>
        <p>Email: info@karangtaruna.com</p>
        <div id="map" style="height: 300px;"></div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 Karang Taruna KOMPAK. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>

</html>