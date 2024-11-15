<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmed - Disability Transport Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand, .jumbotron h1 {
            color: #007bff !important;
            font-weight: bold;
        }
        .vehicle-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Transmed</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="jumbotron">
    <h1 class="display-4">Welcome to Transmed</h1>
    <p class="lead">Providing safe and reliable transportation for individuals with disabilities, including wheelchair-accessible options.</p>
    <a href="login.php" class="btn btn-primary btn-lg">Login</a>
</header>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Transmed is dedicated to providing top-quality transportation services to individuals with disabilities. Our vehicles are equipped to transport people using wheelchairs safely and comfortably.</p>
        </div>
        <div class="col-md-6">
            <h2>Our Vehicle</h2>
            <p>Our fleet includes modern, wheelchair-accessible Volkswagen vehicles in light grey, designed for maximum comfort and safety.</p>
            <img src="../../assets/img/ambulance-transport.jpg" alt="Wheelchair Accessible Volkswagen Vehicle" class="vehicle-image">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5 py-4 bg-light">
    <p>&copy; <?php echo date("Y"); ?> Transmed. All rights reserved.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
