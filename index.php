<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<!--navbar-->

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Bien.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">MY LIFE SO FAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT ME</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- auto sliding Carousel -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/image1.jpg" class="d-block" alt="Music Image 1">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-2">Artist Name</h1>
                <p class="lead">Grammy Award-Winning Artist | Producer | Performer</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/image2.jpg" class="d-block" alt="Music Image 2">
        </div>
        <div class="carousel-item">
            <img src="assets/image3.jpg" class="d-block" alt="Music Image 3">
        </div>
    </div>
</div>
<!-- Latest Release -->
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Latest Release</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="./assets/bien.png" alt="Latest Album Cover" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <div class="album-info">
                    <div class="album-details p-4">
                        <h3 class="album-title mb-3">NISEME</h3>
                        <p class="release-date mb-3"><i class="fas fa-calendar-alt me-2"></i>Release Date: 2024</p>
                        <div class="track-list mb-4">
                            <h5> BIEN & DJ SEME</h5>
                        </div>
                        <div class="streaming-links d-flex gap-3 mb-4">
                            <a href="#" class="btn btn-dark"><i class="fab fa-spotify me-2"></i>Spotify</a>
                            <a href="#" class="btn btn-dark"><i class="fab fa-apple me-2"></i>Apple Music</a>
                            <a href="#" class="btn btn-dark"><i class="fab fa-youtube me-2"></i>YouTube</a>
                        </div>
                        <a href="index.php" class="btn btn-primary btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Schedule -->
<section class="section-padding">
    <div class="container">
        <h2 class="text-center mb-5">Upcoming Tours</h2>
        <div class="tour-date">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h5 class="mb-0">Jan 28, 2025</h5>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">Nairobi, KE</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">Muze Club Westlands</p>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary">Buy Tickets</button>
                </div>
            </div>
        </div>
        <!-- Add more tour dates as needed -->
    </div>
</section>
<!--footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Email: contact@artistname.com</p>
                <p>Management: management@artistname.com</p>
            </div>
            <div class="col-md-4">
                <h5>Social Media</h5>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Newsletter</h5>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>