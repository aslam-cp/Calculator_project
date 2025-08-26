<?php
// Start session
session_start();

// Example: set username (for demo)
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Guest";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Variety Index Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #ff758c, #ff7eb3, #5de6de, #3cba92);
      background-size: 300% 300%;
      animation: gradientBG 8s ease infinite;
      color: #fff;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .navbar {
      background: rgba(0,0,0,0.3);
      border-radius: 0 0 15px 15px;
    }

    .hero {
      text-align: center;
      padding: 80px 20px;
    }
    .hero h1 {
      font-weight: 600;
      font-size: 3rem;
    }
    .hero p {
      font-size: 1.2rem;
    }

    .card {
      border-radius: 15px;
      overflow: hidden;
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0px 10px 25px rgba(0,0,0,0.3);
    }

    footer {
      text-align: center;
      padding: 15px;
      background: rgba(0,0,0,0.4);
      border-radius: 15px 15px 0 0;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MyVarietySite</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <h1>Welcome, <?php echo $_SESSION['username']; ?> 👋</h1>
  <p>This is a <b>Variety Styled</b> PHP Index Page with modern design.</p>
  <a href="login.php" class="btn btn-light btn-lg shadow">Get Started</a>
</section>

<!-- Features / Cards -->
<div class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card text-dark">
        <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Feature One</h5>
          <p class="card-text">An awesome feature to explore with more details inside.</p>
          <a href="#" class="btn btn-primary">Try Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-dark">
        <img src="https://picsum.photos/400/200?random=2" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Feature Two</h5>
          <p class="card-text">Cool feature with vibrant design and animation effects.</p>
          <a href="#" class="btn btn-success">Discover</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-dark">
        <img src="https://picsum.photos/400/200?random=3" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Feature Three</h5>
          <p class="card-text">Experience the magic of PHP + Bootstrap variety.</p>
          <a href="#" class="btn btn-danger">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  <p>© <?php echo date("Y"); ?> MyVarietySite | Made with ❤️ in PHP</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
