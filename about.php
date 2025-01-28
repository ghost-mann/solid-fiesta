<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Name - Biography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

    </style>
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
                    <a class="nav-link" href="#">STORE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT ME</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-2">BIEN</h1>
        <p class="lead">Grammy Award-Winning Artist | Producer | Performer</p>
    </div>
</section>

<!-- About The Artist Section -->
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center mb-5">About The Artist</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="./assets/bien.jpeg" alt="Bien-Aimé Alusa Baraza" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="timeline">
                    <div class="timeline-item">
                        <h5>Early Life</h5>
                        <p>Born in Kenya, Bien attended Upper Hill School in Nairobi, where he joined the school choir,
                            <em>Voices in the Light</em>. A car accident in 2007 led him and his bandmates to pursue music seriously.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>Career Beginnings</h5>
                        <p>Bien co-founded <em>Sauti Sol</em> in 2005 with Savara, Chimano, and Polycarp, blending Afropop with rhumba and contemporary sounds.
                            In 2019, he launched his solo career while remaining part of the band.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>Rise to Fame</h5>
                        <p>He released his debut solo EP <em>Bald Men Love Better</em> in 2021, featuring hits like
                            <em>Bald Men Anthem</em> and <em>Mbwe Mbwe</em>. In 2023, he dropped his first solo album,
                            <em>Alusa Why Are You Topless?</em>, with collaborations from Ayra Starr, Ms. Banks, and Scar Mkadinali.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="section-padding">
    <div class="container">
        <h2 class="text-center mb-5">Achievements</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card achievement-card">
                    <div class="card-body text-center">
                        <i class="fas fa-award fa-3x mb-3 text-primary"></i>
                        <h4>Grammy Award Winner</h4>
                        <p>Won for songwriting on Burna Boy's album <em>Twice As Tall</em></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card achievement-card">
                    <div class="card-body text-center">
                        <i class="fas fa-music fa-3x mb-3 text-primary"></i>
                        <h4>Spotify Recognition</h4>
                        <p>Most-followed Kenyan artist in 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card achievement-card">
                    <div class="card-body text-center">
                        <i class="fas fa-ticket fa-3x mb-3 text-primary"></i>
                        <h4>World Tours</h4>
                        <p>Performed in Europe Tour 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Discography Section -->
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Discography</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <img src="./assets/album1.png" alt="Album 1" class="album-cover mb-3">
                    <h4>Bald Men Love Better (2021)</h4>
                    <p>Including hit singles: Mbwe Mbwe, Bald Men Anthem</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <img src="./assets/album2.png" alt="Album 2" class="album-cover mb-3">
                    <h4>Alusa Why Are You Topless(2024)</h4>
                    <p>Including hit singles: Ma Cherie, Lifestyle</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <img src="./assets/song1.png" alt="Album 1" class="album-cover mb-3">
                    <h4>Inauma (2022)</h4>

                </div>
            </div>
            <!-- Add more albums as needed -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Email: contact@bien.com</p>
                <p>Management: management@bien.com</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
