<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoTravel</title>
    <link rel="icon" type="image/png" href="Favicon.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand">
        <img src="Favicon.webp" alt="GoTravel" width="30" height="24">
    </a>
    <a class="navbar-brand" style="color: blue;">Gotravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="Home.php">Landing Page</a>
            <a class="nav-link" href="About_Us.php">About Us</a>
        </div>
    </div>
  </div>

    <div class="ms-auto" style="margin-right:20px;">
        <a href="Login.php" class="btn btn-primary">Login</a>
    </div>
</nav>

<!-- Carousel -->
<div id="travelCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Jepang.avif" class="d-block w-100" alt="Destinasi 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Liburan ke Jepang</h5>
        <p>Nikmati Pemandangan di Gunung Fuji</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="RajaAmpat.avif" class="d-block w-100" alt="Destinasi 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Explore Raja Ampat</h5>
        <p>Jelajahi keindahan alam di Raja Ampat.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Candi.avif" class="d-block w-100" alt="Destinasi 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tour Candi</h5>
        <p>Menikmati sejarah dan arsitektur candi Candi di Indoneisa</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#travelCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#travelCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Info Paket Travel Placeholder -->
<section class="container my-5">
  <h2 class="text-center mb-4">Paket Travel Populer</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="Candi.avif" class="card-img-top" alt="Paket 1">
        <div class="card-body">
          <h5 class="card-title">Paket Bali</h5>
          <p class="card-text">3 Hari 2 Malam, hotel bintang 4, tour pantai & budaya.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="Jepang.avif" class="card-img-top" alt="Paket 2">
        <div class="card-body">
          <h5 class="card-title">Paket Jepang</h5>
          <p class="card-text">5 Hari 4 Malam, Tokyo & Kyoto, wisata sakura.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="Eropa.avif" class="card-img-top" alt="Paket 3">
        <div class="card-body">
          <h5 class="card-title">Paket Eropa</h5>
          <p class="card-text">7 Hari 6 Malam, Paris, Roma, London, full city tour.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3"">
  <p>&copy; 2025 GoTravel. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>